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


if ($comment['user_id'] != $_SESSION['id']) {
    die("Nemáte oprávnenie upravovať tento komentár.");
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_comment = trim($_POST['comment'] ?? '');
    if ($new_comment === '') {
        $error = "Komentár nemôže byť prázdny.";
    } else {
        if ($commentObj->updateComment($comment_id, $new_comment)) {
            header("Location: blog_post.php?id=" . $post_id);
            exit();
        } else {
            $error = "Nepodarilo sa aktualizovať komentár.";
        }
    }
}
?>

<h2>Upraviť komentár</h2>

<?php if ($error): ?>
    <p style="color:red;"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<form method="post">
    <textarea name="comment" rows="5" cols="50" required><?= htmlspecialchars($comment['comment']) ?></textarea><br><br>
    <button type="submit">Uložiť zmeny</button>
</form>

<p><a href="blog_post.php?id=<?= $post_id ?>">Späť na článok</a></p>