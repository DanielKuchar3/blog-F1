<?php
   


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["author"]) ;
    $email = htmlspecialchars($_POST["email"]) ;
    $message = htmlspecialchars($_POST["text"]) ;

   
    echo $name;
    echo"<br>";
    echo $email;
    echo"<br>";
    echo $message;


}


?>