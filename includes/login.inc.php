<?php

if(isset($_POST["submit"]))
{
    // Vyberame data
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    //signup class
    include "../classes/database.php";
    include "../classes/login.classes.php";
    include "../classes/logincontrol.classes.php";
    $login = new LoginContr($username, $pwd);

    //error handlers
    $login->loginUser();
    //navrat na front page
    header("location: ../blog-F1-main/account.php?error=none");
}

