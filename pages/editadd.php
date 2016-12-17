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
	foreach($row as $value){
		echo $value['post_title'].$value['post_category'].$value['post_location'];
	}
}
	if($_SERVER["REQUEST_METHOD"]== "POST"){
			$title = $_POST['title'];
			$cat = $_POST['category-group'];
			//$date =$_POST['date'];
			$Loc = $_POST['location'];
			$price =$_POST['price'];
			$Desc = $_POST['textarea'];
			//$userid = $_SESSION['id'];
			/*$maxsize = 8000000;
			$filesize =  $_FILES['file']['size']; 
			//echo $filesize;
			if(isset($_FILES['file']['tmp_name']) && isset($_FILES['file']['tmp_name']) && ($_FILES['file']['size']< $maxsize)){
				$name = $_FILES['file']['name'];
			 	$type = $_FILES['file']['type'];
			 	$size = $_FILES['file']['size'];
			 	$tmp_name =$_FILES['file']['tmp_name'];
			 	$location ="postimage/";
				if(move_uploaded_file($tmp_name,$location.$name)){
						echo "uploaded";
			}else{
				echo "not uploaded";
			}
					}	else{	
					 echo "File size must be less than 2mb";
					}	*/ 
				$postid = $_SESSION['postid'];
			$qery = "UPDATE `post` SET `post_title`=?,`post_category`=?,`post_location`=?,`post_pice`=?,`post_desc`=?  WHERE `post_id`=$postid"; 	
			  $pds = $conn-> prepare($qery);
			  $pds-> execute(array($title,$cat,$Loc,$price,$Desc));
			  $num=$pds->rowcount();
			  
				  if($num > 0){
					  echo "<script type='text/javascript'> alert('Updated Successfully'); window.location.href='account-myads.php'; </script>";
					  
				  }
				  else{
					  echo "wrong";
				  }
				  /*
				  $query1 = "INSERT INTO `post_pic`(`post_id`,`post_pic`) VALUES(?,?)";
				  $pds = $conn->prepare($query1);
				  $pds ->execute(array($postid,$name));
				  $num =$pds->rowcount();
				  if($num>0){
					  echo "sucess in pc table";
				  }
				  else
				  {
					  echo "bund fat gyi";
				}*/
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
					<form action="editadd.php" method="POST"  enctype = "multipart/form-data">
					
					<form class="form-ad" action="editadd.php" method="POST"  enctype = "multipart/form-data">
						<div class="form-group">
						<label class="control-label">Category</label>
							<select id="category-group" class="form-control" name="category-group">
							<option value="0" selected="selected"> Select a category... </option>
							<option class="subitem" value="Automobiles"> Automobiles</option>
                          <option value="Laptops"> Laptops</option>
                          <option value="Mobiles"> Mobiles</option>
                          <option value="Electronics"> Electronics</option>
                          <option value="Computers"> Computers</option>
                          <option value="Apartments"> Apartments</option>
                          <option value="Appliances"> Appliances</option>
                          <option value="Cameras"> Cameras</option>
						  <option value="Fashion"> Fashion</option>
						  <option value="Games"> Games</option>
						  <option value="Jobs"> Jobs</option>
						  <option value="Furniture"> Furniture</option>
							</select>
							<span class="material-input"></span>
							</div>
					
					
						
						<div class="form-group">
						 
							<label class="control-label">Ad title</label>
							<input class="form-control input-md" id="title" value="<?php echo $value['post_title']; ?>" name="title" placeholder="Ad title" required="" type="text">
							<span class="help-block">A great title needs at least 60 characters. </span>
							<span class="material-input"></span>
							</div>
						 
						<div class="form-group">
						<label class="control-label">Location</label>
						<input id="location" name="location" value="<?php echo $value['post_location']; ?>" class="form-control" placeholder="Location" type="text">
						</div>
						
						<div class="form-group">
						<label class="control-label">Price</label>
						<input id="price" name="price" value="<?php echo $value['post_pice']; ?>" class="form-control" placeholder="Price" type="text">
						</div>
						
						<div class="form-group">
						<label class="control-label">Describe ad </label>
						<textarea id="textarea" class="form-control"  name="textarea"><?php echo $value['post_desc']; ?></textarea>
						<span class="material-input"></span>
						</div>
						
						
						
						
						<label class="control-label">Upload Image</label><br>
						
						<!--<i class="glyphicon glyphicon-folder-open"></i>-->
						
						<input type="file" name="file" class="file" id = "file" value=""/>
						
						
						<br><br>
                         
						<!-- <span class="error"></span> -->
                    	<button class="btn btn-common" name="update" type="submit">Update</button>
					
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