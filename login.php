<?php 

    session_start();

    if (isset($_POST['username'])) {

        include('backend/condb.php');

        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordenc = md5($password);

        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$passwordenc'";

        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['userid'] = $row['id'];
            $_SESSION['user'] = $row['name'];
            $_SESSION['userlevel'] = $row['userlevel'];

            if ($_SESSION['userlevel'] == 'a') {
                header("Location: backend/index.php");
            }

            if ($_SESSION['userlevel'] == 'm') {
                header("Location: index.php");
            }
        } else {
            echo "<script> alert('Username หรือ Password ไม่ถูกต้อง);</script>";
        }

    } else {
        header("Location: index.php");
    }


?>
