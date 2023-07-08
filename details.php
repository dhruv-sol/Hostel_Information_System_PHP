<?php
   

    if(isset($_POST['btnsubmit']))
    {
        
        $extension = strtolower(pathinfo($_FILES['fup']['name'],PATHINFO_EXTENSION));

        if($extension == "jpg"){
            $filename = time() * rand(1,1000) . "." . $extension;
            $filepath = "./upload/" . $filename;
            if(move_uploaded_file($_FILES['fup']['tmp_name'], $filepath)){

                        session_start();
                        $userid = $_SESSION['userid'];
                        $name = $_POST['nm'];
                        $rollno = $_POST['rl'];
                        $address = $_POST['ad'];
                        $roomno = $_POST['rn'];
                        $current = $_POST['current'];
                        $department = $_POST['department'];
                        $course = $_POST['course'];
                        $complaint = $_POST['complaint'];
                
                        //Database Connection
                        $dbConn = mysqli_connect("localhost","root","","php_hostel");
                        $query = "insert into tblinfo values(NULL,$userid,'$name','$rollno','$address',$roomno,'$current','$department','$course','$complaint','$filename',NULL,1)";
                        mysqli_query($dbConn,$query);
                        mysqli_close($dbConn);

                echo    "<script type='text/javascript'>
                            alert ('Details Inserted Successfully !!!');
                            window.location ='viewdatadisplay.php';
                        </script>";

            }else{
                echo    "<script type='text/javascript'>
                            alert ('Error Ocurred in uploaded file !!!');
                            window.location ='viewdetails.php';
                        </script>";
            }
            
        }
        else{
            echo    "<script type='text/javascript'>
                            alert ('Only Jpg file is allowed !!!');
                            window.location ='viewdetails.php';
                    </script>";
    }

}else
        header("Location: ./viewdetails.php");

?>