<!-- <div class="page-wrapper"> -->

<!-- Page Content -->
<!-- <div class="content container-fluid pb-0"> -->
<!-- <div class="sidebar-inner slimscroll" style="overflow: hidden; width: 100%; height: 325px;">
   
</div> -->
<!-- Leave Alert -->
<div class="row">
    <div class="col-md-12">
        <div class="employee-alert-box">
            <div class="alert alert-outline-success alert-dismissible fade show">
                <div class="employee-alert-request">
                    <i class="far fa-circle-question"></i>
                    Your Leave Request on <span>“24th April 2024”</span> has been Approved!!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-xmark"></i></button>
            </div>
        </div>
    </div>
</div>
<!-- /Leave Alert -->

<div class="row">
    <div class="col-xxl-8 col-lg-12 col-md-12">
        <div class="row">

            <!-- Employee Details -->
            <div class="col-lg-6 col-md-12">
                <div class="card employee-welcome-card flex-fill">
                    <div class="card-body">
                        <div class="welcome-info">
                            <div class="welcome-content">
                                <h4>Welcome Back,
                                    <?php
                                    if (isset($_SESSION['uname'])) {
                                        $user = $_SESSION['uname'];
                                        echo "<span>$user</span>";
                                    } else {
                                        echo "<span>Guest</span>";
                                    }
                                    ?></h4>
                                <p>You have <span>4 meetings</span> today,</p>
                            </div>
                            <div class="welcome-img">
                                <img src="assets/img/avatar/avatar-19.jpg" class="img-fluid" alt="User">
                            </div>
                        </div>
                        <div class="welcome-btn">
                            <a href="profile.html" class="btn">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="statistic-header">
                            <h4>Statistics</h4>
                            <div class="dropdown statistic-dropdown">
                                <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                    Today
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        Week
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        Month
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        Year
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="clock-in-info">
                            <div class="clock-in-content">
                                <p>Work Time</p>
                                <h4>6 Hrs : 54 Min</h4>
                            </div>
                            <div class="clock-in-btn">
                                <a href="javascript:void(0);" class="btn btn-primary">
                                    <img src="assets/img/icons/clock-in.svg" alt="Icon"> Clock-In
                                </a>
                            </div>
                        </div>
                        <div class="clock-in-list">
                            <ul class="nav">
                                <li>
                                    <p>Remaining</p>
                                    <h6>2 Hrs 36 Min</h6>
                                </li>
                                <li>
                                    <p>Overtime</p>
                                    <h6>0 Hrs 00 Min</h6>
                                </li>
                                <li>
                                    <p>Break</p>
                                    <h6>1 Hrs 20 Min</h6>
                                </li>
                            </ul>
                        </div>
                        <div class="view-attendance">
                            <a href="attendance.html">
                                View Attendance <i class="fe fe-arrow-right-circle"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card info-card flex-fill">
                    <div class="card-body">
                        <h4>Upcoming Holidays</h4>
                        <div class="holiday-details">
                            <div class="holiday-calendar">
                                <div class="holiday-calendar-icon">
                                    <img src="assets/img/icons/holiday-calendar.svg" alt="Icon">
                                </div>
                                <div class="holiday-calendar-content">
                                    <h6>Ramzan</h6>
                                    <p>Mon 20 May 2024</p>
                                </div>
                            </div>
                            <div class="holiday-btn">
                                <a href="holidays.html" class="btn">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Employee Details -->

            <!-- Attendance & Leaves -->
            <div class="col-lg-6 col-md-12">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="statistic-header">
                            <h4>Attendance & Leaves</h4>
                            <div class="dropdown statistic-dropdown">
                                <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                    2024
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        2025
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        2026
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        2027
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="attendance-list">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="attendance-details">
                                        <h4 class="text-primary">9</h4>
                                        <p>Total Leaves</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="attendance-details">
                                        <h4 class="text-pink">5.5</h4>
                                        <p>Leaves Taken</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="attendance-details">
                                        <h4 class="text-success">04</h4>
                                        <p>Leaves Absent</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="attendance-details">
                                        <h4 class="text-purple">0</h4>
                                        <p>Pending Approval</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="attendance-details">
                                        <h4 class="text-info">214</h4>
                                        <p>Working Days</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="attendance-details">
                                        <h4 class="text-danger">2</h4>
                                        <p>Loss of Pay</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="view-attendance">
                            <a href="leaves-employee.html">
                                Apply Leave <i class="fe fe-arrow-right-circle"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="statistic-header">
                            <h4>Working hours</h4>
                            <div class="dropdown statistic-dropdown">
                                <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                    This Week
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        Last Week
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        This Month
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        Last 30 Days
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="working-hour-info">
                            <div id="working_chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Attendance & Leaves -->

        </div>
    </div>

    <!-- Employee Notifications -->
    <div class="col-xxl-4 col-lg-12 col-md-12 d-flex">
        <div class="card flex-fill">
            <div class="card-body">
                <div class="statistic-header">
                    <h4>Important</h4>
                    <div class="important-notification">
                        <a href="activities.html">
                            View All <i class="fe fe-arrow-right-circle"></i>
                        </a>
                    </div>
                </div>
                <div class="notification-tab">
                    <ul class="nav nav-tabs">
                        <li>
                            <a href="#" class="active" data-bs-toggle="tab" data-bs-target="#notification_tab">
                                <i class="la la-bell"></i> Notifications
                            </a>
                        </li>
                        <li>
                            <a href="#" data-bs-toggle="tab" data-bs-target="#schedule_tab">
                                <i class="la la-list-alt"></i> Schedules
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane active" id="notification_tab">
                            <div class="employee-noti-content">
                                <ul class="employee-notification-list">
                                    <li class="employee-notification-grid">
                                        <div class="employee-notification-icon">
                                            <a href="activities.html">
                                                <span class="badge-soft-danger rounded-circle">HR</span>
                                            </a>
                                        </div>
                                        <div class="employee-notification-content">
                                            <h6>
                                                <a href="activities.html">
                                                    Your leave request has been
                                                </a>
                                            </h6>
                                            <ul class="nav">
                                                <li>02:10 PM</li>
                                                <li>21 Apr 2024</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="employee-notification-grid">
                                        <div class="employee-notification-icon">
                                            <a href="activities.html">
                                                <span class="badge-soft-info rounded-circle">ER</span>
                                            </a>
                                        </div>
                                        <div class="employee-notification-content">
                                            <h6>
                                                <a href="activities.html">
                                                    You’re enrolled in upcom....
                                                </a>
                                            </h6>
                                            <ul class="nav">
                                                <li>12:40 PM</li>
                                                <li>21 Apr 2024</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="employee-notification-grid">
                                        <div class="employee-notification-icon">
                                            <a href="activities.html">
                                                <span class="badge-soft-warning rounded-circle">SM</span>
                                            </a>
                                        </div>
                                        <div class="employee-notification-content">
                                            <h6>
                                                <a href="activities.html">
                                                    Your annual compliance trai
                                                </a>
                                            </h6>
                                            <ul class="nav">
                                                <li>11:00 AM</li>
                                                <li>21 Apr 2024</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="employee-notification-grid">
                                        <div class="employee-notification-icon">
                                            <a href="activities.html">
                                                <span class="rounded-circle">
                                                    <img src="assets/img/avatar/avatar-1.jpg" class="img-fluid rounded-circle" alt="User">
                                                </span>
                                            </a>
                                        </div>
                                        <div class="employee-notification-content">
                                            <h6>
                                                <a href="activities.html">
                                                    Jessica has requested feedba
                                                </a>
                                            </h6>
                                            <ul class="nav">
                                                <li>10:30 AM</li>
                                                <li>21 Apr 2024</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="employee-notification-grid">
                                        <div class="employee-notification-icon">
                                            <a href="activities.html">
                                                <span class="badge-soft-warning rounded-circle">DT</span>
                                            </a>
                                        </div>
                                        <div class="employee-notification-content">
                                            <h6>
                                                <a href="activities.html">
                                                    Gentle remainder about train
                                                </a>
                                            </h6>
                                            <ul class="nav">
                                                <li>09:00 AM</li>
                                                <li>21 Apr 2024</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="employee-notification-grid">
                                        <div class="employee-notification-icon">
                                            <a href="activities.html">
                                                <span class="badge-soft-danger rounded-circle">AU</span>
                                            </a>
                                        </div>
                                        <div class="employee-notification-content">
                                            <h6>
                                                <a href="activities.html">
                                                    Our HR system will be down
                                                </a>
                                            </h6>
                                            <ul class="nav">
                                                <li>11:50 AM</li>
                                                <li>21 Apr 2024</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="schedule_tab">
                            <div class="employee-noti-content">
                                <ul class="employee-notification-list">
                                    <li class="employee-notification-grid">
                                        <div class="employee-notification-icon">
                                            <a href="activities.html">
                                                <span class="rounded-circle">
                                                    <img src="assets/img/avatar/avatar-2.jpg" class="img-fluid rounded-circle" alt="User">
                                                </span>
                                            </a>
                                        </div>
                                        <div class="employee-notification-content">
                                            <h6>
                                                <a href="activities.html">
                                                    John has requested feedba
                                                </a>
                                            </h6>
                                            <ul class="nav">
                                                <li>10:30 AM</li>
                                                <li>21 Apr 2024</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="employee-notification-grid">
                                        <div class="employee-notification-icon">
                                            <a href="activities.html">
                                                <span class="badge-soft-danger rounded-circle">HR</span>
                                            </a>
                                        </div>
                                        <div class="employee-notification-content">
                                            <h6>
                                                <a href="activities.html">
                                                    Your leave request has been
                                                </a>
                                            </h6>
                                            <ul class="nav">
                                                <li>02:10 PM</li>
                                                <li>21 Apr 2024</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="employee-notification-grid">
                                        <div class="employee-notification-icon">
                                            <a href="activities.html">
                                                <span class="badge-soft-info rounded-circle">ER</span>
                                            </a>
                                        </div>
                                        <div class="employee-notification-content">
                                            <h6>
                                                <a href="activities.html">
                                                    You’re enrolled in upcom....
                                                </a>
                                            </h6>
                                            <ul class="nav">
                                                <li>12:40 PM</li>
                                                <li>21 Apr 2024</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="employee-notification-grid">
                                        <div class="employee-notification-icon">
                                            <a href="activities.html">
                                                <span class="badge-soft-warning rounded-circle">SM</span>
                                            </a>
                                        </div>
                                        <div class="employee-notification-content">
                                            <h6>
                                                <a href="activities.html">
                                                    Your annual compliance trai
                                                </a>
                                            </h6>
                                            <ul class="nav">
                                                <li>11:00 AM</li>
                                                <li>21 Apr 2024</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="employee-notification-grid">
                                        <div class="employee-notification-icon">
                                            <a href="activities.html">
                                                <span class="badge-soft-warning rounded-circle">DT</span>
                                            </a>
                                        </div>
                                        <div class="employee-notification-content">
                                            <h6>
                                                <a href="activities.html">
                                                    Gentle remainder about train
                                                </a>
                                            </h6>
                                            <ul class="nav">
                                                <li>09:00 AM</li>
                                                <li>21 Apr 2024</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="employee-notification-grid">
                                        <div class="employee-notification-icon">
                                            <a href="activities.html">
                                                <span class="badge-soft-danger rounded-circle">AU</span>
                                            </a>
                                        </div>
                                        <div class="employee-notification-content">
                                            <h6>
                                                <a href="activities.html">
                                                    Our HR system will be down
                                                </a>
                                            </h6>
                                            <ul class="nav">
                                                <li>11:50 AM</li>
                                                <li>21 Apr 2024</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Employee Notifications -->

