<?php
include 'core/connection.php';
session_start();
if (isset($_SESSION["id"])){
	$userid = $_SESSION["id"];
	$query = "SELECT * FROM `user` where `userid`=?";
	$pds = $conn-> prepare($query);
	$pds-> execute(array($userid));
	$row = $pds->fetchAll();
		foreach($row as $value){
		$firstname = $value['firstname'];
		$lastname = $value['lastname'];
		$phone = $value['phone'];
		$email = $value['email'];
		}
	}
	if($_SERVER["REQUEST_METHOD"]== "POST" || !empty($SESSION['id'])){
			$phone =$_POST['phone'];
			$userid = $_SESSION["id"];
			 $qery = "UPDATE `user` SET  `phone`=? WHERE `userid`=?"; 	
			 $pds = $conn-> prepare($qery);
			 $pds-> execute(array($phone,$userid));
			 $num=$pds->rowcount();
			 
				 if($num > 0){
					 echo "<script type='text/javascript'> alert('Updated Successfully'); window.location.href='account-home1.php'; </script>";
					 
				 }
				 else{
					 //echo "wrong";
				 }
	}
	else{
		//echo "sometghin wrong";
	}
	?>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Clasified">
    <meta name="generator" content="Wordpress! - Open Source Content Management">
    <title>DealTree</title>

     <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">    
    <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
    <!-- Material CSS -->
    <link rel="stylesheet" href="assets/css/material-kit.css" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
        <!-- Line Icons CSS -->
    <link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">
    <!-- Line Icons CSS -->
    <link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/extras/animate.css" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/extras/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="assets/extras/settings.css" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
        <!-- Bootstrap Select -->
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">  
    
  </head>

  <body>  
    <!-- Header Section Start -->
    <div class="header">    
      <nav class="navbar navbar-default main-navigation" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand logo" href="index.php"><img src="assets/img/logo1.png" alt=""></a>
          </div>
          <!-- brand and toggle menu for mobile End -->

          <!-- Navbar Start -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="account-home1.php"><i class="lnr lnr-user"></i> My Account</a></li>
			  <li><a href="logout.php"><i class="lnr lnr-enter"></i> Logout</a></li>
              <li class="postadd">
                <a class="btn btn-danger btn-post" href="post-ads.html"><span class="fa fa-plus-circle"></span> Post an Ad</a>
              </li>
            </ul>
          </div>
          <!-- Navbar End -->
        </div>
      </nav>
      <!-- Off Canvas Navigation -->
      <div class="navmenu navmenu-default navmenu-fixed-left offcanvas"> 
      <!--- Off Canvas Side Menu -->
        <div class="close" data-toggle="offcanvas" data-target=".navmenu">
            <i class="fa fa-close"></i>
        </div>
          <h3 class="title-menu">All Pages</h3>
          <ul class="nav navmenu-nav"> <!--- Menu -->
           <li><a href="index.php">Home</a></li>
            <li><a href="category.php">Categories</a></li>
			<li><a href="post-ads.php">Post An Ad</a></li>
            <li><a href="account-home1.php">Account Settings</a></li>
			<li><a href="account-myads.php">My Ads</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="contact.html">Contact Us</a></li>
			<li><a href="logout.php">Logout</a></li>
        </ul><!--- End Menu -->
      </div> <!--- End Off Canvas Side Menu -->
      <div class="tbtn wow pulse" id="menu" data-wow-iteration="infinite" data-wow-duration="500ms" data-toggle="offcanvas" data-target=".navmenu">
        <p><i class="fa fa-file-text-o"></i> All Pages</p>
      </div>
    </div>
    <!-- Header Section End -->
	
	 <!-- Page Header Start -->
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="page-title">Settings</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End --> 
	
    <!-- Content section Start --> 
    <section id="content">
      <div class="container">
          <div class="row">
				<div class="col-sm-3 page-sideabr">
				<aside>
				<div class="inner-box">
				<div class="user-panel-sidebar">
				<div class="collapse-box">
				<h5 class="collapset-title no-border">
				My Personal Info
				<a class="pull-right" aria-expanded="true" data-toggle="collapse" href="#myclassified">
				<i class="fa fa-angle-down"></i>
				</a>
				</h5>
				<div id="myclassified" class="panel-collapse collapse in" aria-expanded="true">
				<ul class="acc-list">
				<li class="active">
				<a href="account-home1.php">
				<i class="fa fa-home"></i>
				Personal Home
				</a>
				</li>
				</ul>
				</div>
				</div>
				<div class="collapse-box">
				<h5 class="collapset-title">
				My Ads
				<a class="pull-right" aria-expanded="true" data-toggle="collapse" href="#myads">
				<i class="fa fa-angle-down"></i>
				</a>
				</h5>
				<div id="myads" class="panel-collapse collapse in" aria-expanded="true">
				<ul class="acc-list">
				<li>
				<a href="account-myads.php">
				<i class="fa fa-credit-card"></i>
				My Ads
				<!--<span class="badge">44</span>-->
				</a>
				</li>
				<li>
					<a href="#">
					<i class="fa fa-hourglass-o"></i>
					Pending Approval
					<!--<span class="badge">33</span>-->
					</a>
					</li>
					</ul>
						</div>
						</div>
						</div>
						</div>
						</aside>
						</div>
						<div class="col-sm-9 page-content">
						
						<div class="inner-box">
						<div class="welcome-msg">
						<h3 class="page-sub-header2 clearfix no-padding">Hello <?php echo $firstname; ?> </h3>
						</div>
						<div id="accordion" class="panel-group">
						<div class="panel panel-default">
						<div class="panel-heading">
						<h4 class="panel-title">
						<a href="#collapseB1" data-toggle="collapse"> My details </a>
						</h4>
						</div>
						<div id="collapseB1" class="panel-collapse collapse in">
						<div class="panel-body">
						<form role="form" action="account-home1.php" method="POST"  enctype = "multipart/form-data">
						<div class="form-group is-empty">
