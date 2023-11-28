<?php 
    session_start();
    
    if(!isset($_SESSION["logged_in"])) {
        header("Location: login.php");
        exit();
    }
    
    session_unset();
    session_destroy();

    header("Location: login.php");
?>
