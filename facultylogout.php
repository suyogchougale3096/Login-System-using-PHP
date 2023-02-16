<?php
    include('./connection.php');
    session_start();
    session_unset();
    session_destroy();
    echo "<script>";
    echo 'window.location.assign("http://localhost/prj1/facultylogin.php")';
    echo "</script>";
?>