<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $page_title?></title>
		<link rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap.min.css"; ?>" />
		<link rel="stylesheet" href = "<?php echo base_url("assets/css/style.css")?>"/>
	</head>
	<body>
	<nav class="navbar nav-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="glyphicon glyphicon-cog"></i>  Online Petition
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
<!--                     <li> -->
<!--                         <a class="page-scroll" href="">Login</a> -->
<!--                     </li> -->
<!--                     <li> -->
<!--                         <a class="page-scroll" href="">SignUp</a> -->
<!--                     </li> -->
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>