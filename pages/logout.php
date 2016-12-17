<?php
include 'core/connection.php';
session_start();
if(session_destroy()){
 echo "<script type='text/javascript'>  alert('Thankx for coming'); window.location.href='login.php'; </script>";
}
 ?>	