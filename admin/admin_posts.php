<?php
session_start();
if (empty($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
    header("Location: profile.php");
    exit();
}

include "../blog-F1-main/partials/header.php";
include "../classes/database.php";
include "../classes/post.php";

$postObj = new Post();
$posts = $postObj->getAllPosts();


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
    
    <h1>Správa článkov</h1>
<p><a href="admin_add_post.php">Pridať nový článok</a></p>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>ID</th><th>Názov</th><th>Dátum</th><th>Akcie</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($posts as $post): ?>
        <tr>
            <td><?= htmlspecialchars($post['id']) ?></td>
            <td><?= htmlspecialchars($post['title']) ?></td>
            <td><?= htmlspecialchars($post['datum_vytvorenia']) ?></td>
            <td>
                <a href="admin_edit_post.php?id=<?= $post['id'] ?>">Upraviť</a> |
                <a href="admin_delete_post.php?id=<?= $post['id'] ?>" onclick="return confirm('Naozaj vymazať?');">Vymazať</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
include "../blog-F1-main/partials/footer.php";
?> 
    
   
        
