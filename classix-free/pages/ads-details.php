<?php
//ob_start();
include('core/init.php');
include 'core/connection.php';
session_start();
	if(isset($_GET["id"])){
	$_SESSION['postid'] = $_GET["id"];
	$postid = $_GET["id"];
	$query = "SELECT * FROM `POST` where `post_id`=?";
	$pds = $conn-> prepare($query);
	$pds-> execute(array($postid));
	$row = $pds->fetchAll();
	$num =$pds->rowCount();
	
	
$userid = $_SESSION['id'];
$query1 = "SELECT * FROM `user` where `userid`=?";
	$pds = $conn-> prepare($query1);
	$pds-> execute(array($userid));
	$row1 = $pds->fetchAll();
	$num1 = $pds->rowCount();
	if($num1>0){
		foreach($row1 as $value1){
			$firstname = $value1["firstname"];
			$phone= $value1["phone"];
			$email = $value1["email"];
		}
	}
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
				  echo "hello";
			  $a=$dir.'/'.$file;
			  }
			  //echo $a;
			  $c=$c+1;
			  echo "c".$c;
           break;
           }
		   else{
			   echo"fuddu";
		   }
		}
		
        }
    }
	}
}
	?>
<html lang="en">
  <head>
		<meta charset="utf-8">
	<title>DealTree</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="cache-control" content="max-age=0">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="-1">
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 11:00:00 GMT">
	<meta http-equiv="pragma" content="no-cache">
    <title>DealTree</title>
	<script async="" src="//www.google-analytics.com/analytics.js">
					undefined
					</script>

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

    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row">
          <!-- Product Info Start -->
          <div class="product-info">
		  <?php
			if($num>0){
			//echo"selected";
			foreach($row as $value){
		
				
				?>
            <div class="col-sm-8">
              <div class="inner-box ads-details-wrapper">
                <h2><?php echo $value['post_title']; ?></h2>
               <p class="item-intro"><span class="poster">For sale by <span class="ui-bubble is-member"><?php echo $firstname; ?></span> <!--<span class="date"> 20 Mar  2:27 am</span>--> from <span class="location"><i class="fa fa-map-marker"></i><?php echo $value['post_location']; ?></span></span></p> 
                <div id="owl-demo" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                    <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 4128px; left: 0px; display: block;"><div class="owl-item" style="width: 688px;"><div class="item">
                      <img src="<?php echo $a; ?>" alt="no">
                    </div></div><div class="owl-item" style="width: 688px;"><div class="item">
                      <img src="assets/img/item/img-2.jpg" alt="">
                    </div></div><div class="owl-item" style="width: 688px;"><div class="item">
                      <img src="assets/img/item/img3.jpg" alt="">
                    </div></div></div></div>
                    
                    
                <div class="owl-controls clickable"><div class="owl-pagination"><a href="#prev" class="prev-owl"></a><div class="owl-page active"><span class=""></span><a class="item-link" style="background: transparent url(&quot;assets/img/item/img-1.jpg&quot;) no-repeat scroll center center / cover ;"></a></div><div class="owl-page"><span class=""></span><a class="item-link" style="background: transparent url(&quot;assets/img/item/img-2.jpg&quot;) no-repeat scroll center center / cover ;"></a></div><div class="owl-page"><span class=""></span><a class="item-link" style="background: transparent url(&quot;assets/img/item/img3.jpg&quot;) no-repeat scroll center center / cover ;"></a></div><a href="#next" class="next-owl"></a></div></div></div>
              </div>
				
              <div class="Ads-Details">
                <h2 class="title-2"><strong>Ad Details</strong></h2>
                  <div class="row">
                  <div class="ads-details-info col-md-8">
                    <p><?php echo $value['post_desc']; ?></p>
                    </div>
                  <div class="col-md-4">
                    <aside class="panel panel-body panel-details">
                      <ul>
                        <li>
                        <p class=" no-margin "><strong>Phone:</strong> <?php echo $phone; ?></p>
                        </li>
						<li>
                        <p style="width:auto;" class="no-margin"><strong>Email:</strong> <a href="#"><?php echo $email; ?></a></p>
                        </li>
						<li>
                        <p class=" no-margin "><strong>Price:</strong><?php echo $value['post_pice']; ?></p>
                        </li>
                        <li>
                        <p class="no-margin"><strong>Type:</strong> <a href="#"><?php echo $value['post_category']; ?></a>, <a href="#">For sale</a></p>
                        </li>
                        <li>
                        <p class="no-margin"><strong>Location:</strong> <a href="#"><?php echo $value['post_location']; ?></a></p>
                        </li>
                        
                        
                      </ul>
                    </aside>

                    <!-- <div class="ads-action">
                      <ul class="list-border">
                        <li>
                          <a href="#"> <i class=" fa fa-phone"></i> 022445167532 </a> </li>
                        <li>
                        </li><li>
                          <a href="#"> <i class=" fa fa-user"></i> More ads by User </a> </li>
                        <li>
                          <a href="#"> <i class=" fa fa-heart"></i> Save ad </a> </li>
                        <li>
                          <a href="#"> <i class="fa fa-share-alt"></i> Share ad </a>
                      

                        </li>
                      </ul>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
            <?php 
	 }
 }
 }
 else{
	 echo "there is no category";
 
 }?>
            
          </div>
          <!-- Product Info End -->
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
                        <a href="#"></a> for all your Wingthemes needs! 
                      </span>
                    </li>
                    <li class="clearfix">
                      <span>
                        Eight marketplacet. Join us: 
                        <a href="#"></a>
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
                <p>All copyrights reserved @ 2016 - Design & Development by <a href="">Gras</a></p>
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