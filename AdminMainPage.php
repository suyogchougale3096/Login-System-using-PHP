<?php
    include('./AdminLogouthead.php');
?>

<div class="container-fluid operation-back pt-5 pb-5">
    <div class="d-flex flex-column pt-5 pb-5">
        <div class="d-flex flex-row justify-content-center mb-5">
            <a href="http://localhost/prj1/admin/studentregister.php" class = "btn btn-success operation"><span class = "pe-2">Student</span><i class="fa-solid fa-graduation-cap"></i></a>
        </div>
        <div class="d-flex flex-row justify-content-center">
            <a href="http://localhost/prj1/admin/teacherregister.php" class = "btn btn-success operation"><span class = "pe-2">Teacher</span><i class="fa-solid fa-person-chalkboard"></i></a>
        </div>
    </div>
</div>

<?php
    include('./foot.php');
?>