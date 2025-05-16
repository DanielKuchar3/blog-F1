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
          		<li><a href="about.php" class="selected">About</a>
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
              	<li><a href="contact.php">Contact</a></li>
                <li><a href="profile.php">Sign up/Log in</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    
    <div id="content_top">
        <div id="page_title">Who We Are</div>
        <div id="search_box">
            <form action="#" method="get">
                <input type="text" value="Search" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
            </form>
        </div>
        <div class="cleaner"></div>
    </div>  
    
    <div id="templatemo_content">
    	<h2>Duis iaculis purus a tellus ut </h2>
        <p>Newspaper is free website template for your personal or commercial websites. Pellentesque scelerisque, massa sed fringilla suscipit, justo sapien fringilla turpis, in pretium quam ipsum ac felis. Donec sodales molestie interdum. Aenean gravida ultricies varius. Duis consequat <a href="#">tempor mi sed</a> sollicitudin. Morbi vehicula quam sit <a href="#">amet libero volutpat</a> consectetur. Donec auctor ultricies egestas. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at pulvinar diam.</p>
        <ul class="templatemo_list">
        	<li>Suspendisse vitae enim elementum eros scelerisque tempus.</li>
            <li>Pellentesque quis nulla id orci malesuada porta posuere quis massa.</li>
            <li>Nunc vitae purus non augue scelerisque ultricies vitae et velit quis.</li>
            <li>Aliquam fermentum cursus risus aliquam erat volutpat.</li>
            <li>Morbi a augue eget orci sodales blandit morbiet mi in adipiscing.</li>
		</ul>
        <div class="cleaner h20"></div>
        <h3>Pellentesque habitant morbi senectus</h3>
		<p>Nam nec leo. Curabitur quis eros a arcu feugiat egestas. Nunc sagittis, dui non porttitor tincidunt, mi tortor tincidunt sem, et aliquet mi tortor eu turpis. Ut nisi ligula, viverra ac, placerat sed, ultricies vitae, neque. Morbi feugiat neque non odio eleifend pulvinar. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
        <div class="cleaner"></div>
        <blockquote>Nunc quis luctus velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam condimentum rutrum nisi, ut pellentesque augue rhoncus vel. Nullam vehicula vulputate leo ac luctus. Nunc at odio sollicitudin mi varius consequat eget et diam.
        </blockquote>
    </div> <!-- end of content -->
    <?php
    include("partials/footer.php")

     ?>