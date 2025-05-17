<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    try {
        require_once "../includes/dbh.inc.php";

        $query = "INSERT INTO messages (username,email,message) VALUES
        (:username, :email, :message);";
        
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username",$username);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":message",$message);
        
        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../blog-F1-main/thankyou.php");
        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else{
    header("Location: ../blog-F1-main/index.php");
}