<?php
$con= mysqli_connect("localhost","root","","admindb"); 

if (!$con) {
  die("Failed to connec to databse " . mysqli_error($con));
}
mysqli_query($con, "SET NAMES 'utf8' ");
  date_default_timezone_set('Asia/Bangkok');
?>
