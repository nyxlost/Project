<?php 
require('backend/condb.php');
$date= date("d-m-y h:i:sa");
$str = 'j';
$plus = [];
if (isset($_POST['submit']))
{
   myfnc($_POST['userId'],$_POST['productID']);
}
function myfnc($userID,$productID)
{
  global $con,$allQueue,$num;
  $sql = "SELECT * FROM log_queue WHERE product_id = 1 AND status ='j'";
  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
  while($row = $result->fetch_assoc()){
   $num =  $row['queue'];
}
      if ($num == "") {
        $sql = "INSERT INTO log_queue (queue,id_user,date_save,product_id,status) VALUES (1,$userID,CURRENT_TIMESTAMP,$productID,'j')";
        $result = mysqli_query($con,$sql) or die ("Error in query: $sql " . mysqli_error());
      }else{
        $sql = "INSERT INTO log_queue(queue,id_user,date_save,product_id,status) VALUES ($num+1,$userID,CURRENT_TIMESTAMP,$productID,'j')";
        $result = mysqli_query($con,$sql) or die ("Error in query: $sql " . mysqli_error());
        $allQueue =0;
        $plus = [];
      }
}


?>