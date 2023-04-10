<?php
    include('./adminlogouthead.php');
?>

<div class="container-fluid bg-dark text-light">
    <?php 
        if(isset($_POST['register'])){
            include('../connection.php');
            $username = mysqli_real_escape_string($conn,$_POST['prnno']);
            $fname = mysqli_real_escape_string($conn,$_POST['firstname']);
            $mname = mysqli_real_escape_string($conn,$_POST['middlename']);
            $lname = mysqli_real_escape_string($conn,$_POST['surname']);
            $smobilenumber = mysqli_real_escape_string($conn,$_POST['smobilenumber']);
            $pmobilenumber = mysqli_real_escape_string($conn,$_POST['pmobilenumber']);
            $bdate = mysqli_real_escape_string($conn,$_POST['bdate']);
            $course = mysqli_real_escape_string($conn,$_POST['course']);
            $year1 = mysqli_real_escape_string($conn,$_POST['year']);
            $sem = mysqli_real_escape_string($conn,$_POST['sem']);

            if(!empty($course) and !empty($year1) and !empty($sem) and !empty($username) and !empty($fname) and !empty($mname) and !empty($lname) and !empty($smobilenumber) and !empty($pmobilenumber) and !empty($bdate)){
                $sql = "INSERT INTO studentlogin(username,fname,mname,lname,smobile,pmobile,bdate,course,year1,semester) VALUES('{$username}','{$fname}','{$mname}','{$lname}','{$smobilenumber}','{$pmobilenumber}','{$bdate}','{$course}','{$year1}','{$sem}')";
                if (mysqli_query($conn, $sql)) {
                    echo "<br />";
                    echo "<div class = 'alert alert-success'>New record created successfully</div>";
                    } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
            }
            else{
                echo "<br />";
                echo "<div class = 'alert alert-danger'>There are some field are not filled!!!!</div>";
            }
        }
    ?>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" autocomplete="off" method="post" class="pt-5 pb-5 needs-validation was-validated" novalidate = "">
        <div class="row">
            <div class="col-md-6 ps-sm-5">
                <div class="fs-3 mb-3">Student Personal Details</div>
                <div>
                    <label for="" class="form-label">First Name</label>
                    <div class="col-sm-10 mb-3">
                        <input type="text" name="firstname" id="firstname" class = "form-control" required = "Name">
                    </div>

                    <label for="" class="form-label">Middle Name</label>
                    <div class="col-sm-10 mb-3">
                        <input type="text" name="middlename" id="middlename" class = "form-control" required>
                    </div>

                    <label for="" class="form-label">Surname</label>
                    <div class="col-sm-10 mb-3">
                        <input type="text" name="surname" id="surname" class = "form-control" required>
                    </div>

                    <label for="" class="form-label">Student Mobile Number</label>
                    <div class="col-sm-10 mb-3">
                        <input type="text" name="smobilenumber" id="smobilenumber" class = "form-control" required>
                    </div>

                    <label for="" class="form-label">Parents Mobile Number</label>
                    <div class="col-sm-10 mb-3">
                        <input type="text" name="pmobilenumber" id="pmobilenumber" class = "form-control" required>
                    </div>

                    <label for="" class="form-label">Birth date</label>
                    <div class="col-sm-10 mb-3">
                        <input type="date" name="bdate" id="bdate" class = "form-control" required>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ps-sm-5">
                <div class="fs-3 mb-3">Educational Details</div>
                <div>
                    <label for="" class="form-label">PRN Number</label>
                    <div class="col-sm-10 mb-3">
                        <input type="text" name="prnno" id="prnno" class = "form-control" required>
                    </div>

                    <label for="" class="form-label">Course</label>
                    <div class="col-sm-10 mb-3">
                        <select class="form-select" aria-label="Default select example" name="course" required>
                            <option value="">Open this select menu</option>
                            <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                            <option value="Artificial Intelligence">Artificial Intelligence</option>
                            <option value="Artificial Intelligence & Data Science">Artificial Intelligence & Data Science</option>
                        </select>
                    </div>

                    <label for="" class="form-label">Year</label>
                    <div class="col-sm-10 mb-3">
                        <select class="form-select" aria-label="Default select example" name = "year" required>
                            <option value="">Open this select menu</option>
                            <option value="First Year">First Year</option>
                            <option value="Second Year">Second Year</option>
                            <option value="Third Year">Third Year</option>
                            <option value="Final Year">Final Year</option>
                        </select>
                    </div>

                    <label for="" class="form-label">Semester</label>
                    <div class="col-sm-10 mb-3">
                        <select class="form-select" aria-label="Default select example" name="sem" required>
                            <option value="">Open this select menu</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class = "text-center">
                <input type = "submit" value = "Submit" class="btn btn-success me-2" name = 'register'/>
                <input type = "reset" value = "Reset" class="btn btn-danger"/>
            </div>
        </div>
        
    </form>
</div>

<?php
    include('../foot.php');
?>