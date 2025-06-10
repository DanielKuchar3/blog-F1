<?php


if(isset($_POST["submit"]))
{
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    
    include "../classes/database.php";
    include "../classes/signup.classes.php";
    include "../classes/signupcontrol.classes.php";
    $signup = new SignupContr($username, $email, $pwd);

    
    $signup->signupUser();
   
    header("location: ../blog-F1-main/logout.php?error=none");
}

