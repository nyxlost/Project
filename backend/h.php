<?php 
  session_start(); 
  include('condb.php');
  $userid = $_SESSION['userid'];
  $user = $_SESSION['user'];
  $userlevel = $_SESSION['userlevel'];
 	if($userlevel!='a'){
    Header("Location: logout.php");  
  }  
?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>เว็บไซต์ขายของหลุดจำนำ</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">