<label class="control-label">First Name</label>
<input class="form-control" name="firstname" id="firstname" disabled="disabled" value="<?php echo $firstname; ?>" type="text">
<span class="material-input"></span>
</div>
<div class="form-group is-empty">
<label class="control-label">Last name</label>
<input class="form-control" name="lastname" id="lastname" disabled="disabled" value="<?php echo $lastname; ?>" type="text">
<span class="material-input"></span>
</div>
<div class="form-group is-empty">
<label class="control-label">Email</label>
<input class="form-control" name="email" id="email" disabled="disabled" value="<?php echo $email; ?>" type="email">
<span class="material-input"></span>
</div>

<div class="form-group is-empty">
<label class="control-label" for="Phone">Phone</label>
<input id="Phone" class="form-control" name="phone" id="phone"  value="<?php echo $phone; ?>" type="text">
<span class="material-input"></span>
</div>

<div class="form-group">
<button class="btn btn-common" type="submit">Update</button>
</div>
</form>
						</div>
						</div>
						</div>
						</div>
						</div>
						</div>
						</div>
						</div>
						</div>
						
				
				
                </div>   
      </div>
    </section>
    <!-- Content section End --> 

    

    <!-- Footer Section Start -->
    <footer>
    	<!-- Footer Area Start -->
    	<section class="footer-Content">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0">
              <div class="widget">
                <h3 class="block-title">About us</h3>
                <div class="textwidget">
                  <p>Dealtree is an online classified website where the students within University of Windsor could come together, meet, trade and help each other in many ways. Students can come here to find an apartment to live in, sell their old car, laptop, furniture and make new friends while doing all of the above. </p>
                </div>
              </div>
            </div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.5">
    					<div class="widget">
    						<h3 class="block-title">Useful Links</h3>
  							<ul class="menu">
                  <li><a href="index.php">Home</a></li>
            <li><a href="category.php">Categories</a></li>
			<li><a href="post-ads.php">Post An Ad</a></li>
            <li><a href="account-home1.php">Account Settings</a></li>
			<li><a href="account-myads.php">My Ads</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="contact.html">Contact Us</a></li>
			<li><a href="logout.php">Logout</a></li>
                </ul>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1s">
    					<div class="widget">
                <h3 class="block-title">Contact Us</h3>
                <div class="twitter-content clearfix">
                  <ul class="twitter-list">
                    <li class="clearfix">
                      <span>
                        Room #122 Essex Hall <br>
University of WIndsor<br>
Windsor, ON N9C 2P2
                       <!-- <a href="#"></a>-->
                      </span>
                    </li>
                    <li class="clearfix">
                      <span>
                         P: (123) 456-7890<br>

E: name@example.com<br>

H: Monday - Friday: 9:00 AM to 5:00 PM
                        
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.5s">
    					<div class="widget">
    						<h3 class="block-title">Random Ads</h3>
                <ul class="featured-list">
                  <li>
                    <img alt="" src="assets/img/featured/img1.jpg">
                    <div class="hover">
                      <a href="#"><span>$49</span></a>
                    </div>
                  </li>
                  <li>
                    <img alt="" src="assets/img/featured/img2.jpg">
                    <div class="hover">
                      <a href="#"><span>$49</span></a>
                    </div>
                  </li>
                  <li>
                    <img alt="" src="assets/img/featured/img3.jpg">
                    <div class="hover">
                      <a href="#"><span>$49</span></a>
                    </div>
                  </li>
                  <li>
                    <img alt="" src="assets/img/featured/img4.jpg">
                    <div class="hover">
                      <a href="#"><span>$49</span></a>
                    </div>
                  </li>
                  <li>
                    <img alt="" src="assets/img/featured/img5.jpg">
                    <div class="hover">
                      <a href="#"><span>$49</span></a>
                    </div>
                  </li>
                  <li>
                    <img alt="" src="assets/img/featured/img6.jpg">
                    <div class="hover">
                      <a href="#"><span>$49</span></a>
                    </div>
                  </li>
                </ul> 						
    					</div>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- Footer area End -->
    	
    	<!-- Copyright Start  -->
    	<div id="copyright">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
              <div class="site-info pull-left">
                <p>All copyrights reserved @ 2016 - Designed by <a href="">Group 19</a></p>
              </div>    					
              <div class="bottom-social-icons social-icon pull-right">  
                <a class="facebook" target="_blank" href=""><i class="fa fa-facebook"></i></a> 
                <a class="twitter" target="_blank" href=""><i class="fa fa-twitter"></i></a>
                <a class="dribble" target="_blank" href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
                <a class="flickr" target="_blank" href="https://www.flickr.com/"><i class="fa fa-flickr"></i></a>
                <a class="youtube" target="_blank" href="https://youtube.com"><i class="fa fa-youtube"></i></a>
                <a class="google-plus" target="_blank" href="https://plus.google.com"><i class="fa fa-google-plus"></i></a>
                <a class="linkedin" target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
              </div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- Copyright End -->

    </footer>
    <!-- Footer Section End -->  
    
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-angle-up"></i>
    </a>
    
    <!-- Main JS  -->
    <script type="text/javascript" src="assets/js/jquery-min.js"></script>      
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/material.min.js"></script>
    <script type="text/javascript" src="assets/js/material-kit.js"></script>
    <script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/wow.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
    
  </body>
</html>