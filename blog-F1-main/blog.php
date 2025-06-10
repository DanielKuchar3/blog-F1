<?php
include("partials/header.php");
require_once "../classes/post.php";
session_start();

$posts = (new Post())->getAllPosts();
?>
<body>
<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title">
        	<h1><a href="#">Newspaper Template</a></h1>
        </div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
              	<li><a href="index.php" >Home</a></li>
          		
          		
              	<li><a href="blog.php" class="selected">Blog</a></li>
              	<li><a href="contact.php" >Contact</a></li>

               <?php
if (isset($_SESSION["id"])) {
    if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === 1) {
        // ADMIN
        echo '<li><a href="../admin/admin_posts.php">' . htmlspecialchars($_SESSION["username"]) . '</a>
                <ul>
                    <li><a href="../includes/logout.inc.php">Log out</a></li>
                </ul>
              </li>';
    } else {
        // BEŽNÝ POUŽÍVATEĽ
        echo '<li><a href="account.php">' . htmlspecialchars($_SESSION["username"]) . '</a>
                <ul>
                    <li><a href="../includes/logout.inc.php">Log out</a></li>
                </ul>
              </li>';
    }
} else {
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

    <div id="content_top">
        <div id="page_title">News Blog Page</div>
        <div id="search_box">
            <form action="#" method="get">
                <input type="text" value="Search" name="q" id="searchfield" title="searchfield"
                       onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
            </form>
        </div>
        <div class="cleaner"></div>
    </div>

    <div id="templatemo_content">
        
        <div class="col_w600 float_l">
            <?php foreach ($posts as $post): ?>
                <div class="post_box">
                    <h2><?= htmlspecialchars($post['title']) ?></h2>
                    <img src="images/gallery/<?= htmlspecialchars($post['image']) ?>" alt="Image" style="max-width:200px;">
                    <p><?= htmlspecialchars($post['excerpt']) ?></p>
                    <p><a href="blog_post.php?id=<?= $post['id'] ?>" class="more float_r">Continue</a></p>
                </div>
            <?php endforeach; ?>
        </div>

        
        <div class="cleaner"></div>
    </div>

    <?php include("partials/footer.php"); ?>
</div>
</body>
