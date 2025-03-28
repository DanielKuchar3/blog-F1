<?php
   
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["author"]) ;
    $email = htmlspecialchars($_POST["email"]) ;
    $message = htmlspecialchars($_POST["text"]) ;

    if (empty($name)){
        exit();
        header("Location: ../index.php");

    }
 
    echo "Tvoje meno: $name";
    echo "<br>";
    echo "Tvoj email: $email";
    echo "<br>";
    echo "správa: $message";


    
}
else{
    header("Location: ../index.php");
}
?>

