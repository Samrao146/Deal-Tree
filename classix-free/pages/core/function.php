<?php
include('connection.php');
//global $conn;
  function user_exists($username){
	   global $conn;
	  //include('connection.php');
	  // $conn =  new PDO("mysql:host=localhost;dbname=arch1",'root','');
	   $query = "select `userid` from `user` where `username` =?";
       $pds =$conn-> prepare($query);
	   $pds->execute(array($username));
	   $num = $pds->rowcount();
	   return($num === 1)? true:false;
}
 function user_active($username){
	  $conn =  new PDO("mysql:host=localhost;dbname=dealtree",'root','');
	  $query = "select `userid` from `user` where `username` =? AND `active` = 1";
	  $pds = $conn-> prepare($query);
	  $pds->execute(array($username));
	  $num = $pds->rowcount();
	  $row = $pds->fetch();
	  echo $row['userid'];
	  return($num === 1)? true:false;
}

?>