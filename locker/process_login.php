<?php
    include 'dbh.php';

    if(isset($_POST['send_code'])){
        //$email = $_POST['email'];
        $email = strtolower($_POST['email']);
        $code = mt_rand(100000, 999999);

        $mysqli->query("INSERT INTO users (email, otp, ispending) VALUES('$email','$code','true' )") or die ($mysqli->error());

        //echo $_SESSION['loginError'] = 0;

        header("location: enter_otp.php?email=".$email.'&error=0');
    }

    if(isset($_POST['send_otp'])){
        $email = strtolower($_POST['email']);
        $otp = $_POST['otp'];
        $checkUser = $mysqli->query("SELECT * FROM users WHERE email='$email' AND otp='$otp' ");
        if(mysqli_num_rows($checkUser)==0){
            //$_SESSION['loginError'] = 1;
            header("location: enter_otp.php?email=".$email.'&error=1');
        }
        else{
            $mysqli->query("UPDATE vault_status SET open='1' WHERE id='1'  ") or die ($mysqli->error());
            header("location: confirmed.php");
        }
        //
    }
?>