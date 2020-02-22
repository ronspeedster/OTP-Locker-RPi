<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    include ('dbh.php');
    if(isset($_POST['login'])) {
        $email = strtolower($_POST['email']);
        $checkUser = $mysqli->query("SELECT * FROM users WHERE email='$email' ");
        if(mysqli_num_rows($checkUser)==0){
            //$_SESSION['loginError'] = 1;

            header("location: login.php?error=1 ");
        }
        else{
            $newCheckUser = $checkUser->fetch_array();
            $_SESSION['email'] = $newCheckUser['email'];
            header("location: index.php");
        }
    }
?>