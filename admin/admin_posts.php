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
<link href="../blog-F1-main/templatemo_style.css" rel="stylesheet" type="text/css" />

<body>


<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title">
        	<h1><a href="#">Newspaper Template</a></h1>
        </div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
              	<li><a href="index.php">Home</a></li>
          		
          		
              	<li><a href="blog.php">Blog</a></li>
              	<li><a href="contact.php" class="selected">Contact</a></li>
                <?php
                if (isset($_SESSION["id"]))
                    {
                ?>
                <li><a href="account.php"><?php echo $_SESSION["username"]; ?></a>
                    <ul>
                        <li><a href="../includes/logout.inc.php">Log out</a></li>
                        
                  </ul>
                </li>  
                <?php      
                    }
                    else
                    {
                ?>
                <li><a href="profile.php">Sign up/Log in</a>
                    <ul>
                        <li><a href="profile.php">Log in</a></li>
                        <li><a href="signup.php">Sign up</a></li>
                  </ul>
                </li>
                <?php
                    }
                ?>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    
    <h1>Správa článkov (Admin)</h1>
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
    
   
        
