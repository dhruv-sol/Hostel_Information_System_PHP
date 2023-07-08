<html>
    <head>
        <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel = "stylesheet">
        <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
        </script>
        </head>
    <body>
        <h2 align="center"> Hostel Information System </h2>
        <h3 align="center"> Registration Form </h3>

        <div class = "container mt-2">
            <form action="registration.php" method="post" style ="background-image: url('C:\xampp\htdocs\phppractical\Hostel_Information_System\img\regimg.jpg');">
            <div class = "my-2"> 

                <label for = "uname"> Student Name: </label>
                <input type="text" class="form-control" id="uname" name="nm" placeholder="Enter any name" required>
                
                <label for = "pwd"> Password: </label>
                <input type="password" class="form-control" id="pwd" name="ad" placeholder="Enter your Password" required>
                
                <label for = "mob"> Mobile no: </label>
                <input type="text" class="form-control" id="mob" name="mo" placeholder="Enter your mobile number" required> 
                
                <label for = "eml"> Email: </label>
                <input type="text" class="form-control" id="eml" name="em" placeholder="Enter your email" required>

                <!-- <label for = "rmn"> Room No: </label>
                <input type="text" class="form-control" id="rmn" name="rm" placeholder="Enter your Room no"> -->
                <br><br>
                <div align="center">
                 <input type="submit"  class="btn btn-outline-danger" name="btnsubmit" value="Register"> 
                </div>
        </div>
        </form>
        </div>
    </div>
    </body>
</html>