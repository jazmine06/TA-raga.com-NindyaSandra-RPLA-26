<?php
    session_start();
    $SESSION['admin@gmail.com']="";
    header("location:login.php");
    exit;
?>