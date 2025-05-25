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
                <li><a href="profile.php" class="selected">Sign up/Log in</a>
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
        <div id="page_title">Log in</div>
        <div id="search_box">
            <form action="#" method="get">
                <input type="text" value="Search" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
            </form>
        </div>
        <div class="cleaner"></div>
    </div>  
    
    <div id="templatemo_content">
       
  		
         <div id="contact_form">
            <form method="post" name="contact" action="../includes/login.inc.php">
            	<div class="float_l">
                 	<label for="author">Username:</label> 
                    <input required type="text" id="author" name="username"  class="required input_field" />
				</div>
                <div class="cleaner h20"></div>
                    <label for="password">Password:</label> 
                    <input required type="password"  name="pwd"  class="required input_field" />    
                   
                <div class="cleaner h20"></div>
                    <input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Log in" /> 
                    <input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Reset" />
                    <a class="acc" href="signup.php">Didn't have an account</a>
            </form>

            
        </div> 
        
    </div> 
    <?php
    include("partials/footer.php")

     ?>