<?php
include 'core/connection.php';
session_start();
$uid=$_SESSION['id'];
echo "session id".$uid;
echo "<br>";

 if(!empty($_GET['ID'])){
	$var = $_GET['ID'];
	echo "var".$var;
echo "<br>";
	$query1 = "SELECT * FROM `report` where `post_id` like ? ";
	$pds = $conn-> prepare($query1);
	$pds-> execute(array($var));
	$row1 = $pds->fetchAll();
	$num1 = $pds->rowCount();
	if($num1>0){
		foreach($row1 as $value1){
			$post_id = $value1["post_id"];
		
		}
	}
	else 
	{ echo "empty";
echo "<br>";
		$post_id="";
	}
	
	$query2 = "SELECT * FROM `user` where `userid` = ?";
	
	$pds = $conn-> prepare($query2);
	$pds-> execute(array($uid));
	$row2 = $pds->fetchAll();
	$num2 = $pds->rowCount();
	if($num2>0){
		foreach($row2 as $value2){
			$Uemail = $value2["email"];
			
		}
	}
	else
	{
		$Uemail="";
	}
	
	
 echo $Uemail;
 echo "<br>";
 echo "post".$post_id."id";
 echo "<br>";
 if($Uemail == "")
 {
	 echo"user email not set";
 }
 else
 {
 if($post_id == "")
 {
	 $qery = "INSERT INTO `report`(`post_id`,`email_id`,`count`)VALUES (?,?,?)"; 	
			  $pds = $conn-> prepare($qery);
			  $pds-> execute(array($var,$Uemail,1));
			  $num=$pds->rowcount();
			  
				  if($num > 0){
					  echo"sucees";
					  echo '<script type="text/javascript">window.location = "category.php"</script>';
				  }
				  else{
					  echo "wrong";
				  }
 }
 else
 {
$query1 = "SELECT * FROM `report` where `post_id` = ?";
	$pds = $conn-> prepare($query1);
	$pds-> execute(array($post_id));
	$row1 = $pds->fetchAll();
	$num1 = $pds->rowCount();
	if($num1>0){
		foreach($row1 as $value1){
			$email = $value1["email_id"];
			$count=$value1["count"];
		}
	}
	if($email!=$Uemail)
	{
		
	$count1=$count+1;
	 $qery = "UPDATE `report` SET count='$count1' where `post_id`= ? ";
	
			  $pds = $conn-> prepare($qery);
			  $pds-> execute(array($post_id));
			  echo '<script type="text/javascript">window.location = "category.php"</script>';
			  
	}
	else
	{
		echo "You have already reported this Ad";
	}
		 
 }
	 

 }
 }
 else
 {
	 echo "not working";
 }

?>
