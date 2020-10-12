<?php 
session_start();
        if(isset($_POST['a_user'])){
                  include("backend/condb.php");
                  $username = $_POST['a_user'];
                  $password = $_POST['a_pass'];

                  $sql="SELECT * FROM tbl_admin
                  WHERE  a_user ='".$username."' 
                  AND  a_pass ='".$password."' ";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["user_id"] = $row["a_id"];

                      if($_SESSION["user_id"]!=''){ 

                        Header("Location: backend/index.php");
                      }
                  
                  }else{
                    echo "<script>";
                        echo "alert(\" User หรือ  Password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: index.php"); //user & password incorrect back to login again
 
        }
?>