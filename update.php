<?php

    session_start();

    $id= $_POST['id'];
    $name = $_POST['nm'];
    $rollno = $_POST['rl'];
    $address = $_POST['ad'];
    $roomno = $_POST['rn'];
    $current = $_POST['current'];
    $department = $_POST['department'];
    $course = $_POST['course'];
    $complaint = $_POST['complaint'];
    $filename = $_POST['fup'];
    
    //  $extension = strtolower(pathinfo($_FILES['fup']['name'],PATHINFO_EXTENSION));
    //  $filename = time() * rand(1,1000) . "." . $extension;
    //  echo $filename;
    //  $filepath = "./upload/" . $filename;
    //  move_uploaded_file($_FILES['fup']['tmp_name'], $filepath);
    

    $dbConn = new PDO("mysql:host=localhost;dbname=php_hostel","root","");
    $query = "update tblinfo set name='$name',rollno='$rollno',address='$address',roomno='$roomno',current='$current',department='$department',course='$course',complaint='$complaint',file='$filename' where id=$id";
    $stat = $dbConn->prepare("$query");
    $stat->execute();
    header("Location: ./viewdatadisplay.php");

?>