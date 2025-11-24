<?php 
$jivate_assets = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo $jivate_assets; ?>assets/images/icon.png">
    <!-- Page Title -->
    <title>EU-TRUCKERS.COM</title>
    <!-- Icon fonts -->
    <link href="<?php echo $jivate_assets; ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $jivate_assets; ?>assets/css/flaticon.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $jivate_assets; ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Plugins for this template -->
    <link href="<?php echo $jivate_assets; ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo $jivate_assets; ?>assets/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo $jivate_assets; ?>assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="<?php echo $jivate_assets; ?>assets/css/slick.css" rel="stylesheet">
    <link href="<?php echo $jivate_assets; ?>assets/css/slick-theme.css" rel="stylesheet">
    <link href="<?php echo $jivate_assets; ?>assets/css/slicknav.min.css" rel="stylesheet">
    <link href="<?php echo $jivate_assets; ?>assets/css/jquery.fancybox.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo $jivate_assets; ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo $jivate_assets; ?>assets/css/responsive.css" rel="stylesheet">
    <link href="<?php echo $jivate_assets; ?>assets/css/form.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="<?php echo $jivate_assets; ?>assets/font/flaticon.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
    
    <style>
        .form-error{
            display: -webkit-box;
            color: white;
    margin-top: 5px;
    padding: 10px;
    background-color: #f94665;
    border-radius: 5px;
        }
svg {
  width: 100px;
  display: block;
  margin: 40px auto 0;
}
.path {
  stroke-dasharray: 1000;
  stroke-dashoffset: 0;
}
.path.circle {
  -webkit-animation: dash 0.9s ease-in-out;
  animation: dash 0.9s ease-in-out;
}
.path.line {
  stroke-dashoffset: 1000;
  -webkit-animation: dash 0.9s 0.35s ease-in-out forwards;
  animation: dash 0.9s 0.35s ease-in-out forwards;
}
.path.check {
  stroke-dashoffset: -100;
  -webkit-animation: dash-check 0.9s 0.35s ease-in-out forwards;
  animation: dash-check 0.9s 0.35s ease-in-out forwards;
}
p.success {
  color: #73AF55;
}
p.error {
  color: #D06079;
}
@-webkit-keyframes dash {
  0% {
    stroke-dashoffset: 1000;
  }
  100% {
    stroke-dashoffset: 0;
  }
}
@keyframes dash {
  0% {
    stroke-dashoffset: 1000;
  }
  100% {
    stroke-dashoffset: 0;
  }
}
@-webkit-keyframes dash-check {
  0% {
    stroke-dashoffset: -100;
  }
  100% {
    stroke-dashoffset: 900;
  }
}
@keyframes dash-check {
  0% {
    stroke-dashoffset: -100;
  }
  100% {
    stroke-dashoffset: 900;
  }
}
        
        
        
        
.aplica{
    font-size:1.4rem !important;
    background: #34cbff !important;
    color: rgb(255, 255, 255) !important;          
}
.field > .field {
    padding-left: 10px!important;
}
    
    ul.job-list {
	margin: 0;
	padding: 0;
	list-style: none;
}

ul.job-list > li.job-preview {
	background: #fff;
	border: 1px solid #d7e2e9;
	-webkit-border-radius: 0.4rem;
	-moz-border-radius: 0.4rem;
	border-radius: 0.4rem;
	padding: 1.5rem 2rem;
	margin-bottom: 1rem;
	float: left;
	width: 100%;
	-webkit-transition: all 0.3s ease 0s;
	-moz-transition: all 0.3s ease 0s;
	transition: all 0.3s ease 0s;
}

ul.job-list > li.job-preview:hover {
	cursor: pointer;
	-webkit-box-shadow: 0 3px 8px rgba(0,0,0,0.05);
	-moz-box-shadow: 0 3px 8px rgba(0,0,0,0.05);
	box-shadow: 0 3px 8px rgba(0,0,0,0.05);
}

.job-title {
	margin-top: 0.6rem;
}

.company {
	color: #96a4b1;
}

.job-preview .btn {
	margin-top: 1.1rem;
}

.btn-apply {
	text-transform: uppercase;
	font-size: 0.875rem;
	font-weight: 800;
	letter-spacing: 1px;
	background-color: transparent;
	color:  #393a5f;
	border: 2px solid #393a5f;
	padding: 0.6rem 2rem;
	-webkit-border-radius: 2rem;
	-moz-border-radius: 2rem;
	border-radius: 2rem;
}

.btn-apply:hover {
	background-color: #393a5f;
	color:  #fff;
	border: 2px solid #393a5f;
}

@media (max-width: 575px) {
	.job-preview .content {
		width: 100%;
	}
}

@media only screen and (min-width: 992px) {
	#navbar-main {
		background: transparent;
		border-bottom: 1px solid transparent;
	}
	
	#navbar-main .navbar-brand {
		color: #fff;
		opacity: 0.8;
		padding: 0.95rem 1.2rem;
	}
	
	#navbar-main .navbar-brand:hover,
	#navbar-main .navbar-brand:focus {
		opacity: 1;
	}
	
	#navbar-main .navbar-nav > li.nav-item > a {
		color: #fff;
		opacity: 0.8;
		padding: 0.95rem 1.2rem;
	}
	
	#navbar-main .navbar-nav > li.nav-item > a:hover,
	#navbar-main .navbar-nav > li.nav-item > a:focus {
		opacity: 1;
	}
}
    
    
    </style>
</head>

<body>
    <!-- start page-loader -->
    <div class="page-loader">
        <div class="page-loader-inner">
            <div class="inner"></div>
        </div>
    </div>
    <!-- end page-loader -->
   <!-- header-area start -->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-12 col-12 col-lg-10">
                        <ul class="d-flex account_login-area">
                            <li>Mai mult respect, mai multe beneficii, mai mulți bani la standard europene.</li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-12 col-12 col-lg-2">

                                <ul class="d-flex header-social">
                                    <li><a href="https://facebook.com/EuTruckers/">Like us <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="header-area"  id="sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-9 col-sm-9 col-9">
                        <div class="logo">
                            <a style="font-size:1.5rem; color:white;" href="<?php echo $jivate_assets; ?>">EU-TRUCKERS</a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        <div class="main-menu">
                            <nav class="nav_mobile_menu">
                                <ul>
                                    <li class="active"><a href="<?php echo $jivate_assets; ?>">Acasa</a></li>
                                    <li><a href="<?php echo $jivate_assets; ?>jobs.php">Joburi disponibile</a></li>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none">
                        <div class="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area end -->