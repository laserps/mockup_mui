<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Inspire - Bootstrap Admin Dashboard Template</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport'>
    <meta name="viewport" content="width=device-width">

    <!-- Bootstrap core CSS     -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <!--  Paper Dashboard CSS    -->
    <link href="../../assets/css/inspire.css" rel="stylesheet">

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../../assets/css/demo.css" rel="stylesheet">

    <!--     Fonts and icons     -->
    <link href="../../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../assets/css/font-muli.css" rel='stylesheet' type='text/css'>
    <link href="../../assets/css/themify-icons.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="logo">
                <a href="#" class="simple-text">
                  Inspire Admin
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="#" class="simple-text">
                  I
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav flex-column">
                    <li class="d-flex flex-column active">
                        <a class="nav-link" href="../index.html">
                            <i class="nav-icon ti-panel"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-default navbar-toggleable-md navbar-inverse">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                         <i class="ti-arrow-left"></i>
                    </button>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarItems" aria-controls="navbarItems" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#"> Template </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarItems">
                  <ul class="nav navbar-nav ml-auto">
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle nav-link" id="notificationList" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="ti-bell nav-icon"></i>
                              <span class="notification">6</span>
                              <p class="hidden-lg-up">
                                  Notifications
                                  <i class="fa fa-sort-desc submenu-toggle"></i>
                              </p>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="notificationList">
                              <a class="dropdown-item" href="#">You have 5 new messages</a>
                              <a class="dropdown-item" href="#">You're now friend with Mike</a>
                              <a class="dropdown-item" href="#">Wish Mary on her birthday!</a>
                              <a class="dropdown-item" href="#">5 warnings in Server Console</a>
                              <a class="dropdown-item" href="#">Jane completed 'Induction Training'</a>
                              <a class="dropdown-item" href="#">'Prepare Marketing Report' is overdue</a>
                          </div>
                      </li>
                      <li>
                          <a href="#pablo" class="dropdown-toggle nav-link" data-toggle="dropdown">
                              <i class="ti-layout-grid3-alt nav-icon"></i>
                              <p class="hidden-lg-up">Apps</p>
                          </a>
                      </li>
                      <li>
                          <a href="#pablo" class="dropdown-toggle nav-link" data-toggle="dropdown">
                              <i class="ti-user nav-icon"></i>
                              <p class="hidden-lg-up">Profile</p>
                          </a>
                      </li>
                      <li>
                          <a href="#pablo" class="dropdown-toggle nav-link" data-toggle="dropdown">
                              <i class="ti-settings nav-icon"></i>
                              <p class="hidden-lg-up">Settings</p>
                          </a>
                      </li>
                      <li class="separator hidden-lg-up"></li>
                  </ul>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav class="float-left-xl">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="#">Inspire Admin</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../../assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/jquery-ui.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/tether.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/material.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <!-- Forms Validations Plugin -->
    <script src="../../assets/vendors/jquery.validate.min.js"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="../../assets/vendors/moment.min.js"></script>
    <!--  Charts Plugin -->
    <script src="../../assets/vendors/chartist.min.js"></script>
    <!--  Plugin for the Wizard -->
    <script src="../../assets/vendors/jquery.bootstrap-wizard.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../../assets/vendors/bootstrap-notify.js"></script>
    <!-- DateTimePicker Plugin -->
    <script src="../../assets/vendors/bootstrap-datepicker.min.js"></script>
    <!-- Vector Map plugin -->
    <script src="../../assets/vendors/jquery-jvectormap.js"></script>
    <!-- Sliders Plugin -->
    <script src="../../assets/vendors/nouislider.min.js"></script>
    <!-- Select Plugin -->
    <script src="../../assets/vendors/jquery.select-bootstrap.js"></script>
    <!--  DataTables.net Plugin    -->
    <script src="../../assets/vendors/jquery.dataTables.min.js"></script>
<script src="../../assets/vendors/dataTables.bootstrap4.js"></script>
    <!-- Sweet Alert 2 plugin -->
    <script src="../../assets/vendors/sweetalert/js/sweetalert2.min.js"></script>
    <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="../../assets/vendors/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin    -->
    <script src="../../assets/vendors/fullcalendar.min.js"></script>
    <!-- TagsInput Plugin -->
    <script src="../../assets/vendors/jquery.tagsinput.js"></script>
    <!-- Material Dashboard javascript methods -->
    <script src="../../assets/js/inspire.js"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="../../assets/js/demo.js"></script>
</body>

</html>
