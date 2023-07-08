<html>
    <head>
        <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel = "stylesheet">
        <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
        </script>
    </head>
    <body>
        <h2 align="center"> Hostel Information System </h2>
        <div class = "container mt-2">
            <form action="login.php" method="post">
            <div class = "my-2"> 

                <label for = "uname"> Student Name: </label>
                <input type="text" class="form-control" id="uname" name="nm" placeholder="Enter any name" required> 
                
                <label for = "pwd"> Password: </label>
                <input type="password" class="form-control" id="pwd" name="ad" placeholder="Enter your Password" required>

                <label> Captcha: <?php $val = rand(1000,9999); echo "<b>". $val ?></label>
                <input type="hidden" name="cp" value="<?php echo $val ?>">
                <input type="text" class="form-control" name="txtcp" placeholder="Enter Captcha" required>

                Already a User ? <a href="viewregistration.php"> Click here </a>

                <div align="center">
                 <input type="submit"  class="btn btn-outline-danger" name="btnsubmit" value="Login"> 
                </div>
        </div>
        </form>
    </div>
    </body>
</html>