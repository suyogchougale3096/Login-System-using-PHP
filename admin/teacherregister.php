<?php
    include('./adminlogouthead.php');
?>

<div class="container-fluid bg-dark text-light">
    <?php 
        if(isset($_POST['register'])){
            include('../connection.php');
            $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
            $middlename = mysqli_real_escape_string($conn,$_POST['middlename']);
            $surname = mysqli_real_escape_string($conn,$_POST['surname']);
            $tmobilenumber = mysqli_real_escape_string($conn,$_POST['tmobilenumber']);
            $bdate = mysqli_real_escape_string($conn,$_POST['bdate']);
            $course = mysqli_real_escape_string($conn,$_POST['course']);
            $year1 = mysqli_real_escape_string($conn,$_POST['year']);
            $semester = mysqli_real_escape_string($conn,$_POST['semester']);
            $subject = mysqli_real_escape_string($conn,$_POST['subject']);
        }
    ?>
    <form action="#" autocomplete="off" method="post" class="needs-validation was-validated pt-5 pb-5" novalidate>
        <div class="row">
            <div class="col-md-6 ps-sm-5">
                <div class="fs-3 mb-3">Teacher Personal Details</div>
                <div>
                    <label for="" class="form-label">First Name</label>
                    <div class="col-sm-10 mb-3">
                        <input type="text" name="firstname" id="firstname" class = "form-control" required>
                    </div>

                    <label for="" class="form-label">Middle Name</label>
                    <div class="col-sm-10 mb-3">
                        <input type="text" name="middlename" id="middlename" class = "form-control" required>
                    </div>

                    <label for="" class="form-label">Surname</label>
                    <div class="col-sm-10 mb-3">
                        <input type="text" name="surname" id="surname" class = "form-control" required>
                    </div>

                    <label for="" class="form-label">Teacher Mobile Number</label>
                    <div class="col-sm-10 mb-3">
                        <input type="text" name="tmobilenumber" id="tmobilenumber" class = "form-control" required>
                    </div>

                    <label for="" class="form-label">Birth date</label>
                    <div class="col-sm-10 mb-3">
                        <input type="date" name="bdate" id="bdate" class = "form-control" required>
                    </div>

                </div>
            </div>
            <div class="col-md-6 ps-sm-5">
                <div class="fs-3 mb-3">Details</div>
                <div>

                    <label for="" class="form-label">Teacher Id</label>
                    <div class="col-sm-10 mb-3">
                        <input type="text" name="teacherid" id="teacherid" class = "form-control" required>
                    </div>

                    <label for="" class="form-label">Course</label>
                    <div class="col-sm-10 mb-3">
                        <select class="form-select" aria-label="Default select example" name = "course"required>
                            <option value="">Open this select menu</option>
                            <option value="cs">Computer Science and Engineering</option>
                            <option value="ai">Artificial Intelligence</option>
                            <option value="aids">Artificial Intelligence & Data Science</option>
                        </select>
                    </div>

                    <label for="" class="form-label">Year</label>
                    <div class="col-sm-10 mb-3">
                        <select class="form-select" aria-label="Default select example" name = "year"required>
                            <option value="">Open this select menu</option>
                            <option value="First Year">First Year</option>
                            <option value="Second Year">Second Year</option>
                            <option value="Third Year">Third Year</option>
                            <option value="Final Year">Final Year</option>
                        </select>
                    </div>

                    <label for="" class="form-label">Semester</label>
                    <div class="col-sm-10 mb-3">
                        <select class="form-select" aria-label="Default select example" name="semester" required>
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

                    <label for="" class="form-label">Subject</label>
                    <div class="col-sm-10 mb-3">
                        <select class="form-select" aria-label="Default select example" name="subject" required>
                            <option value="">Open this select menu</option>
                            <option value="Theory of Computation">Theory of Computation</option>
                            <option value="Operating System">Operating System</option>
                            <option value="Java">Java</option>
                        </select>
                    </div>

                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class = "text-center">
                <input type = "submit" value = "Submit" class="btn btn-success me-2" name="register"/>
                <input type = "reset" value = "Reset" class="btn btn-danger"/>
            </div>
        </div>
        
    </form>
</div>

<?php
    include('../foot.php');
?>