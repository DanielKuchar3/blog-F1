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
        <div id="page_title">Full Blog Post</div>
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
            <h2>Lorem ipsum dolor sit amet</h2>
            <img src="images/templatemo_image_06.jpg"  alt="Image" />
            <p><em>Mauris tellus magna, eleifend a vulputate ut, rhoncus quis eros. Ut fringilla condimentum fermentum. </em></p>
            <p align="justify">Integer tortor ante, volutpat vitae euismod nec, venenatis non nisi. Maecenas commodo dignissim bibendum. Duis eget augue tellus, quis ultrices libero. <a href="#">Aliquam erat</a> volutpat. Nullam pellentesque scelerisque sapien sit amet porta. Sed nec nunc eget turpis tristique vulputate. Suspendisse facilisis nisl a purus pulvinar convallis. Fusce aliquet, lorem ut auctor gravida, mauris orci fermentum felis, nec vehicula ligula lacus sed ipsum. Curabitur vitae massa sed ligula laoreet blandit.</p>
            <p align="justify">Morbi venenatis augue sit amet ante facilisis feugiat sed in lectus. Vivamus imperdiet, ante a pretium vehicula, ante enim sodales mi, eu rutrum odio <a href="#">turpis eget arcu</a>. Nam eu aliquam nibh. Nullam iaculis nulla ipsum. Maecenas vitae purus sed risus congue iaculis et a felis.  Phasellus sodales, erat  elementum tincidunt, magna  dignissim nunc, <a href="#">at ultricies arcu neque</a> non sapien. Sed nec libero lacus, sed varius nunc. Nullam ullamcorper feugiat luctus. Phasellus sed nunc mi.</p>
            <p align="justify">Sed elit turpis, ultrices ac congue non, laoreet in sapien. Nullam volutpat est sed arcu dictum semper iaculis augue dictum. Aliquam non mauris mauris. Suspendisse accumsan hendrerit enim non elementum. Morbi a neque eget nibh porta feugiat. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p></div>
        
        <div class="cleaner"></div>
                <h3>Comments</h3>
                        
              <div id="comment_section">
                <ol class="comments first_level">
                        
                        <li>
                            <div class="comment_box commentbox1">
                                    
                                <div class="gravatar">
                                    <img src="images/avator.jpg" alt="author 6" />
                                </div>
                                
                                <div class="comment_text">
                                    <div class="comment_author">George <span class="date">November 21, 2048</span> <span class="time">11:24 pm</span></div>
                                    <p>Fusce tempus nunc faucibus libero interdum commodo. Duis tristique enim turpis, quis dictum augue. Etiam sagittis bibendum elit, at lobortis ante dapibus viverra.</p>
                                  <div class="reply"><a href="#">Reply</a></div>
                                </div>
                                <div class="cleaner"></div>
                            </div>                        
                            
                        </li>
                        
                        <li>
                        
                            	<ol class="comments">
                            
                                    <li>
                                        <div class="comment_box commentbox2">
                                        
                                        <div class="gravatar">
                                        <img src="images/avator.jpg" alt="author 5" />
                                        </div>
                                        <div class="comment_text">
                                        <div class="comment_author">Richard <span class="date">November 22, 2048</span> <span class="time">09:33 am</span></div>
                                        <p>Suspendisse facilisis nisl a purus pulvinar convallis. Fusce aliquet, lorem ut auctor gravida, mauris orci fermentum felis, nec vehicula ligula lacus sed ipsum.</p>
                                        <div class="reply"><a href="#">Reply</a></div>
                                        </div>
                                        
                                        <div class="cleaner"></div>
                                        </div>  
                                    
                                    </li>
                                    
                                    <li>
                            
                                        <ol class="comments">
                                    
                                            <li>
                                                <div class="comment_box commentbox1">
                                                
                                                    <div class="gravatar">
                                                        <img src="images/avator.jpg" alt="author 4" />
                                                    </div>
                                                    <div class="comment_text">
                                                        <div class="comment_author">John <span class="date">November 23, 2048</span> <span class="time">03:15 pm</span></div>
                                                        <p> Cras consequat venenatis lacinia. Nam aliquam leo a nunc condimentum egestas. In imperdiet mauris id massa aliquam nisi fermentum.</p>
                                                      <div class="reply"><a href="#">Reply</a></div>
                                                    </div>
                                                    
                                                    <div class="cleaner"></div>
                                                </div>  
                                                
                                            </li>
                                    
                                        </ol>
                        
                        			</li>
                                </ol>
                                
						</li>
                        
                        <li>
                            <div class="comment_box commentbox2">
                                     
                                <div class="gravatar">
                                    <img src="images/avator.jpg" alt="author 1" />
                                </div>
                                <div class="comment_text">
                                    <div class="comment_author">Bell <span class="date">November 24, 2048</span> <span class="time">11:52 am</span></div>
                                    <p> Integer fermentum neque quis odio fermentum ornare eu quis dui. Nullam neque turpis, mollis quis placerat eget, egestas est.</p>
                                  <div class="reply"><a href="#">Reply</a></div>
                                </div>
                                
                                <div class="cleaner"></div>
                            </div> 
                            
                        </li>
                        
                        <li>
                            <div class="comment_box commentbox1">
                                    
                                <div class="gravatar">
                                    <img src="images/avator.jpg" alt="author 2" />
                                </div>
                                <div class="comment_text">
                                    <div class="comment_author">David <span class="date">November 26, 2048</span> <span class="time">10:28 pm</span></div>
                                    <p> Mauris eu mi dignissim ipsum consectetur semper ac eget dolor. Nullam fermentum quam, quis venenatis mauris pharetra.</p>
                                  <div class="reply"><a href="#">Reply</a></div>
                                </div>
                                
                                <div class="cleaner"></div>
                            </div>  
                        </li>
                        
                </ol>
                <div class="cleaner h20"></div>    
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
                    
                </div>
                
                <div class="cleaner h20"></div>
                
                <div id="comment_form">
                    <h3>Leave your comment</h3>
                    
                    <form action="#" method="get">
						<div class="form_row">

							<label>Name (* required)</label><br />
							<input type="text" name="name" />
						</div>
						<div class="form_row">
							<label>Email  (* required)</label><br />
							<input type="text" name="name" />
						</div>
						<div class="form_row">

							<label>Comment</label><br />
							<textarea  name="comment" rows="" cols=""></textarea>
						</div>
			
						<input type="submit" name="Submit" value="Submit" class="submit_btn" />
                        
					</form>
                
            	</div>
    <?php
    include("partials/footer.php")

     ?>