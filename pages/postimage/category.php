<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Clasified">
    <meta name="generator" content="Wordpress! - Open Source Content Management">
    <title>Category | Bootstrap HTML5 Classified Template</title>

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
              <h2 class="page-title">CATEGORIES</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End --> 
    <!-- Search wrapper Start -->
    <!--<div id="search-row-wrapper">
      <div class="container">
        <div class="search-inner">
            <!-- Start Search box -->
            <!--<div class="row search-bar">
              <div class="advanced-search">
                <form class="search-form" method="get">
                  <div class="col-md-3 col-sm-6 search-col">
                    <div class="input-group-addon search-category-container">
                      <label class="styled-select">
                        <select class="dropdown-product" name="product-cat" >
                          <option value="0">All Categories</option>
                          <option class="subitem" value="community"> Community</option>
                          <option value="items-for-sale"> Items For Sale</option>
                          <option value="jobs"> Jobs</option>
                          <option value="personals"> Personals</option>
                          <option value="training"> Training</option>
                          <option value="real_estate"> Real Estate</option>
                          <option value="services"> Services</option>
                          <option value="vehicles"> Vehicles</option>
                        </select>                                    
                      </label>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6 search-col">
                    <div class="input-group-addon search-category-container">
                      <label class="styled-select location-select">
                        <select class="dropdown-product" name="product-cat" >
                          <option value="0">All Locations</option>
                          <option value="New York">New York</option>
                          <option value="California">California</option>
                          <option value="Washington">Washington</option>
                          <option value="churches">Birmingham</option>
                          <option value="Birmingham">Chicago</option>
                          <option value="Phoenix">Phoenix</option>
                        </select>                                    
                      </label>
                    </div>


                  </div>
                  <div class="col-md-3 col-sm-6 search-col">
                    <input class="form-control keyword" name="keyword" value="" placeholder="Enter Keyword" type="text">
                    <i class="fa fa-search"></i>
                  </div>
                  <div class="col-md-3 col-sm-6 search-col">
                    <button class="btn btn-common btn-search btn-block"><strong>Search</strong></button>
                  </div>
                </form>
              </div>
            </div>
            <!-- End Search box -->
       <!-- </div>
      </div>
    </div>
    <!-- Search wrapper End -->  

    <!-- Main container Start -->  
   <div class="main-container">
<div class="container">
<div class="row">
   <div class="col-sm-3 page-sidebar">
            <aside>
              <div class="inner-box">
                <div class="categories">
                  <div class="widget-title">
                    <i class="fa fa-align-justify"></i>
                    <h4>All Categories</h4>
                  </div>
                  <div class="categories-list">
                    <ul>
                     <li>
                        <button  class="btn btn-primary btn-xs" type="submit" id="cat" name="cat" value="automobiles"> Automobaailes</button>
                         <!--  <i class="fa fa-car"></i>
                          Automobiles <span class="category-counter"></span>
                        </a> -->
                      </li>
					  
					  <li>
                        <a href="#">
                          <i class="fa fa-laptop"></i>
                          Laptops <span class="category-counter"></span>
                        </a>
                      </li>
					  
					  <li>
                        <a href="#">
                          <i class="fa fa-mobile"></i>
                          Mobiles <span class="category-counter"></span>
                        </a>
                      </li>
					  
					  <li>
                        <a href="#">
                          <i class="fa fa-television"></i>
                          Electronics <span class="category-counter"></span>
                        </a>
                      </li>
					 
					 <li>
                        <a href="#">
                          <i class="fa fa-desktop"></i>
                          Computers <span class="category-counter"></span>
                        </a>
                      </li>
					  
					  
                       <li>
                        <a href="#">
                          <i class="fa fa-home"></i>
                          Apartments/Houses <span class="category-counter"></span>
                        </a>
                      </li>
                     

					 <li>
                        <a href="#">
                          <i class="fa fa-headphones "></i>
                          Home Appliances <span class="category-counter"></span>
                        </a>
                      </li>
                     
                     <li>
                        <a href="#">
                          <i class="fa fa-camera "></i>
                         Cameras <span class="category-counter"></span>
                        </a>
                      </li>


					 <li>
                        <a href="#">
                          <i class="fa fa-leaf"></i>
                          Fashion & Beauty <span class="category-counter"></span>
                        </a>
                      </li>
					  
					  <li>
                        <a href="#">
                          <i class="fa fa-gamepad"></i>
                          Games <span class="category-counter"></span>
                        </a>
                      </li>
                     
                      <li>
                        <a href="#">
                          <i class="fa fa-black-tie"></i>
                          Jobs <span class="category-counter"></span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-home"></i>
                          Home & Furniture <span class="category-counter"></span>
                        </a>
                      </li> 
                    </ul>
                  </div>
                </div>
              </div>

			  
			  
			  <script>
