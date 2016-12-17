<?php
include 'core/connection.php';
session_start();
$userid =$_SESSION['id']; 
if (isset($_GET['id'])) {       
     $a= $_GET['id'];     
    $qryDel="delete from `post` where `post_id`=?";
	$pds = $conn-> prepare($qryDel);
		$pds-> execute(array($a));
		$num=$pds->rowcount();
    echo "<script type='text/javascript'>  alert('Deleted Successfully'); window.location.href='account-myads.php'; </script>";
}
?>