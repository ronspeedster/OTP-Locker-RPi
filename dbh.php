<?php

if(!isset($_SESSION))
{
    session_start();
}

        $host = 'otp.ausmxgp.com';
        $username = 'oneabov1_otp';
        $password = '00000';
        $database = 'oneabov1_otp';

        $mysqli = new mysqli($host,$username,$password,$database) or die(mysql_error($mysqli));



?>