<?php

$database = "mysql:host=localhost;dbname=f1blog";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($database, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
