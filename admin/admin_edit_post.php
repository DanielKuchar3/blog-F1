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
    echo "Chýba ID článku.";
    exit();
}

$db = new Database();
$postObj = new Post($db);
$post = $postObj->getPostById($_GET['id']);

if (!$post) {
    echo "Článok neexistuje.";
    exit();
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $title = $_POST['title'] ?? '';
    $excerpt = $_POST['excerpt'] ?? '';
    $content = $_POST['content'] ?? '';
    $imagePath = $post['image']; // predvolený obrázok

    // spracovanie obrázka
    if (!empty($_FILES['image']['name'])) {
        $targetDir = "../uploads/";
        $imagePath = basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $targetDir . $imagePath);
    }

    if (!empty($title) && !empty($excerpt) && !empty($content)) {
        $postObj->updatePost($id, $title, $excerpt, $content, $imagePath);
        header("Location: admin_posts.php");
        exit();
    } else {
        $error = "Vyplňte všetky polia.";
    }
}
?>
<link href="../blog-F1-main/templatemo_style.css" rel="stylesheet" type="text/css" />
<h1>Upraviť článok</h1>

<?php if ($error) echo "<p style='color:red;'>$error</p>"; ?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= htmlspecialchars($post['id']) ?>">

    <label>Nadpis:</label><br>
    <input type="text" name="title" value="<?= htmlspecialchars($post['title']) ?>" required><br><br>

    <label>Krátky úvod:</label><br>
    <textarea name="excerpt" rows="4" cols="60" required><?= htmlspecialchars($post['excerpt']) ?></textarea><br><br>

    <label>Obsah (dlhý text):</label><br>
    <textarea name="content" rows="10" cols="60" required><?= htmlspecialchars($post['content']) ?></textarea><br><br>

    <?php if (!empty($post['image'])): ?>
        <label>Aktuálny obrázok:</label><br>
        <img src="../uploads/<?= htmlspecialchars($post['image']) ?>" alt="Obrázok" width="200"><br><br>
    <?php endif; ?>

    <label>Nový obrázok (voliteľné):</label><br>
    <input type="file" name="image"><br><br>

    <button type="submit">Uložiť zmeny</button>
</form>

<p><a href="admin_posts.php">Späť na správu článkov</a></p>

<?php include "../blog-F1-main/partials/footer.php"; ?>
