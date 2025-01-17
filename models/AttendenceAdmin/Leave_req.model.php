<?php

class Leave
{
    public $id;
    public $employee_id;
    public $leave_type_id;
    public $start_date;
    public $end_date;
    public $number_of_leave;
    public $remaining_leave;
    public $reason;
    public $leave_request_status_id;
    public $payslip_item_id;
    private $db; // Database connection

    public function __construct($db, $id = null, $employee_id = null, $leave_type_id = null, $start_date = null, $end_date = null, $number_of_leave = null, $remaining_leave = null, $reason = null, $leave_request_status_id = null, $payslip_item_id)
    {
        $this->db = $db; // Inject database connection
        $this->id = $id;
        $this->employee_id = $employee_id;
        $this->leave_type_id = $leave_type_id;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->number_of_leave = $number_of_leave;
        $this->remaining_leave = $remaining_leave;
        $this->reason = $reason;
        $this->leave_request_status_id = $leave_request_status_id;
        $this->payslip_item_id = $payslip_item_id;
    }

    // Method to calculate remaining leave
    public function calculateRemainingLeave()
    {
        // Fetch total leave days for the leave type
        $leave_type_query = $this->db->query("SELECT total_leaves FROM leave_type WHERE id = '$this->leave_type_id'");

        if (!$leave_type_query) {
            throw new Exception("Error fetching leave type data: " . $this->db->error);
        }

        $leave_type = $leave_type_query->fetch_assoc();

        if (!$leave_type) {
            throw new Exception("Leave type not found.");
        }

        // Fetch previous approved leaves
        $previous_leave_query = $this->db->query("SELECT SUM(no_of_leave) AS total_previous_leave 
                                                  FROM leave_requests 
                                                  WHERE employee_id = '$this->employee_id' 
                                                  AND leave_type_id = '$this->leave_type_id' 
                                                  AND leave_request_status_id = 2"); // Assuming 2 = Approved

        if (!$previous_leave_query) {
            throw new Exception("Error fetching previous leaves: " . $this->db->error);
        }

        $previous_leave_data = $previous_leave_query->fetch_assoc();
        $total_previous_leave = $previous_leave_data['total_previous_leave'] ?? 0;

        // Calculate no_of_leave for the current request
        $this->number_of_leave = (strtotime($this->end_date) - strtotime($this->start_date)) / (60 * 60 * 24) + 1;

        // Calculate remaining leave
        $this->remaining_leave = $leave_type['total_leaves'] - ($total_previous_leave + $this->number_of_leave);

        if ($this->remaining_leave < 0) {
            throw new Exception("Insufficient leave balance.");
        }

        return $this->remaining_leave;
    }

    // Method to create a leave request
    public function create()
    {
        try {
            $this->calculateRemainingLeave();

            $query = "INSERT INTO leave_requests (employee_id, leave_type_id, start_date, end_date, no_of_leave, remaining_leave, reason, leave_request_status_id,payslip_item_id) 
                      VALUES ($this->employee_id, $this->leave_type_id, '$this->start_date', '$this->end_date', $this->number_of_leave, '$this->remaining_leave', '$this->reason', $this->leave_request_status_id,$this->payslip_item_id)";

            $result = $this->db->query($query);

            // echo $query;
            // die();
            if (!$result) {
                throw new Exception("Error: " . $this->db->error);
            }

            return "Leave request submitted successfully. Remaining leave: {$this->remaining_leave} days.";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public static function display()
    {
        global $db;

        $query = "SELECT leave_requests.id,employees.id eid,CONCAT(employees.first_name,' ',employees.last_name) as employee_name, employees.image as image, leave_requests.reason,leave_requests.leave_request_status_id,
                         leave_type.name as type, leave_requests.start_date, leave_requests.end_date, 
                         leave_requests.no_of_leave, leave_requests.remaining_leave,  leave_request_status.status_name as status
                  FROM leave_requests 
                  JOIN employees ON leave_requests.employee_id = employees.id 
                  JOIN leave_type ON leave_requests.leave_type_id = leave_type.id
                  JOIN  leave_request_status ON leave_request_status_id =  leave_request_status.id";

        // Check if the query ran successfully
        $result = $db->query($query);

        if (!$result) {
            // Output the error if query fails
            die("Query failed: " . $db->error);
        }

        $leave_result = [];
        while ($row = $result->fetch_assoc()) {
            $leave_result[] = $row;
        }

        return $leave_result;
    }


    public static function status_check()
    {
        global $db;

        $query = "
            SELECT 
                lr.*, 
                CONCAT(e.first_name, ' ', e.last_name) AS employee_name, 
                lt.name AS leave_name,
                lrs.status_name AS status_name
            FROM leave_requests lr
            JOIN employees e ON lr.employee_id = e.id 
            JOIN leave_type lt ON lr.leave_type_id = lt.id 
            JOIN leave_request_status lrs ON lr.leave_request_status_id = lrs.id
        ";

        $result = $db->query($query);

        if (!$result) {
            throw new Exception("Error fetching leave requests: " . $db->error);
        }

        $leave_results = $result->fetch_all(MYSQLI_ASSOC);
        return $leave_results;
    }


    static function leave_deduction($employee_id)
    {
        global $db;
        $query = $db->prepare("SELECT leave_requests.*,  
       SUM(leave_requests.no_of_leave) * 500 AS unpaid_leave_amount,
       payslip_items.name AS name
        FROM leave_requests
        JOIN payslip_items 
          ON leave_requests.payslip_item_id = payslip_items.id
        WHERE leave_requests.employee_id = ? 
          AND leave_requests.leave_request_status_id = 3 
          AND leave_requests.leave_type_id = 7
  
        ");

        $query->bind_param("i", $employee_id);
        $query->execute();
        $result = $query->get_result()->fetch_assoc();
        // $unpaid_leave = $result['unpaid_leave'] ?? 0;
        // $leave_deduction = $unpaid_leave * 500;
        // print_r($result);
        // die();
        // return $leave_deduction;
        return $result;
    }




    public static function search($id)
    {
        global $db;
        $stmt = $db->query("SELECT * from leave_requests where id = $id");
        $result = $stmt->fetch_object();
        return $result;
    }
    public  static function update($leave_status_id, $id)
    {
        global $db;
        $stmt = $db->query("Update leave_requests set leave_request_status_id = $leave_status_id where id = $id");
        // $result = $stmt->fetch_object();
        return $stmt;
    }
    public static function delete($id)
    {
        global $db;
        $stmt = $db->query("Delete  from leave_requests where id = $id");
        // $result = $stmt->fetch_object();
        return $stmt;
    }

    // pagination 


    public static function pagination($page = 1, $perpage = 10, $criteria = "")
    {
        global $db;

        // Calculate the offset for the current page
        // $offset = ($page - 1) * $perpage;
        $offset = ($page - 1) * $perpage;


        // Query for paginated data
        $stmt = $db->prepare("
        SELECT leave_requests.id,employees.id eid,CONCAT(employees.first_name,' ',employees.last_name) as employee_name, employees.image as image, leave_requests.reason,leave_requests.leave_request_status_id,
                         leave_type.name as type, leave_requests.start_date, leave_requests.end_date, 
                         leave_requests.no_of_leave, leave_requests.remaining_leave,  leave_request_status.status_name as status
                  FROM leave_requests 
                  JOIN employees ON leave_requests.employee_id = employees.id 
                  JOIN leave_type ON leave_requests.leave_type_id = leave_type.id
                  JOIN  leave_request_status ON leave_request_status_id =  leave_request_status.id
        GROUP BY 
           leave_requests .id
        LIMIT ?, ?
    ");
        $stmt->bind_param("ii", $offset, $perpage);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);

        // Query for total number of rows (for pagination links)
        $totalResult = $db->query("SELECT COUNT(*) AS total FROM leave_requests ");
        $totalRows = $totalResult->fetch_object()->total;

        return ['data' => $data, 'total' => $totalRows];
    }
}
