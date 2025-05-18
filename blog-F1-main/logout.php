<?php
include("partials/header.php");
require_once '../includes/config_session.inc.php';
require_once '../includes/login_view.inc.php';

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
          		
          		<li><a href="portfolio.php">Portfolio</a>
                    <ul>
                        <li><a href="#submenu1">Sub menu 1</a></li>
                        <li><a href="#submenu2">Sub menu 2</a></li>
                        <li><a href="#submenu3">Sub menu 3</a></li>
                        <li><a href="#submenu4">Sub menu 4</a></li>
                        <li><a href="#submenu5">Sub menu 5</a></li>
                  	</ul>
              	</li>
              	<li><a href="blog.php">Blog</a></li>
              	<li><a href="contact.php" >Contact</a></li>
                <li><a href="profile.php">Sign up/Log in</a>
                    <ul>
                        <li><a href="profile.php">Log in</a></li>
                        <li><a href="signup.php">Sign up</a></li>
                  </ul>
                </li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    
    <div id="content_top">
        <div id="page_title">
            <?php
            output_username();
            ?></div>
      
            
        
        <div class="cleaner"></div>
    </div>  
    
    <div id="templatemo_content">
       
  		
         <div id="contact_form">
            <form method="post"  action="../includes/logout.inc.php">     
                <div class="cleaner h20"></div>
                    <input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Logout" /> 
                    
                    
            </form>

        
        </div> 
        
    </div> 
    <?php
    include("partials/footer.php")

     ?>