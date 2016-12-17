<?php
//include 'header/header.html';
//include 'navbar/sidevar.html';
include('core/init.php');
include 'core/connection.php';
session_start();
//echo $_SESSION['id'];
if(isset($_SESSION['id'])){
$userid =$_SESSION['id'];
$query = "SELECT * FROM `post` where `user_id`=?";
$pds = $conn-> prepare($query);
$pds-> execute(array($userid));
$row = $pds->fetchAll();
$num = $pds->rowCount();
if($num>0){
	//echo"selected";
	//foreach($row as $value){
//	while($row=$pds->fetchAll()){
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Clasified">
    <meta name="generator" content="Wordpress! - Open Source Content Management">
    <title>Account-myads | Bootstrap HTML5 Classified Template</title>

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
            <a class="navbar-brand logo" href="index.html"><img src="assets/img/logo.png" alt=""></a>
          </div>
          <!-- brand and toggle menu for mobile End -->

          <!-- Navbar Start -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="login.html"><i class="lnr lnr-enter"></i> Login</a></li>
              <li><a href="signup.html"><i class="lnr lnr-user"></i> Signup</a></li>
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
            <li><a href="index.html">Home</a></li>
            <li><a href="index-v-2.html">Home Page V2</a></li>
            <li><a href="about.html">About us</a></li>            
            <li><a href="category.html">Category</a></li>             
            <li><a href="ads-details.html">Ads details</a></li>    
            <li><a href="pricing.html">Pricing Tables</a></li>    
            <li><a href="account-archived-ads.html">Account archived</a></li>
            <li><a href="account-close.html">Account-close</a></li>
            <li><a href="account-favourite-ads.html">Favourite ads</a></li>
            <li><a href="account-home.html">Account home</a></li>
            <li><a href="account-myads.html">Account myads</a></li>
            <li><a href="account-pending-approval-ads.html">pending approval</a></li>
            <li><a href="account-saved-search.html">saved search</a></li> 
            <li><a href="post-ads.html">Post ads</a></li> 
            <li><a href="posting-success.html">Posting-success</a></li>  
            <li><a href="blog.html">Blogs</a></li>
            <li><a href="blog-details.html">Blog Details</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="forgot-password.html">Forgot-password</a></li>
            <li><a href="faq.html">Faq</a></li>
            <li><a href="signup.html">Signup</a></li>
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
              <h2 class="page-title">MY ADS</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End --> 
	
    <!-- Content section Start --> 
    
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
				
				<a href="account-home.html">
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
				<li class="active">
				<a href="account-myads.html">
				<i class="fa fa-credit-card"></i>
				My Ads
				<!--<span class="badge">44</span>-->
				</a>
				</li>
				<li>
					<a href="account-pending-approval-ads.html">
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
				<div id="content">
      <div class="container">
        <div class="row">
          
          <div class="col-sm-9 page-content">
            <div class="inner-box">
              <h2 class="title-2"><i class="fa fa-credit-card"></i> My ADS</h2>
              <div class="table-responsive">
                <div class="table-action">
                 
                 <!-- <div class="table-search pull-right col-xs-7">
                    <div class="form-group is-empty">
                      <label class="col-xs-5 control-label text-right">Search <br>
                        <a title="clear filter" class="clear-filter" href="#clear">[clear]</a> 
                      </label>
                      <div class="col-xs-7 searchpan">
                        <input class="form-control" id="filter" type="text">
                      </div>
                    <span class="material-input"></span></div>
                  </div>
                </div>-->
                
				<table class="table table-striped table-bordered add-manage-table">
                  <thead>
				  
                    <tr>
                     
                      <th>Photo</th>
                      <th>Adds Details</th>
                      <th>Price</th>
                      <th>Option</th>
                    </tr>
                  </thead>
				  
                  <tbody>
				  <?php
				  foreach($row as $value){
				  ?>
                    <tr>
                      <!--<td class="add-img-selector">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"><span class="checkbox-material"><span class="check"></span></span>
                          </label>
                        </div>-->
                      </td>
                      <td class="add-img-td">
                        <a href="ads-details.html">
                          <img class="img-responsive" src="assets/img/item/img-1.jpg" alt="img">
                        </a>
                      </td>
                      <td class="ads-details-td">
                        <h4><a href="ads-details.html"><?php echo $value['post_title']?></a></h4>
                        <!--<strong> Posted On </strong>:
                        Date ethe ayege agar haige a ta</p> -->
                        <p> <!--<strong>Visitors </strong>: 221 --><strong>Located In:</strong> <?php echo $value['post_location']?> </p>
                      </td>
                      <td class="price-td">
                        <strong> $<?php echo $value['post_pice']?></strong>
                      </td>
                      <td >
                        <p>
						<a href='editadd.php?id=<?php echo $value['post_id'] ?>'class="btn btn-primary btn-xs"> <i class="fa fa-pencil-square-o"></i> Edit</a></p>
                        <!--<p><a class="btn btn-info btn-xs"> <i class="fa fa-share-square-o"></i> Share</a></p>-->
                        <p><a href='delte.php?id=<?php echo $value['post_id'] ?>' class="btn btn-danger btn-xs"> <i class=" fa fa-trash"></i> Delete</a></p>
						
                      
					  </td>
                    </tr>
					<?php }
	}
	}else
	{
	echo "<script type='text/javascript'>  window.location.href='index.php'; </script>";	
	}
	?>
                    <!--<tr>
                      <!--<td class="add-img-selector">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"><span class="checkbox-material"><span class="check"></span></span>
                          </label>
                        </div>
                      </td>-->
                     <!-- <td class="add-img-td">
                        <a href="ads-details.html">
                          <img class="img-responsive" src="assets/img/item/img-2.jpg" alt="img">
                        </a>
                      </td>
                      <td class="ads-details-td">                        
                        <h4><a href="ads-details.html">Ketan for sale</a></h4>
                        <p> <strong> Posted On </strong>:
                        Date </p>
                        Located In:</strong> Punjab </p>                        
                      </td>
                      <td class="price-td">                        
                        <strong> $3</strong>                        
                      </td>
                      <td class="action-td">
                        <p><a class="btn btn-primary btn-xs"> <i class="fa fa-pencil-square-o"></i> Edit</a></p>
                       
                        <p><a class="btn btn-danger btn-xs"> <i class=" fa fa-trash"></i> Delete</a></p>
                      </td>
                    </tr>-->
                    
                  </tbody>
                </table>
              </div>               
            </div>
          </div>
        </div>  
      </div>      
    </div>
	</div>
	</div>
	</div>

    <!-- End Content -->

    <!-- Footer Section Start -->
     <footer>
    	<!-- Footer Area Start -->
    	<section class="footer-Content">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title">About</h3>
                <div class="textwidget">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, consectetur eget facilisis sed, auctor ut purus.</p>
                </div>
              </div>
            </div>
    				<div class="col-md-3 col-sm-6 col-xs-12">
    					<div class="widget">
    						<h3 class="block-title">Links</h3>
  							<ul class="menu">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Categories</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Left Sidebar</a></li>
                  <li><a href="#">Pricing Plans</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Full Width Page</a></li>
                  <li><a href="#">Notifications</a></li>
                </ul>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12">
    					<div class="widget">
                <h3 class="block-title">Latest Tweets</h3>
                <div class="twitter-content clearfix">
                  <ul class="twitter-list">
                    <li class="clearfix">
                      <span>
                        Make sure you are following
                        <a href="#">@Graygrids</a> for all your Wingthemes needs! 
                      </span>
                    </li>
                    <li class="clearfix">
                      <span>
                        Eight marketplaces, one Graygrids Market. Join us: 
                        <a href="#">http://t.co/cLo2w7rWOx</a>
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12">
    					<div class="widget">
    						<h3 class="block-title">Premium Ads</h3>
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
                <p>All copyrights reserved @ 2016 - Design & Development by <a href="http://graygrids.com">Graygrids</a></p>
              </div>    					
              <div class="bottom-social-icons social-icon pull-right">  
                <a class="facebook" target="_blank" href="https://web.facebook.com/GrayGrids"><i class="fa fa-facebook"></i></a> 
                <a class="twitter" target="_blank" href="https://twitter.com/GrayGrids"><i class="fa fa-twitter"></i></a>
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