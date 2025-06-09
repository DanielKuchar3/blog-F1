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
