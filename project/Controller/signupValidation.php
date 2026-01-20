<?php
include "../Model/databaseConnection.php";

$path = __DIR__."/../Model/databaseConnection.php";
if(!file_exists($path)){
    die("Database File not found");
}

error_reporting(E_ALL);
ini_set("display_error", 1);

session_start();
$username = "";
$email = "";
$pass = "";
$role = "";

$username = $_POST["username"];
$email = $_POST["email"];
$pass = $_POST["password"];
$role = $_POST["role"];


if($role == "user"){Header("Location: ..\View\userDashboard.php");}
else if($role == "admin"){Header("Location: ..\View\adminDashboard.php");}

$errors = [];
$previousValues = [];
if(!$email){
$errors["email"] = "Email field is required";
}
if(!$pass){
    $errors["password"] = "Password field is required";
}
if(count($errors) > 0){
    $_SESSION["errors"] = $errors;
    if(!$email){
        $_SESSION["emailError"] = $errors["email"]; 
    }else{
        unset($_SESSION["emailError"]); 
    }

    if(!$pass){
        $_SESSION["passwordError"] = $errors["password"];
    }else{
         unset($_SESSION["passwordError"]);
    }


    $previousValues["email"] = $email;
    $_SESSION["previousValues"] = $previousValues;

    Header("Location: ..\View\signup.php");

}else{
    unset($_SESSION['errors']);
    unset($_SESSION['previousValues']);
    unset($_SESSION["signupErr"]);


    $db = new DatabaseConnection();
    $connection = $db->openConnection();

    $check = $db->checkExistingUser($connection, "registration", $email);

    if ($check->num_rows > 0) {
        $_SESSION["signupErr"] = "Email already exists";
        header("Location: ../View/signup.php");
        exit();
    }

    $result = $db->signup($connection, "registration", $username, $email, $pass, $role);

    if($result){
       Header("../View/login.php");
    }else{
        $_SESSION["signupErr"] = "Sign up failed..";
        Header("../View/signup.php");
    }

    
}
?>
