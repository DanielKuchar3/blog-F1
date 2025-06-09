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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newspaper Template - About</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../blog-F1-main/templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="../blog-F1-main/ddsmoothmenu.css" />

<script type="text/javascript" src="../blog-F1-main/js/jquery.min.js"></script>
<script type="text/javascript" src="../blog-F1-main/js/ddsmoothmenu.js">


</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

</head>

<body>


<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title">
        	<h1><a href="#">Newspaper Template</a></h1>
        </div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
              	<li><a href="../blog-F1-main/index.php">Home</a></li>
          		
          		
              	<li><a href="../blog-F1-main/blog.php">Blog</a></li>
              	<li><a href="../blog-F1-main/contact.php" >Contact</a></li>
                <?php
                if (isset($_SESSION["id"]))
                    {
                ?>
                <li><a href="../admin/admin_post.php" class="selected"><?php echo $_SESSION["username"]; ?></a>
                    <ul>
                        <li><a href="../includes/logout.inc.php">Log out</a></li>
                        
                  </ul>
                </li>  
                <?php      
                    }
                    else
                    {
                ?>
                <li><a href="../blog-F1-main/profile.php">Sign up/Log in</a>
                    <ul>
                        <li><a href="../blog-F1-main/profile.php">Log in</a></li>
                        <li><a href="../blog-F1-main/signup.php">Sign up</a></li>
                  </ul>
                </li>
                <?php
                    }
                ?>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    
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
