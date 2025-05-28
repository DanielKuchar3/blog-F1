<?php
session_start();
if (empty($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
    header("Location: profile.php");
    exit();
}

include "../blog-F1-main/partials/header.php";
require_once "../classes/database.php";
require_once "../classes/post.php";

$db = (new Database())->getConnection();
$postObj = new Post($db);

$id = $_GET['edit'] ?? null;
$editing = false;

if ($id) {
    $editing = true;
    $postToEdit = $postObj->getPostById($id);
    if (!$postToEdit) {
        echo "<p style='color:red;'>Článok nebol nájdený.</p>";
        include "../blog-F1-main/partials/footer.php";
        exit();
    }
}

$title = $_POST['title'] ?? '';
$excerpt = $_POST['excerpt'] ?? '';
$content = $_POST['content'] ?? '';
$imagePath = '';

if (!empty($title) && !empty($excerpt) && !empty($content)) {
        if (!empty($_FILES['image']['name'])) {
            $targetDir = "../uploads/";
            $imagePath = basename($_FILES['image']['name']);
            move_uploaded_file($_FILES['image']['tmp_name'], $targetDir . $imagePath);
        }

        if ($postObj->addPost($title, $excerpt, $content, $imagePath)) {
            header("Location: admin_posts.php?msg=success");
            exit();
        } else {
            $error = "Chyba pri ukladaní článku.";
        }
    } else {
        $error = "Vyplňte všetky polia.";
}

?>

<link href="../blog-F1-main/templatemo_style.css" rel="stylesheet" type="text/css" />

<h1><?= $editing ? 'Upraviť článok' : 'Pridať nový článok' ?></h1>

<form  method="post" enctype="multipart/form-data">
    <label>Názov:<br>
        <input type="text" name="title" required>
    </label><br><br>
    
    <label>Krátky úvod:<br>
        <textarea name="excerpt" rows="3" cols="50" required></textarea>
    </label><br><br>
    
    <label>Obrázok:<br>
        <input type="file" name="image" accept="image/*" required>
    </label><br><br>
    
    <label>Dlhý text:<br>
        <textarea name="content" rows="10" cols="50" required></textarea>
    </label><br><br>
    
    <button type="submit">Pridať</button>
</form>


<p><a href="admin_posts.php">Späť na správu článkov</a></p>

<?php include "../blog-F1-main/partials/footer.php"; ?>
