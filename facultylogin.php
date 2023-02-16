<?php
    include('./mainloginhead.php');
?>

<?php
    include('./connection.php');
    session_start();
    if(isset($_SESSION['username'])){
        echo "<script>";
        echo 'window.location.assign("http://localhost/prj1/facultypage.php")';
        echo "</script>";
    }
?>

<div class="container-fluid login">
    <div class="row">
        <div class="offset-md-3 col-md-6 mt-5 mb-5">
            <div class="login-container mt-4 mb-4 pe-5 pt-5 pb-5 ps-5">
                <div class="fs-3 text-center mb-3">Faculty Login Form</div>
                <?php
                    if(isset($_POST['login'])){
                        include('./connection.php');
                        $fusername = mysqli_real_escape_string($conn,$_POST['fusername']);
                        $fpassword1 = mysqli_real_escape_string($conn,$_POST['fpassword1']);

                        $sql = "SELECT username FROM faculty WHERE username = '{$fusername}' AND password1 = '{$fpassword1}'";
                        $result = mysqli_query($conn,$sql) or die("Query Failed.");

                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                session_start();
                                $_SESSION['username'] = $row['username'];
                                echo "<script>";
                                echo 'window.location.assign("http://localhost/prj1/facultypage.php")';
                                echo "</script>";
                            }
                        }
                        else{
                            echo "<div class = 'alert alert-danger'>Username and password did not match.</div>";
                        }
                    }
                ?>
                <form class = "text-center" action="#" method="POST" autocomplete="off">
                    <input type = "text" class = "form-control" placeholder = "Username" name = "fusername" required>
                    <br>
                    <input type = "password" class = "form-control" placeholder = "Password" name = "fpassword1" required>
                    <br>
                    <input class="btn btn-success me-2" type = "submit" value="Login" name = "login"/>
                    <input class="btn btn-danger me-2" type = "reset" value="Reset"/>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    include('./foot.php');
?>