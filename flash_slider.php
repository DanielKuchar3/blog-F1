<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>Flash XML Grid Slider</title>
        <meta name="Keywords" content="" />
        <meta name="Description" content="" />
        <style type="text/css">
        <!--
        body {
            margin: 0 0 0 0;
            padding: 0 0 0 0;
            color: #FFFFFF;
            background-color: #333333;
            font-family: Verdana, Geneva, sans-serif;
            font-size: 12px;
        }
        
        a:link, a:visited { color: #FFFFFF; text-decoration: none; }
        a:hover { color: #99FF00; }
		h2 {
			font-size: 26px;
			font-weight: normal;
		}
		.flashmo_box {
			margin: 20px auto;
			width: 860px;
			padding: 0px 20px;
			background: #222222;
			border: 1px solid #666666;
			font-size: 13px;
		}
		.flashmo_variable {
			color: #FFFF33;
		}
        -->
        </style>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        
        
		<script type="text/javascript" src="js/swfobject.js"></script>
		<script type="text/javascript">
			var flashvars = {};
			flashvars.xml_file = "photo_list.xml";
			var params = {};
			params.wmode = "transparent";
			var attributes = {};
			attributes.id = "slider";
			swfobject.embedSWF("flash_slider.swf", "flash_grid_slider", "960", "350", "9.0.0", false, flashvars, params, attributes);
		</script>
        
        
	</head>
	<body>
		<div align="center">
              <div id="flash_grid_slider">
                <a rel="nofollow" href="http://www.adobe.com/go/getflashplayer">
                    <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
                </a>
			  </div>
		</div>

		<div class="flashmo_box">
		
			<h2><a rel="nofollow" href="http://www.flashmo.com/preview/flashmo_224_grid_slider" target="_parent">flashmo 224 Grid Slider</a></h2>
			<blockquote>
			  <p>Adjust <span class="flashmo_variable">width</span> and <span class="flashmo_variable">height</span> values of  the Flash file ( <span class="flashmo_variable">flashmo_224_grid_slider.swf</span> ) in the SWF embedded HTML tags</p>
		  </blockquote>
			<h2>Default XML file name</h2>
			<blockquote>
			  <p><span class="flashmo_variable">flashmo_224_photo_list.xml</span> ( or any file name can be set in  SWF embedded  HTML tags )</p>
			  <p><strong>Example:</strong> flashmo_224_grid_slider.swf<span class="flashmo_variable">?xml_file=flashmo_224_photo_list.xml</span></p>
		  </blockquote>
			<h2>Optional  Variables in XML  &lt;config&gt; tag</h2>
			<blockquote>
			  <p><span class="flashmo_variable">auto_play</span> = <span class="flashmo_variable">true</span> by default  ( or <span class="flashmo_variable">false</span> )</p>
			  <p><span class="flashmo_variable">auto_play_duration</span> = <span class="flashmo_variable">3</span> seconds by default ( or any number of seconds )</p>
			  <p><span class="flashmo_variable">grid_row</span> = <span class="flashmo_variable">4</span> rows by default ( or any number of rows in photo grid transition effect )</p>
			  <p><span class="flashmo_variable">grid_column</span> = <span class="flashmo_variable">8</span> columns by default ( or any number of columns in photo grid transition effect )</p>
			  <p><span class="flashmo_variable">tween_duration</span> = <span class="flashmo_variable">0.6</span> seconds by default ( duration of motion tween of each block in grid transition )</p>
			  <p><span class="flashmo_variable">tween_delay</span> = <span class="flashmo_variable">0.01</span> seconds by default ( delay between each block in grid transition )</p>
			  <p><span class="flashmo_variable">stylesheet</span> = <span class="flashmo_variable">flashmo_224_style.css</span> by default ( or any CSS file name for formatting photo description text field )</p>
			  <p><span class="flashmo_variable">bar_status</span> = <span class="flashmo_variable">0</span> ( to hide the bar ) or <span class="flashmo_variable">1</span> by default ( to show the bar  ) or <span class="flashmo_variable">2</span> ( to show the bar and photo description )</p>
		  </blockquote>
			<h2>Transition Effects in XML &lt;transition&gt; tag</h2>
			<blockquote>
			  <p><span class="flashmo_variable">flow</span> = in | out</p>
			  <p><span class="flashmo_variable">direction</span> = left | right | up | down | center</p>
			  <p><span class="flashmo_variable">rotation</span> = -180 | -90 | 0 | 90 | 180 | or any degree</p>
			</blockquote>
	</div>
</body>
</html>