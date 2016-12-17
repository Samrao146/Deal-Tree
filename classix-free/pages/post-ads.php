<?php
ob_start();
include('core/init.php');
include 'core/connection.php';
session_start();
	//echo  $_SESSION['id'];
	if($_SERVER["REQUEST_METHOD"]== "POST" || !empty($SESSION['id'])){
			$title = $_POST['title'];
			$cat = $_POST['category-group'];
			//$date =$_POST['date'];
			$Loc = $_POST['location'];
			$price =$_POST['price'];
			$Desc = $_POST['textarea'];
			$userid = $_SESSION['id'];
			$maxsize = 1000000;
			$filesize =  $_FILES['file']['size']; 
			//echo $filesize;
		$qery = "INSERT INTO `post`(`post_title`,`post_category`,`post_location`,`post_pice`,`post_desc`,`user_id`)VALUES (?,?,?,?,?,?)"; 	
			  $pds = $conn-> prepare($qery);
			  $pds-> execute(array($title,$cat,$Loc,$price,$Desc,$userid));
			  $num=$pds->rowcount();
			  
				  if($num > 0){
					  echo"sucees";
					  
				  }
				  else{
					  echo "wrong";
				  }
			//echo $filesize;
				foreach ($_FILES['file']['name'] as $f => $name) { 
			//if(isset($_FILES['file']['tmp_name']) && isset($_FILES['file']['tmp_name']))
			//{
				$valid_formats = array("jpg", "png", "gif", "zip", "bmp");
				
				echo"enter for loop";
$max_file_size = 1000000000; //100 kb
$path = "postimage/"; // Upload directory
$count = 0;


	// Loop $_FILES to exeicute all files
    
	    if ($_FILES['file']['error'][$f] == 4) {
	        continue; // Skip file if any error found
	    }	       
	    if ($_FILES['file']['error'][$f] == 0) {	           
	        if ($_FILES['file']['size'][$f] > $max_file_size) {
	            $message[] = "$name is too large!.";
	            continue; // Skip large files
	        }
			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
				$message[] = "$name is not a valid format";
				continue; // Skip invalid file formats
			}
	        else{ // No error found! Move uploaded files 
echo"enteretfahghgs";	        
			if(move_uploaded_file($_FILES["file"]["tmp_name"][$f], $path.$name))
	            $count++; // Number of successfully uploaded file
			$qry="select `post_id` from `post` ORDER BY `post_id` desc limit 1"; 
				  $pds = $conn->prepare($qry);
				  $pds ->execute();
				  $row = $pds->fetchAll();
				  $num1 =$pds->rowcount();
				  foreach( $row as $value ) 
				  {
				  //echo "value of num1".$num1;
				  $a=$value['post_id'];
	}
				  echo $a;
				  $query1 = "INSERT INTO `post_pic`(`post_id`,`post_pic`) VALUES(?,?)";
				  $pds = $conn->prepare($query1);
				  $pds ->execute(array($a,$name));
				  $num =$pds->rowcount();
				  if($num>0){
					  echo "sucess in pc table";
				  }
				  else
				  {
					  echo "bund fat gyi";
				}
			
	        }
	    }
	}
	//else
//{
	//echo "asdsad";
//}
//}

			  
				  
	}
			
else
{
	//echo "<script type='text/javascript'> alert('Please Login First'); window.location.href='viewpost.php'; </script>";
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Clasified">
    <meta name="generator" content="Wordpress! - Open Source Content Management">
    <title>Post-ads | Bootstrap HTML5 Classified Template</title>

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
            <a class="navbar-brand logo" href="index.html"><img src="assets/img/logo1.png" alt=""></a>
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
              <h2 class="page-title">Post Ad</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End --> 
	
    <!-- Content section Start --> 
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#file").bind('change',function(){
       var x= this.files[0].size;
       if(x>2000000){
		   //alert(this.files[0].size);
		   alert("\nimage size must be less than 2 mb");
		    $("#file").trigger('reset');
	   }
	});
});
</script>
	
	
	<section id="content">
      <div class="container">
          <div class="col-sm-12 col-md-9 col-md-offset-2">
				<div class="page-ads box">
					<h2 class="title-2"> Post A Free Classified Ad </h2>
					<form action="post-ads.php" method="POST"  enctype = "multipart/form-data">
					
					<form class="form-ad" action="post-ads.php" method="POST"  enctype = "multipart/form-data">
						<div class="form-group">
						<label class="control-label">Category</label>
							<select id="category-group" class="form-control" name="category-group">
							<option value="0" selected="selected"> Select a category... </option>
							<option value="Vehicles" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Vehicles - </option>
							<option value="Cars"> Cars </option>
							<option value="Commercial vehicles"> Commercial vehicles </option>
							<option value="Motorcycles"> Motorcycles </option>
							<option value="Motorcycle Equipment"> Car & Motorcycle Equipment </option>
							</select>
							<span class="material-input"></span>
							</div>
					
					
						
						<div class="form-group">
						 
							<label class="control-label">Ad title</label>
							<input class="form-control input-md" id="title" name="title" placeholder="Ad title" required="" type="text">
							<span class="help-block">A great title needs at least 60 characters. </span>
							<span class="material-input"></span>
							</div>
						 
						<div class="form-group">
						<label class="control-label">Location</label>
						<input id="location" name="location" class="form-control" placeholder="Location" type="text">
						</div>
						
						<div class="form-group">
						<label class="control-label">Price</label>
						<input id="price" name="price" class="form-control" placeholder="Price" type="text">
						</div>
						
						<div class="form-group">
						<label class="control-label">Describe ad </label>
						<textarea id="textarea" class="form-control" name="textarea">Describe what makes your ad unique</textarea>
						<span class="material-input"></span>
						</div>
						
						
						
						
						<label class="control-label">Upload Image</label><br>
						
						<!--<i class="glyphicon glyphicon-folder-open"></i>-->
						
						<input type="file" name="file[]" id = "file" value=" multiple="multiple accept="image/*"/>
						
						
						<br><br>
                         
						<!-- <span class="error"></span> -->
                    	<button class="btn btn-common" name="submit" type="submit">Submit</button>
					
					</form>
					
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