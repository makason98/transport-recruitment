<?php
session_start();
$jivate_assets = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
if(isset($_POST["password"])){
if($_POST["password"] == "viodan2018"){ 
$_SESSION["login"] = "true";
header("Location: $jivate_assets/admin/");
die();
}else{
$_SESSION["login"] = "false"; 
}
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="phantom-themes">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Flatify - Responsive Admin Dashboard Template</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Gudea:400,700" rel="stylesheet">
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/plugins/icomoon/style.css" rel="stylesheet">
        <link href="assets/plugins/waves/waves.min.css" rel="stylesheet">
        <link href="assets/plugins/uniform/css/default.css" rel="stylesheet">
      
        <!-- Theme Styles -->
        <link href="assets/css/flatifytheme.min.css" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!-- Page Container -->
        <div class="page-container lockscreen">
            
            <!-- Page Content -->
            <div class="page-content">
            
                <!-- Page Inner -->
                <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="panel panel-darkblue login-box-container">
                                <div class="panel-body">
                            <div class="login-box">
                                <div class="user-box m-t-md row">
                                    <div class="col-md-12 m-b-md">
                                        <img src="login.png" class="img-circle m-t-xxs" alt="">
                                    </div>
                                    <div class="col-md-12">
                                        <p class="lead no-m text-center m-b-xxs">Welcome Back, Admin</p>
                                        <p class="text-sm text-center m-b-md">Please enter your password</p>
                                        <form class="form-inline text-center" action="" method="post">
                                            <div class="input-group m-b-lg">
                                                <input type="password" name="password" class="password form-control" placeholder="Password" required>
                                                <div class="input-group-btn">
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                </div><!-- /btn-group -->
                                            </div><!-- /input-group -->
                                        </form>
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                </div><!-- /Page Inner -->
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->
        
        
        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="assets/plugins/pace/pace.min.js"></script>
        <script src="assets/js/flatifytheme.min.js"></script>
    </body>
</html>