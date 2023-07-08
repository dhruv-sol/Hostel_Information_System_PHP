<html>
    <head>
        <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel = "stylesheet">
        <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
        </script>
    </head>
    <body>
        <h2 align="center"> Update Form </h2>
        
        <div class = "container mt-2">
            <form action="update.php" method="post">

            <?php

            $id = $_POST['id'];
            $id = base64_decode($id);
            $id = explode('$',$id);
            $id = bindec(hex2bin($id[0])) - 2000;
        
            $dbConn = new PDO("mysql:host=localhost;dbname=php_hostel","root","");
            $query = "select*from tblinfo where id=$id";
            $stat = $dbConn->prepare("$query");
            $stat->execute();
            $result = $stat->fetchAll();
            $r = $result[0];
            $dbConn = null;  
            ?>

            <div class = "my-2"> 

                <label for = "uname"> Student Name: </label>
                <input type="text" class="form-control" id="uname" name="nm" placeholder="Enter any name" value=<?php echo $r['name']; ?>>
                <input type="hidden" name="id" value=<?php echo $r['id']; ?>>
                
                <label for = "rol"> Roll No: </label>
                <input type="text" class="form-control" id="rol" name="rl" placeholder="Enter your roll no" value=<?php echo $r['rollno']; ?>>
                
                <label for = "add"> Address: </label>
                <input type="text" class="form-control" id="add" name="ad" placeholder="Enter your address" value=<?php echo $r['address']; ?>> 
                
                <label for = "rom"> Room no: </label>
                <input type="text" class="form-control" id="rom" name="rn" placeholder="Enter your Room no" value=<?php echo $r['roomno']?>> 

                
                <label for = "gd"> Current: </label>
                <div class="form-check">
                <?php if($r['current']== "Present") { ?>
                    <input type="radio" class="form-check-input" id="gd" name="current" value="Present" checked> Present
                    <br>
                    <input type="radio" class="form-check-input" id="gd" name="current" value="Absent" > Absent
                    <br>
                    <input type="radio" class="form-check-input" id="gd" name="current" value="On Holiday" > On Holiday
                    <?php } else if($r['current']=="Absent"){ ?>
                    <input type="radio" class="form-check-input" id="gd" name="current" value="Present" > Present
                    <br>
                    <input type="radio" class="form-check-input" id="gd" name="current" value="Absent" checked> Absent
                    <br>
                    <input type="radio" class="form-check-input" id="gd" name="current" value="On Holiday" > On Holiday
                    <?php } else {?>
                    <input type="radio" class="form-check-input" id="gd" name="current" value="Present" > Present
                    <br>
                    <input type="radio" class="form-check-input" id="gd" name="current" value="Absent" > Absent
                    <br>
                    <input type="radio" class="form-check-input" id="gd" name="current" value="On Holiday" checked> On Holiday
                    <?php } ?>   
                </div>

                <div class="dropdown">  
                <label for = "department"> Department :  </label>
                    <select class="btn btn-secondary dropdown-toggle" name="department" value="department">

                    <?php if($r['department'] == "CMPICA") { ?> 
                         <option selected> CMPICA </option>
                         <option> DEPSTER </option>
                         <option> IIIM </option>
                         <option> RPCP </option>

                         <?php } else if($r['department'] == "DEPSTER") { ?> 
                         <option> CMPICA </option>
                         <option selected> DEPSTER </option>
                         <option> IIIM </option>
                         <option> RPCP </option>
                    
                         <?php } else if($r['department'] == "IIIM") { ?> 
                         <option> CMPICA </option>
                         <option> DEPSTER </option>
                         <option selected> IIIM </option>
                         <option> RPCP </option>
                    
                         <?php } else { ?> 
                         <option> CMPICA </option>
                         <option> DEPSTER </option>
                         <option> IIIM </option>
                         <option selected> RPCP </option>
                         <?php } ?>

                    </select>
                </div>
                <br>


                <div class="dropdown">  
                <label for = "course"> Course :  </label>
                 <select class="btn btn-secondary dropdown-toggle" name="course" value="course">

                    <?php if($r['course'] == "BCA") { ?> 
                            <option selected> BCA </option>
                            <option> BSc(IT) </option>
                            <option> MCA </option>
                            <option> MSc(IT) </option>
                    
                    <?php } else if($r['course'] == "BSc(IT)") { ?>
                            <option> BCA </option>
                            <option selected> BSc(IT) </option>
                            <option> MCA </option>
                            <option> MSc(IT) </option>

                    <?php } else if($r['course'] == "MCA") { ?>
                            <option> BCA </option>
                            <option> BSc(IT) </option>
                            <option selected> MCA </option>
                            <option> MSc(IT) </option>

                    <?php } else { ?>
                            <option> BCA </option>
                            <option> BSc(IT) </option>
                            <option> MCA </option>
                            <option selected> MSc(IT) </option>
                    <?php } ?>

                 </select>
                </div>

                <label for="cmp"> Complaint: </label>
                <textarea class="form-control" id="cmp" rows="7" cols="50" name="complaint"  placeholder="Write here..."><?php echo $r['complaint']; ?>
                </textarea>

                <label for = "fup"> College ID Card : </label>
                <input type="file" class="form-control" id="fup" name="fup" accept="image/*" multiple>
                <br><br>

                <div align="center">
                 <input type="submit"  class="btn btn-outline-primary" name="btnsubmit" value="Update"> 
                </div>
        </div>
        </form>
    </div>
    </body>
</html>