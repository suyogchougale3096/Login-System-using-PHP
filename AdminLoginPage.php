<?php
    include('./connection.php');
    session_start();
    if(isset($_SESSION['username'])){
        echo "<script>";
        echo 'window.location.assign("http://localhost/prj1/AdminMainPage.php")';
        echo "</script>";
    }
?>
<?php
    include('./AdminLoginHead.php');
?>
<div class="container-fluid login">
    <div class="row">
        <div class="offset-md-3 col-md-6 mt-5 mb-5">
            <div class="login-container mt-4 mb-4 pe-5 pt-5 pb-5 ps-5">
                <?php
                    if(isset($_POST['login'])){
                        include('./connection.php');
                        $username = mysqli_real_escape_string($conn,$_POST['username']);
                        $password1 = mysqli_real_escape_string($conn,$_POST['password1']);

                        $sql = "SELECT username FROM administrator WHERE username = '{$username}' AND password1 = '{$password1}'";
                        $result = mysqli_query($conn,$sql);

                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                session_start();
                                $_SESSION['username'] = $row['username'];
                                echo "<script>";
                                echo 'window.location.assign("http://localhost/prj1/AdminMainPage.php")';
                                echo "</script>";
                            }
                        }
                        else{
                            echo "<div class = 'alert alert-danger'>Username and Password did not match.</div>";
                        }
                    }
                ?>
                <div class="fs-3 text-center mb-3">Administrator Login Form</div>
                <form class = "text-center" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
                    <input type = "text" class = "form-control" placeholder = "Username" name = "username" required>
                    <br>
                    <input type = "password" class = "form-control" placeholder = "Password" name = "password1" required>
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