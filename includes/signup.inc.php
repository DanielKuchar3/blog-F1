<?php


if(isset($_POST["submit"]))
{
    // Vyberame data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    //signup class
    include "../classes/database.php";
    include "../classes/signup.classes.php";
    include "../classes/signupcontrol.classes.php";
    $signup = new SignupContr($username, $email, $pwd);

    //error handlers
    $signup->signupUser();
    //navrat na front page
    header("location: ../blog-F1-main/logout.php?error=none");
}

