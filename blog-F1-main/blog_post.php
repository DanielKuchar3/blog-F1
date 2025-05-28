<?php
session_start();

include("partials/header.php");
require_once("../classes/database.php");
require_once("../classes/post.php");
require_once("../classes/comment.php");

$db = (new Database())->getConnection();
$postObj = new Post($db);
$commentObj = new Comment($db);

if (!isset($_GET['id'])) {
    die("Invalid post ID");
}

$post_id = $_GET['id'];
$post = $postObj->getPostById($post_id);
$comments = $commentObj->getCommentsByPostId($post_id);

$error = '';
$success = '';

// Spracovanie pridania komentára
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SESSION['id'])) {
        $error = "Pre pridanie komentára sa musíte prihlásiť.";
    } else {
        $comment_text = trim($_POST['comment'] ?? '');
        if ($comment_text === '') {
            $error = "Komentár nemôže byť prázdny.";
        } else {
            $user_id = $_SESSION['id'];
            if ($commentObj->addComment($post_id, $user_id, $comment_text)) {
                // Po úspechu presmeruj, aby sa predišlo opakovanému submitu
                header("Location: blog_post.php?id=" . $post_id);
                exit();
            } else {
                $error = "Nepodarilo sa pridať komentár, skúste to znova.";
            }
        }
    }
}
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
          <br>          
<body>
 
    <div id="templatemo_content">
        <div class="post_box">
            <h2><?= htmlspecialchars($post['title']) ?></h2>
            <img src="<?= htmlspecialchars($post['image']) ?>" alt="Image" style="max-width:400px;">
            <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>

            <div id="comment_section">
                <h3>Komentáre</h3>
                <ol class="comments first_level">
<?php foreach ($comments as $comment): ?>
    <li>
        <div class="comment_box commentbox1">
            <div class="gravatar">
                <img src="images/avator.jpg" alt="author" />
            </div>
            <div class="comment_text">
                <div class="comment_author">
                    <?= htmlspecialchars($comment['username']) ?>
                    <span class="date"><?= date("F d, Y", strtotime($comment['datum_vytvorenia'])) ?></span>
                    <span class="time"><?= date("H:i", strtotime($comment['datum_vytvorenia'])) ?></span>
                </div>
                <p><?= htmlspecialchars($comment['comment']) ?></p>

                <!-- Tu vlož ten kód na zobrazenie odkazov upraviť a vymazať -->
                <?php if (isset($_SESSION['id']) && ($_SESSION['id'] == $comment['user_id'] || $_SESSION['is_admin'] == 1)): ?>
                    <div class="comment_actions">
                        <a href="edit_comment.php?id=<?= $comment['id'] ?>&post_id=<?= $post_id ?>">Upraviť</a> |
                        <a href="delete_comment.php?id=<?= $comment['id'] ?>&post_id=<?= $post_id ?>" onclick="return confirm('Naozaj chcete vymazať tento komentár?');">Vymazať</a>
                    </div>
                <?php endif; ?>

            </div>
            <div class="cleaner"></div>
        </div>
    </li>
<?php endforeach; ?>
</ol>
            </div>

            <div class="cleaner h20"></div>

            <div id="comment_form">
                <h3>Nechajte svoj komentár</h3>
                <?php if ($error): ?>
                    <p style="color:red;"><?= htmlspecialchars($error) ?></p>
                <?php endif; ?>

                <?php if (isset($_SESSION['id'])): ?>
                    <form action="#" method="post">
                        <div class="form_row">
                            <label>Komentár:</label><br />
                            <textarea name="comment" rows="4" cols="50" required></textarea>
                        </div>
                        <input type="submit" name="Submit" value="Odoslať" class="submit_btn" />
                    </form>
                <?php else: ?>
                    <p>Pre pridanie komentára sa prosím <a href="profile.php">prihláste</a>.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php include("partials/footer.php"); ?>
