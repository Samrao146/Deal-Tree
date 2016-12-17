<?php
//include 'header/header.html';
//include 'navbar/sidevar.html';
include('core/init.php');
include 'core/connection.php';
session_start();
$userid =$_SESSION['id'];
$query = "SELECT * FROM `post` where `user_id`=?";
$pds = $conn-> prepare($query);
$pds-> execute(array($userid));
//$row = $pds->fetchAll();
$num = $pds->rowCount();
if($num>0){
	echo"selected";
	while($row=$pds->fetchAll()){
?><html>
<table><tr><td><?php echo $row['post_title'].$row['post_location'].$row['post_pice'].$row['post_desc'] ?></td></tr></table></html><?php		
}
}
else{
	echo "not";
}
?>