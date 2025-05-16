<?php
include("partials/header.php")

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
          		<li><a href="about.php">About</a>
                    <ul>
                        <li><a href="#submenu1">Sub menu 1</a></li>
                        <li><a href="#submenu2">Sub menu 2</a></li>
                        <li><a href="#submenu3">Sub menu 3</a></li>
                  	</ul>
             	</li>
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
              	<li><a href="contact.php" class="selected">Contact</a></li>
                <li><a href="profile.php">Sign up/Log in</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    
    <div id="content_top">
        <div id="page_title">Contact Us</div>
        <div id="search_box">
            <form action="#" method="get">
                <input type="text" value="Search" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
            </form>
        </div>
        <div class="cleaner"></div>
    </div>  
    
    <div id="templatemo_content">
        
  		<h1>Send us a message</h1>
         <div id="contact_form">
            <form method="post" name="contact" action="../includes/formhandler.inc.php">
            	<div class="float_l">
                 	<label for="author">Name:</label> 
                    <input required type="text"  name="username"  class="required input_field" />
				</div>
                <div class="float_r">
                    <label for="email">Email:</label> 
                    <input required type="text"  name="email" class="validate-email required input_field" />
				</div>
                <div class="cleaner h20"></div>
                    <label for="text">Message:</label> 
                    <textarea id="text" name="message" rows="0" cols="0" class="required"></textarea>
                <div class="cleaner h20"></div>
                    <input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Send" /> 
                    <input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Reset" />
            </form>
        </div> 
        
    </div> 
    <?php
    include("partials/footer.php")

     ?>