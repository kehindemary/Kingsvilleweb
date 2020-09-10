<?php 

ob_start();
session_start();
include("functions.php");
// $_GET=sanitize($_GET);
// $_POST=sanitize($_POST);


if(isset($_GET['logout'])){
	//session_destroy();
    unset($_COOKIE['Member']);
    setcookie('Member', null, -1, '/');
	redirect("login.php");
}


if(isset($_POST['submit'])){
	$ch=mysqli_query($server, "select * from users where (username='$_POST[username]' or email='$_POST[username]') and password='$_POST[password]' limit 1");

	if(mysqli_num_rows($ch)==1){
		$user=mysqli_fetch_assoc($ch);
		$_SESSION['payment_username']=$user['username'];
        $value = $_POST['username'];
        setcookie("Member", $value, time()+3600);
    	redirect("index.php");
		
	}else{
		alert("invalid login details");
	}
	
}

?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Administrator | Kingsville Schools, Jahi</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="..img/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="container-fluid">
            <div class="d-flex full-height p-v-15 flex-column justify-content-between">
                <div class="d-none d-md-flex p-h-40">
                    <img src="../img/logo.png" alt="" class="img-responsive">
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="m-t-20">Sign In</h2>
                                    <p class="m-b-30">Enter your administrative credential to get access</p>
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="userName">Username or Email:</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="text" class="form-control" id="userName" name="username" placeholder="Username" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Password:</label>
                                            <!--<a class="float-right font-size-13 text-muted" href="login-2.html">Forget Password?</a>-->
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
                                               
                                                <button  name="submit" class="btn btn-primary">Sign In</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="offset-md-1 col-md-6 d-none d-md-block">
                            <img class="img-fluid img-responsive img-thumbnail img-rounded" src="../img/slider/1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-flex  p-h-40 justify-content-between">
                    <span class="">© 2020 Kingsville School, Abuja</span>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>