$(document).ready(function()
{
    $("#cat").onClick(function()
    {
        var textboxvalue = $('#cat').val();
        $.ajax(
        {
            type: "POST",
            url: 'csearch.php',
            data: 'txt1='+ textboxvalue,
            success: function(result)
            {   
			//$("#result").show();
             $("#clist").html(result);
            }
        });
    });
});
</script>
			  
              <!-- <div class="inner-box">
                <div class="widget-title">
                  <h4>Premium Ads</h4>
                </div>
                <div class="advimg">
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
                  </ul>
                </div>
              </div> -->

              <!-- <div class="inner-box">
                <div class="widget-title">
                  <h4>Advertisement</h4>
                </div>
                <img src="assets/img/img1.jpg" alt="">
              </div> -->
            </aside>
          </div>
   
   <div class="col-sm-9 page-content">
            <!-- Product filter Start -->
            <!-- <div class="product-filter">
              <div class="grid-list-count">
                <a class="list switchToGrid" href="#"><i class="fa fa-list"></i></a>
                <a class="grid switchToList" href="#"><i class="fa fa-th-large"></i></a>
              </div>
              <div class="short-name">
                <span>Short By</span>
                <form class="name-ordering" method="post">
                  <label>
                    <select name="order" class="orderby">
                      <option selected="selected" value="menu-order">Short by</option>
                      <option value="popularity">Price: Low to High</option>
                      <option value="popularity">Price: High to Low</option>
                    </select>
                  </label>
                </form>
              </div>
              <div class="Show-item">
                <span>Show Items</span>
                <form class="woocommerce-ordering" method="post">
                  <label>
                    <select name="order" class="orderby">
                      <option selected="selected" value="menu-order">49 items</option>
                      <option value="popularity">popularity</option>
                      <option value="popularity">Average ration</option>
                      <option value="popularity">newness</option>
                      <option value="popularity">price</option>
                    </select>
                  </label>
                </form>
              </div>
            </div> -->
            <!-- Product filter End -->

            <!-- Adds wrapper Start -->
            <div class="adds-wrapper" id="clist">
              <div class="item-list">
                <div class="col-sm-2 no-padding photobox">
                  <div class="add-image">
                    <a href="#"><img src="assets/img/item/img-1.jpg" alt=""></a>
                    <span class="photo-count"><i class="fa fa-camera"></i>2</span>
                  </div>
                </div>
                <div class="col-sm-7 add-desc-box">
                  <div class="add-details">
                    <h5 class="add-title"><a href="ads-details.html"></a></h5>
                    <div class="info">
                     <!--  <span class="add-type">B</span>
                      <span class="date">
                        <i class="fa fa-clock"></i>
                        16:22:13 2016-02-29
                      </span> - -->
                      <span class="category"></span> -
                      <span class="item-location"><i class="fa fa-map-marker"></i></span>
                    </div>
                    <div class="item_desc">
                      <a href="#">Description</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3 text-right  price-box">
                  <h2 class="item-price">  </h2>
                  <!-- <a class="btn btn-danger btn-sm"><i class="fa fa-certificate"></i>
                  <span>Top Ads</span></a> 
                  <a class="btn btn-common btn-sm"> <i class="fa fa-eye"></i> <span>215</span> </a>  -->
                </div>
              </div>
              
              
            </div>
            <!-- Adds wrapper End -->
            
            <!-- Start Pagination -->
            <div class="pagination-bar">
              <ul class="pagination">
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"> ...</a></li>
              <li><a class="pagination-btn" href="#">Next »</a></li>
              </ul>
            </div>
            <!-- End Pagination -->

            <div class="post-promo text-center">
              <h2> Do you get anything for sell ? </h2>
              <h5>Sell your products online FOR FREE. It's easier than you think !</h5>
              <a href="post-ads.html" class="btn btn-post btn-danger">Post a Free Ad </a>
            </div>
          </div>
		  <div>
		  </div>
		  </div>
		  </div>
		  </div>
    <!-- Main container End -->  

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
	
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js">
<!-- bxSlider Javascript file -->
<script src="/js/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="/lib/jquery.bxslider.css" rel="stylesheet" />
    
  </body>
</html>