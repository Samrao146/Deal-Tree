<?php
$username = 'root';
//$db = 'dealtree';
$pass ='';
$servername = 'localhost';
try {
   $conn =  new PDO("mysql:host=$servername;dbname=dealtree",$username, $pass);
  $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (Exception $e) {
  echo "connection failed:".$e->getMessage();
  }