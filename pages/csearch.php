<?php

//include 'navbar/sidevar.html';
include 'core/connection.php';
 if(!empty($_POST['txt1'])){
	$var = $_POST['txt1'];
	$query = "select * from `post` where `post_category` like '$var'";
		$pds = $conn->prepare($query);
		$pds->execute();
		$row=$pds->fetchAll();
		$num=$pds->rowCount();
		//echo $num;
		/* 			echo $value['post_title'].$value['post_category'].$value['post_location'];
				}
				}else
			{
				echo"not selected";
		}
 }else{

echo "text is nor set"; 
		} */

?>


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
 <div class="adds-wrapper">
 	<?php
 if($num>0){
	 foreach($row as $value)
     {
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
              <div class="item-list">
			 
                <div class="col-sm-2 no-padding photobox">
                  <div class="add-image">
                    <a href="#"><img src="<?php echo $a; ?>" alt="no image"></a>
                    <span class="photo-count"><i class="fa fa-camera"></i>2</span>
                  </div>
                </div>
			
                <div class="col-sm-7 add-desc-box">
				 
                  <div class="add-details">
                    <h5 class="add-title"><a href='ads-details.php?id=<?php echo $value['post_id'] ?>'><?php echo $value['post_title']?></a></h5>
                    <div class="info">
                     <!--  <span class="add-type">B</span>
                      <span class="date">
                        <i class="fa fa-clock"></i>
                        16:22:13 2016-02-29
                      </span> - -->
                      <span class="category">Electronics</span> 
                      <span class="item-location"><i class="fa fa-map-marker"></i><?php echo $value['post_location']?></span>
                    </div>
                    <div class="item_desc">
                      <a href="#"><?php echo $value['post_desc']?></a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3 text-right  price-box">
                  <h2 class="item-price"><?php echo $value['post_pice']?></h2>
                  <!-- <a class="btn btn-danger btn-sm"><i class="fa fa-certificate"></i>
                  <span>Top Ads</span></a> 
                  <a class="btn btn-common btn-sm"> <i class="fa fa-eye"></i> <span>215</span> </a>  -->
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