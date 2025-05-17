<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newspaper Template - Portfolio</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- templatemo 344 newspaper -->
<!-- 
Newspaper Template 
http://www.templatemo.com/preview/templatemo_344_newspaper 
-->
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<!--////// CHOOSE ONE OF THE 3 PIROBOX STYLES  \\\\\\\-->
<link href="css_pirobox/white/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />
<!--<link href="css_pirobox/white/style.css" media="screen" title="white" rel="stylesheet" type="text/css" />
<link href="css_pirobox/black/style.css" media="screen" title="black" rel="stylesheet" type="text/css" />-->
<!--////// END  \\\\\\\-->

<!--////// INCLUDE THE JS AND PIROBOX OPTION IN YOUR HEADER  \\\\\\\-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/piroBox.1_2.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 600, //animation speed
			bg_alpha: 0.5, //background opacity
			radius: 4, //caption rounded corner
			scrollImage : false, // true == image follows the page, false == image remains in the same open position
			pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
			pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
			close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox
			slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.
			slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)
	});
});
</script>
<!--////// END  \\\\\\\-->
</head>

<body>

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title">
        	<h1><a href="#">Newspaper Template</a></h1>
        </div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
              	<li><a href="index.php">Home</a></li>
          		
          		<li><a href="portfolio.php" class="selected">Portfolio</a>
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
        <div id="page_title">Portfolio</div>
        <div id="search_box">
            <form action="#" method="get">
                <input type="text" value="Search" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
            </form>
        </div>
        <div class="cleaner"></div>
    </div> 
    
	<div class="gallery_box">
        <h2>Web Design</h2>
        <ul class="gallery">
            <li><a class="pirobox" href="images/gallery/01.jpg" title="Image 01"><img src="images/gallery/01.jpg" alt="Image 01" /></a></li>
            <li><a class="pirobox" href="images/gallery/02.jpg" title="Image 02"><img src="images/gallery/02.jpg" alt="Image 02" /></a></li>
            <li><a class="pirobox" href="images/gallery/03.jpg" title="Image 03"><img src="images/gallery/03.jpg" alt="Image 03" /></a></li>
            <li><a class="pirobox" href="images/gallery/04.jpg" title="Image 04"><img src="images/gallery/04.jpg" alt="Image 04" /></a></li>
        </ul>
        <div class="cleaner"></div>
        <a class="more" href="#">More</a>
    </div>    
	<div class="gallery_box">
        <h2>Photography</h2>
        <ul class="gallery">
            <li><a class="pirobox" href="images/gallery/05.jpg" title="Image 05"><img src="images/gallery/05.jpg" alt="Image 05" /></a></li>
            <li><a class="pirobox" href="images/gallery/06.jpg" title="Image 06"><img src="images/gallery/06.jpg" alt="Image 06" /></a></li>
            <li><a class="pirobox" href="images/gallery/07.jpg" title="Image 07"><img src="images/gallery/07.jpg" alt="Image 07" /></a></li>
            <li><a class="pirobox" href="images/gallery/08.jpg" title="Image 08"><img src="images/gallery/08.jpg" alt="Image 08" /></a></li>
        </ul>
        <div class="cleaner"></div>
        <a class="more" href="#">More</a>
	</div>
	<div class="gallery_box">
        <h2>Print Media</h2>
        <ul class="gallery">
            <li><a class="pirobox" href="images/gallery/09.jpg" title="Image 09"><img src="images/gallery/09.jpg" alt="Image 09" /></a></li>
            <li><a class="pirobox" href="images/gallery/10.jpg" title="Image 10"><img src="images/gallery/10.jpg" alt="Image 10" /></a></li>
            <li><a class="pirobox" href="images/gallery/11.jpg" title="Image 11"><img src="images/gallery/11.jpg" alt="Image 11" /></a></li>
            <li><a class="pirobox" href="images/gallery/12.jpg" title="Image 12"><img src="images/gallery/12.jpg" alt="Image 12" /></a></li>
        </ul>
        <div class="cleaner"></div>
        <a class="more" href="#">More</a>
	</div>    
    
    <?php
    include("partials/footer.php")

     ?>