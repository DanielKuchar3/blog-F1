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
              	<li><a href="index.php">Home</a></li>
              	<li><a href="blog.php" class="selected">Blog</a></li>
              	<li><a href="contact.php">Contact</a></li>

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
    
    <div id="content_top">
        <div id="page_title">News Blog Page</div>
        <div id="search_box">
            <form action="#" method="get">
                <input type="text" value="Search" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
            </form>
        </div>
        <div class="cleaner"></div>
    </div>  
    
    <div id="templatemo_content">
    	<?php foreach ($posts as $post): ?>
        <div class="post_box">
            <h2><?= htmlspecialchars($post['title']) ?></h2>
            <img src="<?= $post['image'] ?>" alt="Image" style="max-width:200px;">
            <p><?= htmlspecialchars($post['excerpt']) ?></p>
            <p><a href="blog_post.php?id=<?= $post['id'] ?>">Continue</a></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
          	<div class="templatemo_paging">
            	<ul>
                	<li><a href="#">Previous</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">Next</a></li>
				</ul>
                <div class="cleaner"></div>
    	 	</div>    

    </div> <!-- end of content -->
    <?php
    include("partials/footer.php")

     ?>