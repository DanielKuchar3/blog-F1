<?php
include("partials/header.php");
session_start();

// kontrola prihlásenia
if (!isset($_SESSION["id"])) {
    header("Location: index.php");
    exit();
}

require_once '../classes/database.php';
require_once '../classes/comment.php';

$db = (new Database())->getConnection();
$commentObj = new Comment($db);

// Získaj komentáre prihláseného používateľa
$userComments = $commentObj->getCommentsByUserId($_SESSION["id"]);
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
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="profile.php" class="selected"><?php echo $_SESSION["username"]; ?></a>
                    <ul>
                        <li><a href="../includes/logout.inc.php">Log out</a></li>
                    </ul>
                </li>
            </ul>
            <br style="clear: left" />
        </div>
    </div>

    <div id="content_top">
        <div id="page_title">Hello <?php echo $_SESSION["username"]; ?></div>
        <div id="search_box">
            <form action="#" method="get">
                <input type="text" value="Search" name="q" size="10" id="searchfield" title="searchfield"
                       onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
            </form>
        </div>
        <div class="cleaner"></div>
    </div>

    <div class="content_section">
        <h2>Tvoje komentáre</h2>

        <?php if (!empty($userComments)): ?>
            <ul>
                <?php foreach ($userComments as $comment): ?>
                    <li style="margin-bottom: 20px;">
                        <strong>Blog:</strong>
                        <a href="blog_post.php?id=<?= $comment['post_id'] ?>">
                            <?= htmlspecialchars($comment['post_title']) ?>
                        </a><br>
                        <strong>Komentár:</strong><br>
                        <?= nl2br(htmlspecialchars($comment['comment'])) ?><br>
                        <small><?= $comment['datum_vytvorenia'] ?></small><br>
                        
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Nemáš žiadne komentáre.</p>
        <?php endif; ?>
    </div>

<?php include("partials/footer.php"); ?>
