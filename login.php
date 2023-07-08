<?php

    if(isset($_POST['btnsubmit']))
    {
        $capvalue = $_POST['cp'];
        $usercapvalue = $_POST['txtcp'];
        if($capvalue != $usercapvalue)
        {
            include "viewlogin.php";
            exit("Captcha Not Matched");
        }

        $username = $_POST['nm'];
        $password = $_POST['pd'];
        $password = md5($password);

        //Database Connection
        $dbConn = mysqli_connect("localhost","root","","php_hostel");
        $query = "select * from tbluser where name='$username' and password='$password'";
        $result = mysqli_query($dbConn,$query);
        $count = mysqli_num_rows($result);
        mysqli_close($dbConn);
        if($count == 0){
            include "login.php";
            echo "<h3 align='center' style='color:red'> Username and Password is incorrect. </h3>";
        }
        else{
            session_start();
            $row = mysqli_fetch_array($result);
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['name'];
            header("Location: ./viewdetails.php");
        }
        

    }
    else
        header("Location: ./viewregistration.php");

?>