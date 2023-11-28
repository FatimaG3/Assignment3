<?php

    session_start();

    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        exit();
    }

    $username = $_POST["username"];
    $password = $_POST["password"];

    $file = file_get_contents(dirname(__FILE__) . "/../database/users.json");

    if(!$file){
        $_SESSION["error"] = true;
        $_SESSION["error_message"] = "Could Not Open Users File!";
        header("Location:../login.php");
        exit();
    }

    $users_file = json_decode($file, true);
    
    $found = false;

    foreach ($users_file["users"] as $user) {
        $tmp_username = $user["username"];
        $tmp_password = $user["password"];
        $tmp_fullname = $user["firstname"] ." ". $user["lastname"];

        if ($tmp_username == $username && $tmp_password == $password){
            $_SESSION["logged_in"] = true;
            $_SESSION["username"] = $username;
            $_SESSION["fullname"] = $tmp_fullname;

            $found = true;
            header("Location:../index.php");
            exit();
        }
    }

    if(!$found){
        $_SESSION["error"] = true;
        $_SESSION["tmp_username"] = $username;
        $_SESSION["error_message"] = "Invalid Username or Password!";
        header("Location:../login.php");
        exit();
    }

?>


