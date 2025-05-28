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
              	<li><a href="index.php">Home</a></li>
          		
          		
              	<li><a href="blog.php">Blog</a></li>
              	<li><a href="contact.php" >Contact</a></li>
                <li><a href="profile.php" class="selected"><?php echo $_SESSION["username"]; ?></a>
                    <ul>
                        <li><a href="../includes/logout.inc.php">Log out</a></li>
                        
                  </ul>
                </li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    
    <div id="content_top">
        <div id="page_title">Hello <?php echo $_SESSION["username"]; ?> </div>
        <div id="search_box">
            <form action="#" method="get">
                <input type="text" value="Search" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
            </form>
        </div>
        <div class="cleaner"></div>
    </div>  
    
    
    <?php
    include("partials/footer.php")

     ?>