<?php
    if(isset($_POST['delete']))
    {
    session_start();
    $userid = $_SESSION['userid'];
    $id= $_POST['id'];
    $id = base64_decode($id);
    $id = explode('$',$id);
    $id = bindec(hex2bin($id[0])) - 2000;

    $dbConn= new PDO("mysql:host=localhost;dbname=php_hostel","root","");
    $query= "update tblinfo set status=0 where id=$id";
    $stat= $dbConn->prepare($query);
    $stat->execute();

    header("Location: ./viewdatadisplay.php");
    }
    else
    header("Location: ./viewdatadisplay.php");
?>