<?php
include("functions.php");

if(!isset($_COOKIE['Member']) || empty($_COOKIE['Member']))
{
	redirect("login.php");
}
$session=$_COOKIE['Member'];
$user=member($session);

$username = $user['username'];

?>

<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Administrator | Kingsville School, Abuja</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/favicon.png">

    <!-- page css -->
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    
    <!--<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">-->
    <script src="assets/js/tinymce.min.js"></script>
    
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
      </script>
 

    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <div class="header">
                <div class="logo logo-dark">
                    <a href="index.php">
                        <img src="../img/logo.png" alt="Logo" class="img-responsive" style="height:50px;">
                        <img class="logo-fold img-responsive" src="../img/favicon.png" alt="Logo" style="height:40px;">
                    </a>
                </div>
                <div class="logo logo-white">
                    <a href="index.php">
                        <img src="../img/logo.png" alt="Logo" class="img-responsive" style="height:50px;">
                        <img class="logo-fold img-responsive" src="../img/logo.png" alt="Logo" style="height:40px;">
                    </a>
                </div>
                <div class="nav-wrap">
                    <ul class="nav-left">
                        <li class="desktop-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li class="mobile-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#search-drawer">
                                <i class="anticon anticon-search"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        
                        <li class="dropdown dropdown-animated scale-left">
                            <div class="pointer" data-toggle="dropdown">
                                <div class="avatar avatar-image  m-h-10 m-r-15">
                                    <img src="assets/images/avatars/avatar.png"  alt="">
                                </div>
                            </div>
                            <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                                <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                    <div class="d-flex m-r-50">
                                        <div class="avatar avatar-lg avatar-image">
                                            <img src="assets/images/avatars/avatar.png" alt="">
                                        </div>
                                        <div class="m-l-10">
                                            <p class="m-b-0 text-dark font-weight-semibold"><?php echo $user['email']; ?></p>
                                            <p class="m-b-0 opacity-07"><?php echo $user['fullname']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <a href="profile.php" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                            <span class="m-l-10">Profile</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                                <a href="login.php?logout" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                            <span class="m-l-10">Logout</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>    
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav">
                <div class="side-nav-inner">
                    <ul class="side-nav-menu scrollable">
                        <li class="nav-item">
                            <a class="dropdown-toggle" href="index.php">
                                <span class="icon-holder">
                                    <i class="anticon anticon-dashboard"></i>
                                </span>
                                <span class="title">Dashboard</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-toggle" href="profile.php">
                                <span class="icon-holder">
									<i class="anticon anticon-user"></i>
								</span>
                                <span class="title">My Profile</span>
                                <span class="arrow">
									<i class="arrow-icon"></i>
								</span>
                            </a>
                            
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-usergroup-add"></i>
                                </span>
                                <span class="title">Member Management</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="users.php">Admin Members</a>
                                </li>
                                <li>
                                    <a href="newusers.php">Add New User</a>
                                </li>
                                <li>
                                    <a href="management.php">Team Members</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-toggle" href="news.php">
                                <span class="icon-holder">
									<i class="anticon anticon-build"></i>
								</span>
                                <span class="title">News Management</span>
                                <span class="arrow">
									<i class="arrow-icon"></i>
								</span>
                            </a>
                            
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-toggle" href="gallery.php">
                                <span class="icon-holder">
                                    <i class="anticon anticon-form"></i>
                                </span>
                                <span class="title">Gallery Management</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-toggle" href="library.php">
                                <span class="icon-holder">
                                    <i class="anticon anticon-form"></i>
                                </span>
                                <span class="title">Library Management</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-toggle" href="banners.php">
                                <span class="icon-holder">
                                    <i class="anticon anticon-file"></i>
                                </span>
                                <span class="title">Banner Management</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-toggle" href="cms.php">
                                <span class="icon-holder">
                                    <i class="anticon anticon-appstore"></i>
                                </span>
                                <span class="title">CMS Management</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-form"></i>
                                </span>
                                <span class="title">Entrance Exam</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="exams-taken.php">Exams Taken</a>
                                </li>
                                <li>
                                    <a href="exam-details.php">Exam Details</a>
                                </li>
                                <li>
                                    <a href="users.php">User's List</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-toggle" href="login.php?logout">
                                <span class="icon-holder">
                                    <i class="anticon anticon-lock"></i>
                                </span>
                                <span class="title">Log Out</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->