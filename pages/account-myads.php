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
            <a class="navbar-brand logo" href="index.php"><img src="assets/img/logo.png" alt=""></a>
          </div>
          <!-- brand and toggle menu for mobile End -->

          <!-- Navbar Start -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="account-home1.php"><i class="lnr lnr-user"></i> My Account</a></li>
			  <li><a href="logout.php"><i class="lnr lnr-enter"></i> Logout</a></li>
              <li class="postadd">
                <a class="btn btn-danger btn-post" href="post-ads.php"><span class="fa fa-plus-circle"></span> Post an Ad</a>
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
				<li class="active">
				<a href="account-myads.php">
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
					  $postid = $value['post_id'];
				$path = "postimage/";
	$select_image="select `post_pic` from `post_pic` where `post_id`=?";

$var=$conn-> prepare($select_image);
$var->execute(array($postid));
$row2=$var->fetchAll();
$num2 = $var->rowCount();
if($num2>0)
{
	foreach($row2 as $value2){
//echo  $value['post_pic'];
	
 //$var1=$row["post_pic"];


$dir = $path ;
//echo $dir;
  //  $www_root = 'http://localhost/Project/dealtree/postimage';
    
    $file_display = array('jpg', 'jpeg', 'png', 'gif');

    if ( file_exists( $dir ) == false ) {
       echo 'Directory \'', $dir, '\' not found!';
    } else {
       $dir_contents = scandir( $dir );
		$c=1;
        foreach ( $dir_contents as $file ) {
			if ($file=$value2['post_pic'])
			{
				
			
          $a=explode('.', $file ) ;
		   $file_type = strtolower(end($a));
           if ( ($file !== '.') && ($file !== '..') && (in_array( $file_type, $file_display)) ) {
              //echo '<img src="', $dir, '/', $file, '" alt="', $file, ' width="10" height="100"/>';
			  $d=1;
			  if($c==$d)
			  {
				 // echo "hello";
			  $a=$dir.'/'.$file;
			  }
			  //echo $a;
			  $c=$c+1;
			  //echo "c".$c;
           break;
           }
		   else{
			   echo"kllk";
		   }
		}
		
        }
    }
	}
}
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
                          <img class="img-responsive" src="<?php echo $a; ?>" alt="no img">
                        </a>
                      </td>
                      <td class="ads-details-td">
                        <h4><a href=""><?php echo $value['post_title']?></a></h4>
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