</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <div class="statistic-header">
                            <h4>On Going Projects</h4>
                        </div>
                    </div>
                    <div class="col-sm-4 text-sm-end">
                        <div class="owl-nav project-nav nav-control"></div>
                    </div>
                </div>
                <div class="project-slider owl-carousel">

                    <!-- Project Grid -->
                    <div class="project-grid">
                        <div class="project-top">
                            <h6>
                                <a href="project-view.html">Deadline : 10 Feb 2024</a>
                            </h6>
                            <h5>
                                <a href="project-view.html">Office Management</a>
                            </h5>
                            <p>Creating an online platform that enables various administrative tasks within an organization</p>
                        </div>
                        <div class="project-middle">
                            <ul class="nav">
                                <li>
                                    <div class="project-tasks">
                                        <h4>20</h4>
                                        <p>Total Tasks</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="project-tasks">
                                        <h4>15</h4>
                                        <p>Total Completed</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="project-bottom">
                            <div class="project-leader">
                                <ul class="nav">
                                    <li>Project Leader :</li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Jeffery Lalor" data-bs-original-title="Jeffery Lalor">
                                            <img src="assets/img/avatar/avatar-19.jpg" alt="User">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="project-leader">
                                <ul class="nav">
                                    <li>Members :</li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Lesley Grauer" data-bs-original-title="Lesley Grauer">
                                            <img src="assets/img/avatar/avatar-20.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Richard Miles" data-bs-original-title="Richard Miles">
                                            <img src="assets/img/avatar/avatar-21.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Loren Gatlin" data-bs-original-title="Loren Gatlin">
                                            <img src="assets/img/avatar/avatar-1.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Jeffery Lalor" data-bs-original-title="Jeffery Lalor">
                                            <img src="assets/img/avatar/avatar-16.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Tarah Shropshire" data-bs-original-title="Tarah Shropshire">
                                            <img src="assets/img/avatar/avatar-23.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="more-team-members">+16</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Project Grid -->

                    <!-- Project Grid -->
                    <div class="project-grid">
                        <div class="project-top">
                            <h6>
                                <a href="project-view.html">Deadline : 15 Feb 2024</a>
                            </h6>
                            <h5>
                                <a href="project-view.html">Video Calling App</a>
                            </h5>
                            <p>Design and developing a software application that enables users to make video calls over the internet.</p>
                        </div>
                        <div class="project-middle">
                            <ul class="nav">
                                <li>
                                    <div class="project-tasks">
                                        <h4>30</h4>
                                        <p>Total Tasks</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="project-tasks">
                                        <h4>12</h4>
                                        <p>Total Completed</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="project-bottom">
                            <div class="project-leader">
                                <ul class="nav">
                                    <li>Project Leader :</li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Catherine Manseau" data-bs-original-title="Catherine Manseau">
                                            <img src="assets/img/avatar/avatar-18.jpg" alt="User">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="project-leader">
                                <ul class="nav">
                                    <li>Members :</li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Richard Miles" data-bs-original-title="Richard Miles">
                                            <img src="assets/img/avatar/avatar-21.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Jeffery Lalor" data-bs-original-title="Jeffery Lalor">
                                            <img src="assets/img/avatar/avatar-16.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Lesley Grauer" data-bs-original-title="Lesley Grauer">
                                            <img src="assets/img/avatar/avatar-20.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Loren Gatlin" data-bs-original-title="Loren Gatlin">
                                            <img src="assets/img/avatar/avatar-1.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Tarah Shropshire" data-bs-original-title="Tarah Shropshire">
                                            <img src="assets/img/avatar/avatar-23.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="more-team-members">+10</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Project Grid -->

                    <!-- Project Grid -->
                    <div class="project-grid">
                        <div class="project-top">
                            <h6>
                                <a href="project-view.html">Deadline : 12 Apr 2024</a>
                            </h6>
                            <h5>
                                <a href="project-view.html">Hospital Administration</a>
                            </h5>
                            <p>Creating an online platform that serves as a central hub for hospital admin, staff, patients.</p>
                        </div>
                        <div class="project-middle">
                            <ul class="nav">
                                <li>
                                    <div class="project-tasks">
                                        <h4>40</h4>
                                        <p>Total Tasks</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="project-tasks">
                                        <h4>02</h4>
                                        <p>Total Completed</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="project-bottom">
                            <div class="project-leader">
                                <ul class="nav">
                                    <li>Project Leader :</li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="John Smith" data-bs-original-title="John Smith">
                                            <img src="assets/img/avatar/avatar-4.jpg" alt="User">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="project-leader">
                                <ul class="nav">
                                    <li>Members :</li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Richard Miles" data-bs-original-title="Richard Miles">
                                            <img src="assets/img/avatar/avatar-6.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Jeffery Lalor" data-bs-original-title="Jeffery Lalor">
                                            <img src="assets/img/avatar/avatar-13.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Lesley Grauer" data-bs-original-title="Lesley Grauer">
                                            <img src="assets/img/avatar/avatar-18.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Tarah Shropshire" data-bs-original-title="Tarah Shropshire">
                                            <img src="assets/img/avatar/avatar-23.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Loren Gatlin" data-bs-original-title="Loren Gatlin">
                                            <img src="assets/img/avatar/avatar-1.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="more-team-members">+12</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Project Grid -->

                    <!-- Project Grid -->
                    <div class="project-grid">
                        <div class="project-top">
                            <h6>
                                <a href="project-view.html">Deadline : 25 Apr 2024</a>
                            </h6>
                            <h5>
                                <a href="project-view.html">Digital Marketpace</a>
                            </h5>
                            <p>Creating an online platform that connects sellers with buyers, facilitating the exchange of goods,</p>
                        </div>
                        <div class="project-middle">
                            <ul class="nav">
                                <li>
                                    <div class="project-tasks">
                                        <h4>50</h4>
                                        <p>Total Tasks</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="project-tasks">
                                        <h4>10</h4>
                                        <p>Total Completed</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="project-bottom">
                            <div class="project-leader">
                                <ul class="nav">
                                    <li>Project Leader :</li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Jeffery Lalor" data-bs-original-title="Jeffery Lalor">
                                            <img src="assets/img/avatar/avatar-1.jpg" alt="User">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="project-leader">
                                <ul class="nav">
                                    <li>Members :</li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Loren Gatlin" data-bs-original-title="Loren Gatlin">
                                            <img src="assets/img/avatar/avatar-26.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Lesley Grauer" data-bs-original-title="Lesley Grauer">
                                            <img src="assets/img/avatar/avatar-18.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Richard Miles" data-bs-original-title="Richard Miles">
                                            <img src="assets/img/avatar/avatar-6.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Jeffery Lalor" data-bs-original-title="Jeffery Lalor">
                                            <img src="assets/img/avatar/avatar-13.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Tarah Shropshire" data-bs-original-title="Tarah Shropshire">
                                            <img src="assets/img/avatar/avatar-8.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="more-team-members">+13</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Project Grid -->

                    <!-- Project Grid -->
                    <div class="project-grid">
                        <div class="project-top">
                            <h6>
                                <a href="project-view.html">Deadline : 15 Feb 2024</a>
                            </h6>
                            <h5>
                                <a href="project-view.html">Video Calling App</a>
                            </h5>
                            <p>Design and developing a software application that enables users to make video calls over the internet.</p>
                        </div>
                        <div class="project-middle">
                            <ul class="nav">
                                <li>
                                    <div class="project-tasks">
                                        <h4>30</h4>
                                        <p>Total Tasks</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="project-tasks">
                                        <h4>12</h4>
                                        <p>Total Completed</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="project-bottom">
                            <div class="project-leader">
                                <ul class="nav">
                                    <li>Project Leader :</li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Catherine Manseau" data-bs-original-title="Catherine Manseau">
                                            <img src="assets/img/avatar/avatar-18.jpg" alt="User">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="project-leader">
                                <ul class="nav">
                                    <li>Members :</li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Richard Miles" data-bs-original-title="Richard Miles">
                                            <img src="assets/img/avatar/avatar-21.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Jeffery Lalor" data-bs-original-title="Jeffery Lalor">
                                            <img src="assets/img/avatar/avatar-16.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Lesley Grauer" data-bs-original-title="Lesley Grauer">
                                            <img src="assets/img/avatar/avatar-20.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Loren Gatlin" data-bs-original-title="Loren Gatlin">
                                            <img src="assets/img/avatar/avatar-1.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project-view.html" data-bs-toggle="tooltip" aria-label="Tarah Shropshire" data-bs-original-title="Tarah Shropshire">
                                            <img src="assets/img/avatar/avatar-23.jpg" alt="User">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="more-team-members">+10</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Project Grid -->

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <!-- Employee Month -->
    <div class="col-xl-6 col-md-12 d-flex">
        <div class="card employee-month-card flex-fill">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-12">
                        <div class="employee-month-details">
                            <h4>Employee of the month</h4>
                            <p>We are really proud of the difference you have made which gives everybody the reason to applaud & appreciate</p>
                        </div>
                        <div class="employee-month-content">
                            <h6>Congrats, Hanna</h6>
                            <p>UI/UX Team Lead</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="employee-month-img">
                            <img src="assets/img/employee-img.png" class="img-fluid" alt="User">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Employee Month -->

    <!-- Company Policy -->
    <div class="col-xl-6 col-md-12 d-flex">
        <div class="card flex-fill">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <div class="statistic-header">
                            <h4>Company Policy</h4>
                        </div>
                    </div>
                    <div class="col-sm-4 text-sm-end">
                        <div class="owl-nav company-nav nav-control"></div>
                    </div>
                </div>
                <div class="company-slider owl-carousel">

                    <!-- Company Grid -->
                    <div class="company-grid company-soft-tertiary">
                        <div class="company-top">
                            <div class="company-icon">
                                <span class="company-icon-tertiary rounded-circle">HR</span>
                            </div>
                            <div class="company-link">
                                <a href="companies.html">HR Policy</a>
                            </div>
                        </div>
                        <div class="company-bottom d-flex">
                            <ul>
                                <li>Policy Name : Work policy</li>
                                <li>Updated on : Today</li>
                            </ul>
                            <div class="company-bottom-links">
                                <a href="#"><i class="la la-download"></i></a>
                                <a href="#"><i class="la la-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Company Grid -->

                    <!-- Company Grid -->
                    <div class="company-grid company-soft-success">
                        <div class="company-top">
                            <div class="company-icon">
                                <span class="company-icon-success rounded-circle">EP</span>
                            </div>
                            <div class="company-link">
                                <a href="companies.html">Employer Policy</a>
                            </div>
                        </div>
                        <div class="company-bottom d-flex">
                            <ul>
                                <li>Policy Name : Parking</li>
                                <li>Updated on : 25 Jan 2024</li>
                            </ul>
                            <div class="company-bottom-links">
                                <a href="#"><i class="la la-download"></i></a>
                                <a href="#"><i class="la la-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Company Grid -->

                    <!-- Company Grid -->
                    <div class="company-grid company-soft-info">
                        <div class="company-top">
                            <div class="company-icon">
                                <span class="company-icon-info rounded-circle">LP</span>
                            </div>
                            <div class="company-link">
                                <a href="companies.html">Leave Policy</a>
                            </div>
                        </div>
                        <div class="company-bottom d-flex">
                            <ul>
                                <li>Policy Name : Annual Leave</li>
                                <li>Updated on : 25 Jan 2023</li>
                            </ul>
                            <div class="company-bottom-links">
                                <a href="#"><i class="la la-download"></i></a>
                                <a href="#"><i class="la la-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Company Grid -->

                </div>
            </div>
        </div>
    </div>
    <!-- /Company Policy -->

    <!-- </div>
    </div> -->
    <!-- /Page Content -->

    <!-- </div> -->
    <!-- /Page Wrapper -->
    <!-- 
</div> -->