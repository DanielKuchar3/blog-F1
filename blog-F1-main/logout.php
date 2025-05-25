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
        <h1>Signup succesfull</h1>
    </div>
      
            
        
        <div class="cleaner"></div>
    </div>  
    
    <div id="templatemo_content">
       
  		
         <div id="contact_form">
            <form method="post"  action="../blog-F1-main/profile.php">     
                <div class="cleaner h20"></div>
                    <input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Login" /> 
                    
                    
            </form>

        
        </div> 
        
    </div> 
    <?php
    include("partials/footer.php")

     ?>