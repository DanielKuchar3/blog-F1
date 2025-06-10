<?php



if(isset($_POST["submit"]))
{
    
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    
    include "../classes/database.php";
    include "../classes/login.classes.php";
    include "../classes/logincontrol.classes.php";
   
    $login = new LoginContr($username, $pwd);
    $login->loginUser();
    

        if (!empty($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {
            header("Location: ../admin/admin_posts.php");
            exit();
        } else {
            header("Location: ../blog-F1-main/account.php");
            exit();
        }
    }


