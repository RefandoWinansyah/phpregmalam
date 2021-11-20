<?php
    session_start();
    $_SESSION['loguser']="";
    header("location:datalogin.php");
    exit;
    ?>