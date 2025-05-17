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
          		
          		<li><a href="portfolio.php">Portfolio</a>
                    <ul>
                        <li><a href="#submenu1">Sub menu 1</a></li>
                        <li><a href="#submenu2">Sub menu 2</a></li>
                        <li><a href="#submenu3">Sub menu 3</a></li>
                        <li><a href="#submenu4">Sub menu 4</a></li>
                        <li><a href="#submenu5">Sub menu 5</a></li>
                  	</ul>
              	</li>
              	<li><a href="blog.php" class="selected">Blog</a></li>
              	<li><a href="contact.php">Contact</a></li>
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
    	<div class="post_box">
                <h2>Donec in sapien lobortis elit</h2>
                <img src="images/templatemo_image_06.jpg"  alt="Image 06" />
                <p><em>Suspendisse dignissim varius purus nec varius. Phasellus at justo tellus, quis porta quam.</em></p>
                <p>Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>. Morbi venenatis augue sit amet ante facilisis feugiat sed in lectus. Vivamus imperdiet, ante a pretium vehicula, ante enim sodales mi, eu rutrum odio turpis eget arcu. Proin a elit nisl, id aliquam felis. Nunc ultrices iaculis quam, sed commodo erat tempus mollis.</p>
              	<div class="post_meta">
                <span class="cat">Posted in <a href="#">Illustrations</a>, <a href="#">Graphics</a></span> | Date: June 27, 2048 | <a href="#">129 comments</a>
                <a href="blog_post.php" class="more float_r">Continue</a>
                </div>
            </div>
            
			<div class="post_box">
                <h2> Fusce Placerat Ultrices Magna</h2>
                <img src="images/templatemo_image_07.jpg"  alt="Image" />
                <p><em>Donec magna velit, hendrerit non aliquet vitae, sollicitudin non sem. Aliquam bibendum vulputate faucibus.</em></p>
                <p>Mauris nisl mi, aliquet ac lobortis ut, tincidunt in tortor. Maecenas fermentum nisl vitae lectus dapibus pellentesque. Nunc viverra vestibulum magna, nec dignissim turpis rhoncus tincidunt. Donec ac nibh arcu. Suspendisse potent vehicula eget lacus. Aliquam quis tincidunt quam.</p>
                <div class="post_meta">
                <span class="cat">Posted in <a href="#">3D</a>, <a href="#">Interactive</a></span> | Date: June 23, 2048 |  <a href="#">156 comments</a>
                <a href="blog_post.php" class="more float_r">Continue</a>
                </div>
          </div>
            
			<div class="post_box">
                <h2>Nullam Volutpat Metus Eget</h2>
                <img src="images/templatemo_image_08.jpg"  alt="Image" />
                <p><em>Vivamus sit amet scelerisque orci. Nullam elit enim, dignissim lobortis rutrum non, ultricies vitae erat.</em></p>
                <p> Proin lobortis tellus ac tellus sollicitudin feugiat et at nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus adipiscing arcu ac erat pretium eget aliquet magna bibendum. Donec convallis sapien ac ipsum mollis aliquam.  </p>
                <div class="post_meta">
                <span class="cat">Posted in <a href="#">Marketing</a>, <a href="#">Advertising</a></span> | Date: June 15, 2048 | <a href="#">184 comments</a>
                <a href="blog_post.php" class="more float_r">Continue</a>
                </div>
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