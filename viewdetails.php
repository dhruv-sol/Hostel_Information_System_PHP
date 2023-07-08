<html>
    <head>
        <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel = "stylesheet">
        <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
        </script>
    </head>
    <body>
        <?php 
            session_start();
            $username = $_SESSION['username'];
        ?>
        <h2 align="center"> Student Details </h2>
        <h3 align="center"> Welcome,<?php echo $username; ?></h2>
        <form action="viewdatadisplay.php" method="post">
            <div align="right">
             <input type="submit" class="btn btn-outline-primary" name="submitview" value="All Records"> 
            </div>
        </form>

        <div class = "container mt-2">
            <form action="details.php" method="post" enctype="multipart/form-data">
            <div class = "my-2"> 

                <label for = "uname"> Student Name: </label>
                <input type="text" class="form-control" id="uname" name="nm" placeholder="Enter your Name">
                
                <label for = "rol"> Roll No: </label>
                <input type="text" class="form-control" id="rol" name="rl" placeholder="Enter your roll no">
                
                <label for = "add"> Address: </label>
                <input type="text" class="form-control" id="add" name="ad" placeholder="Enter your address"> 
                
                <label for = "rom"> Room no: </label>
                <input type="text" class="form-control" id="rom" name="rn" placeholder="Enter your Room no"> 
                
                <label for = "gd"> Current: </label>
                <div class="form-check">
                 <input type="radio" class="form-check-input" id="gd" name="current" value="Present" checked> Present
                 <br>
                 <input type="radio" class="form-check-input" id="gd" name="current" value="Absent" > Absent
                 <br>
                 <input type="radio" class="form-check-input" id="gd" name="current" value="On Holiday" > On Holiday
                </div>
               
                <div class="dropdown">  
                <label for = "department"> Department :  </label>
                    <select class="btn btn-secondary dropdown-toggle" name="department" value="department"> 
                         <option> CMPICA </option>
                         <option> DEPSTER </option>
                         <option> IIIM </option>
                         <option> RPCP </option>
                    </select>
                </div>
                <br>

                <div class="dropdown">  
                <label for = "course"> Course :  </label>
                    <select class="btn btn-secondary dropdown-toggle" name="course" value="course"> 
                         <option> BCA </option>
                         <option> BSc(IT) </option>
                         <option> MCA </option>
                         <option> MSc(IT) </option>
                    </select>
                </div>

                <label for="cmp"> Complaint: </label>
                <textarea class="form-control" id="cmp" rows="7" cols="50" name="complaint" placeholder="Write here...">
                </textarea>
                <label for = "fup"> College ID Card : </label>
                <input type="file" class="form-control" id="fup" name="fup" accept="image/*" multiple>
                <!-- <img src="<?php echo $filepath ?>" alt="image not displayed" width="100" height="200"> -->
                
                <br>
                <div align="center">
                 <input type="submit"  class="btn btn-outline-danger" name="btnsubmit" value="Submit"> 
                </div>
        </div>
        </form>
    </div>
    </body>
</html>