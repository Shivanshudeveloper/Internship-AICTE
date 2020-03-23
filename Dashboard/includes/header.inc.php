<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AICTE Internship | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="css/open1-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate1.css">

    <link rel="stylesheet" href="css/owl1.carousel.min.css">
    <link rel="stylesheet" href="css/owl1.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific1-popup.css">

    <link rel="stylesheet" href="css/aos1.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon1.css">
    <link rel="stylesheet" href="css/icomoon1.css">
    <link rel="stylesheet" href="css/style1.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>
<?php if(isset($_SESSION['loggedIn']))
{
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="./index.php" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>


            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <div class="form-group" style="margin-right:10px;margin-top:7px">
                    <label>Welcome: <?php echo $_SESSION['user']; ?></label>
                </div>
                <div class="form-group" style="margin-right:10px;margin-top:7px">
                    <a href="#">help</a>
                </div>

                <div class="form-group" style="margin-right:10px;margin-top:7px">
                    <a href="logout.php">logout</a>
                </div>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li> 
            </ul>
        </nav>
        <?php 
if($_SESSION['login_level']==1)
{  
?>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="./index.php" class="brand-link">
                <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
                <span class="brand-text font-weight-light">AICTE Internship</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="./user_profile.php" class="d-block">
                            <?php echo $_SESSION['user'];  ?>
                            </br>
                            <?php echo $_SESSION['email'];  ?>
                        </a>

                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="./index.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="./user_profile.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Profile
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="./comapny-solution.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Company Solutions
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="./solutions.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Solutions
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="./interview_student.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Available Internships
                                </p>
                            </a>
                        </li>

                        <?php 
} 
if($_SESSION['login_level']>1)
{
?>
                        <aside class="main-sidebar sidebar-dark-primary elevation-4">
                            <!-- Brand Logo -->
                            <a href="./index.php" class="brand-link">
                                <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
                                <span class="brand-text font-weight-light">AICTE Internship</span>
                            </a>

                            <!-- Sidebar -->
                            <div class="sidebar">
                                <!-- Sidebar user panel (optional) -->
                                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                    <div class="image">
                                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                                            alt="User Image">
                                    </div>
                                    <div class="info">
                                        <a href="./company_profile.php" class="d-block">
                                            <?php echo $_SESSION['user'];  ?>
                                            </br>
                                            <?php echo $_SESSION['email'];  ?>
                                        </a>

                                    </div>
                                </div>


                                <nav class="mt-2">
                                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                        data-accordion="false">
                                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                                        <li class="nav-item">
                                            <a href="./index_dashboard.php" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Dashboard</p>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="./company_profile.php" class="nav-link">
                                                <i class="nav-icon fas fa-th"></i>
                                                <p>
                                                    Profile
                                                </p>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="./industry_problems.php" class="nav-link">
                                                <i class="nav-icon fas fa-th"></i>
                                                <p>
                                                    Industry Problems
                                                </p>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="./comapny-solution.php" class="nav-link">
                                                <i class="nav-icon fas fa-th"></i>
                                                <p>
                                                    Company Solutions
                                                </p>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="./solutions.php" class="nav-link">
                                                <i class="nav-icon fas fa-th"></i>
                                                <p>
                                                    Solutions
                                                </p>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="./internships.php" class="nav-link">
                                                <i class="nav-icon fas fa-th"></i>
                                                <p>
                                                    Internships (187)
                                                </p>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="./post_internship.php" class="nav-link">
                                                <i class="nav-icon fas fa-th"></i>
                                                <p>
                                                    Post Internship
                                                </p>
                                            </a>
                                        </li>


                                        <li class="nav-item">
                                            <a href="./interview_management.php" class="nav-link">
                                                <i class="nav-icon fas fa-th"></i>
                                                <p>
                                                    Interviews Management
                                                </p>
                                            </a>
                                        </li>



                                        <li class="nav-item">
                                            <a href="./projects.php" class="nav-link">
                                                <i class="nav-icon fas fa-th"></i>
                                                <p style="font-size: 16px;">
                                                    Internship Management System
                                                </p>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="./chat_profile.php" class="nav-link">
                                                <i class="nav-icon fas fa-th"></i>
                                                <p>
                                                    Messaging (187)
                                                </p>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="./challenges.php" class="nav-link">
                                                <i class="nav-icon fas fa-th"></i>
                                                <p>
                                                    Challenges
                                                </p>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="./admin.php" class="nav-link">
                                                <i class="nav-icon fas fa-th"></i>
                                                <p>
                                                    Admin
                                                </p>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="./mentor.php" class="nav-link">
                                                <i class="nav-icon fas fa-th"></i>
                                                <p>
                                                    Mentors
                                                </p>
                                            </a>
                                        </li>

                                        <!-- Drop down will be selected by interns all submit application submited -->
                                        <li class="nav-item">
                                            <a href="./reports.php" class="nav-link">
                                                <i class="nav-icon fas fa-th"></i>
                                                <p>
                                                    Reports
                                                </p>
                                            </a>
                                        </li>
                                        <?php 

}
}
?>


                            </div>
                            <!-- /.sidebar -->
                        </aside>
                  