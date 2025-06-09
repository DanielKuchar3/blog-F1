<?php
include("partials/header.php");
session_start();
?>
<body>

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title">
        	<h1><a href="#">Newspaper Template</a></h1>
        </div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
              	<li><a href="index.php" class="selected">Home</a></li>
          		
          		
              	<li><a href="blog.php">Blog</a></li>
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
        <div id="page_title"> F1 NEWS</div>
        <div id="search_box">
            <form action="#" method="get">
                <input type="text" value="Search" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
            </form>
        </div>
        <div class="cleaner"></div>
    </div>  
    
    <div id="no_sidebar">
    	
    	<div class="col_3">
        	<h2>Free Template</h2>
            <p><em>Nulla sit amet arcu in nunc ornare feugiat. Donec sagittis scelerisque ligula.</em></p>
            <p>Newspaper is free website template for your personal or commercial websites. Credit goes to <a rel="nofollow" href="http://www.photovaco.com">Free Photos</a> for photos. Etiam magna metus, hendrerit non aliquam nec, tincidunt nec metus. Duis in felis quis est consequat consequat. Aenean augue purus, ultricies in blandit. Mauris vel ultrices nunc. </p>
            <a href="#" class="more">More</a>
        </div>
        <div class="col_3">
        	<h2>Web Design</h2>
            <p>Donec rutrum ligula nec lorem scelerisque eget blandit elit aliquam nunc. Etiam rutrum condi mentum arcu. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
            <ul class="templatemo_list">
            	<li>In elementum bibendum odio</li>
                <li>Nam sagittis dui pellentesque</li>
                <li>Lacus a suspendisse luctus</li>
                <li>Turpis vel convallis faucibus</li>
                <li>Praesent fringilla neque lorem </li>
			</ul>
            <a href="#" class="more">More</a>	
        </div>
        <div class="col_3 rmc">
        	<h2>Portfolio</h2>
            <img src="images/templatemo_image_05.jpg" alt="Image 05" class="image_frame" />
            <p><em>Proin mauris justo, ornare sed consequat ac, laoreet porta rhoncus quis arcu.</em></p>
            <a href="#" class="more">More</a>	
        </div>
        
        <div class="cleaner h60"></div>
        
    	<div class="col_4">
        	<h3>Story One</h3>
            <img src="images/templatemo_image_01.jpg" alt="Image 01" />
        	Curabitur turpis turpis, rutrum sit amet porttitor sed, consequat at libero.
		</div>
        <div class="col_4">
        	<h3>Story Two</h3>
            <img src="images/templatemo_image_02.jpg" alt="Image  02" />
        	Suspendisse rhoncus tincidunt mauris, eget fringilla magna at arcu. 
        </div>
        <div class="col_4">
        	<h3>Story Three</h3>
            <img src="images/templatemo_image_03.jpg" alt="Image 03" />
        	Maecenas ut eros mi, in suscipit ante ut suscipit tortor interdum id.
        </div>
        <div class="col_4 rmc">
        	<h3>Story Four</h3>
            <img src="images/templatemo_image_04.jpg" alt="Image 04" />
        	Donec faucibus accumsan lectus id posuere. Morbi dictum purus. 
        </div>
    </div>      
    <div id="templatemo_content">
        <div class="cleaner"></div>
    </div> <!-- end of content -->
    <?php
    include("partials/footer.php")

     ?>