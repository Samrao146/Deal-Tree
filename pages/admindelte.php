<?php
include 'core/connection.php';
session_start();
if (isset($_GET['id'])) {
         $a= $_GET['id'];
         $qryDel="delete from `post` where `post_id`=?";
    	   $pds = $conn-> prepare($qryDel);
    	   $pds-> execute(array($a));
    		 $num=$pds->rowcount();
            $qryDel1="delete from `report` where `post_id`=?";
    	       $pds1 = $conn-> prepare($qryDel1);
    		     $pds1-> execute(array($a));
    		     $num1=$pds1->rowcount();
               if ($num>0 && $num1>0){
                 echo "<script type='text/javascript'>  alert('Deleted Successfully');window.location.href='adminreport.php'; </script>";
      }else{
          echo "<script type='text/javascript'>  alert('sorry Something went wrong, Try again');window.location.href='adminreport.php'; </script>";
      }
      }
?>
