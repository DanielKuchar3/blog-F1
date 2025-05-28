<?php
session_start();
require_once("../classes/database.php");
require_once("../classes/comment.php");

if (!isset($_SESSION['id'])) {
    header("Location: profile.php");
    exit();
}

$db = (new Database())->getConnection();
$commentObj = new Comment($db);

$comment_id = $_GET['id'] ?? null;
$post_id = $_GET['post_id'] ?? null;

if (!$comment_id || !$post_id) {
    die("Neplatné ID komentára alebo článku.");
}

$comment = $commentObj->getCommentById($comment_id);

if (!$comment) {
    die("Komentár neexistuje.");
}

// Kontrola oprávnení: admin môže všetko, bežný používateľ len svoje komentáre
if ($_SESSION['is_admin'] != 1 && $comment['user_id'] != $_SESSION['id']) {
    die("Nemáte oprávnenie vymazať tento komentár.");
}

if ($commentObj->deleteComment($comment_id)) {
    header("Location: blog_post.php?id=" . $post_id);
    exit();
} else {
    die("Nepodarilo sa vymazať komentár.");
}
