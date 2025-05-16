<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    try {
        require_once "../includes/dbh.inc.php";

        $query = "INSERT INTO messages (name,email,message) VALUES
        (?,?, ?);";
        
        $stnt = $pdo->prepare($query);
        
        $stnt->execute([$username, $email, $message]);

        $pdo = null;
        $stnt = null;

        header("Location: ../blog-F1-main/index.php");
        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else{
    header("Location: ../blog-F1-main/index.php");
}