<link href="../blog-F1-main/templatemo_style.css" rel="stylesheet" type="text/css" />

<?php
session_start();
if (empty($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
    header("Location: profile.php");
    exit();
}

include "../blog-F1-main/partials/header.php";
include "../classes/database.php";
include "../classes/post.php";

if (!isset($_GET['id'])) {
    header("Location: admin_posts.php");
    exit();
}

$id = $_GET['id'];

$postObj = new Post();
if ($postObj->deletePost($id)) {
    echo "Článok bol úspešne vymazaný.";
} else {
    echo "Vymazanie zlyhalo.";
}

header("Location: admin_posts.php");
exit();
