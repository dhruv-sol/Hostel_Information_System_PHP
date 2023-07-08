<?php

    if(isset($_POST['btnsubmit']))
    {
        $name = $_POST['nm'];
        $password = md5($_POST['pd']);
        $mobileno = $_POST['mo'];
        $email = $_POST['em'];
        $ip = $_SERVER['REMOTE_ADDR'];

        //Database Connection
        $dbConn = new PDO("mysql:host=localhost;dbname=php_hostel","root","");
        $query = "insert into tbluser values(NULL,'$name','$password',$mobileno,'$email',NULL,'$ip',1)";
        $stat = $dbConn->prepare("$query");
        $stat->execute();
        header("Location: ./viewlogin.php");

    }
    else
        header("Location: ./viewregistration.php");

?>