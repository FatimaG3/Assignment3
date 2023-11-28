<?php

    session_start();

    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        exit();
    }

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $dob = $_POST["dob"];
    $sex = $_POST["sex"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $file = file_get_contents(dirname(__FILE__) . "/../database/users.json");

    if(!$file){
        $_SESSION["error"] = true;
        $_SESSION["error_message"] = "Could Not Open Users File!";

        header("Location:../signup.php");
        exit();
    }

    $users_file = json_decode($file, true);
    
    $found = false;

    foreach ($users_file["users"] as $user) {
        $tmp_username = $user["username"];

        if ($tmp_username == $username){
            $_SESSION["error"] = true;
            $_SESSION["error_message"] = "Username Already in Use!";
            $_SESSION["tmp_firstname"] = $firstname;
            $_SESSION["tmp_lastname"] = $lastname;
            $_SESSION["tmp_dob"] = $dob;
            $_SESSION["tmp_sex"] = $sex;
            $_SESSION["tmp_username"] = $username;

            $found = true;
            header("Location:../signup.php");
            exit();
        }
    }

    if(!$found){

        if($password != $cpassword){
            $_SESSION["error"] = true;
            $_SESSION["error_message"] = "Passwords Do Not Match!";
            $_SESSION["tmp_firstname"] = $firstname;
            $_SESSION["tmp_lastname"] = $lastname;
            $_SESSION["tmp_dob"] = $dob;
            $_SESSION["tmp_sex"] = $sex;
            $_SESSION["tmp_username"] = $username;

            header("Location:../signup.php");
            exit();
        }

        $new_user = [
            "firstname"=> $firstname,
            "lastname"=> $lastname,
            "dob"=> $dob,
            "sex"=> $sex,
            "username"=> $username,
            "password"=> $password
        ];
        
        $users_file["users"][] = $new_user;
        
        $new_users_json = json_encode($users_file, JSON_PRETTY_PRINT);

        file_put_contents(dirname(__FILE__) ."/../database/users.json", $new_users_json);

        $_SESSION["valid_signup"] = true;
        $_SESSION["tmp_username"] = $username;
        $_SESSION["valid_signup_message"] = "Account Created!";

        header("Location:../login.php");
        exit();
    }

?>


