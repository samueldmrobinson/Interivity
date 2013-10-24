<section class="wrap">
    <div class="content">
        <article>
            <div class="post">                     
                <div class="article-content">                     
                    <h3 class="article-title">Welcome Back, Please login with your details below! </h3>
                    <div class="clear"></div>
                      <div class='accordionButton1 first'>Do You Still Have A Account?</div>
                <div class='accordionContent'> 
                  <ul class="tags">
                      <li><a href="<?php echo URL; ?>login/forgot_email/">Forgot Email Address</a></li>
                      <li><a href="<?php echo URL; ?>login/forgot_password/">Forgot Password</a></li>
                      <li><a href="<?php echo URL; ?>help/">More Help</a></li>
                      
                  </ul>
                </div> 
                    <div id="respond">
                        <hr />
                        <br>
                        <span>*</span>All Fields are mandatory!
                        <form action="<?php echo URL; ?>login/do" method="post" id="commentform">


                            <div class="scenter">
                                
                                <label for="email">First Name:<span>*</span></label> 
                                <input id="email" name="minter_email" type="text" value="" size="50" />
                                
                                <label for="email">Last Name:<span>*</span></label> 
                                <input id="email" name="minter_email" type="text" value="" size="50" />
                                
                                  <label for="email">Email Address:<span>*</span></label> 
                                <input id="email" name="minter_email" type="text" value="" size="50" />

                                <label for="password">Password:<span>*</span></label> 
                                <input id="email" name="minter_password" type="password" value="" size="50" />
                                
                                <label for="password">Password Again:<span>*</span></label> 
                                <input id="email" name="minter_vpassword" type="password" value="" size="50" />
                                
                                <label for="email">DOB - (DD/MM/YYYY):<span>*</span></label> 
                                <input id="email" name="minter_email" type="text" value="" size="50" />
                                
                              


                            </div><div class="clear"></div>

                            <input type="submit" name="submit" class="submitcomm" value="Login"  /> 
                        </form>
                    </div> 
                    <div class="clear"></div><br /> 

                </div>
            </div>
        </article>


    </div>

    <aside class="sidebar-midle">

        <div class="widget">
            <h3 class="title">New Trailers</h3>
            <script type="text/javascript">
                jQuery(function() {
                    jQuery('#slides_widget1').slides({preload: true, effect: 'slide', preloadImage: '<?php echo URL; ?>images/loading.gif', play: 3000, pause: 1500, hoverPause: true, generatePagination: false, });
                });
            </script>
            <div id="slides_widget1" class="slides_widget">
                <div class="slides_container">
                    <a href="#" class="someClass" title="Man of Steel (2013)"><img src="<?php echo URL; ?>demo/160-movie1.jpg" alt="img" /></a>
                    <a href="#" class="someClass" title="Iron Man 3 (2013)"><img src="<?php echo URL; ?>demo/160-movie2.jpg" alt="img" /></a>
                    <a href="#" class="someClass" title="Some Girls (2013)"><img src="<?php echo URL; ?>demo/160-movie3.jpg" alt="img" /></a>
                    <a href="#" class="someClass" title="Frozen (2013)"><img src="<?php echo URL; ?>demo/160-movie4.jpg" alt="img" /></a>
                </div><!-- end .slides_container -->
                <ul class="direction-nav">
                    <li><a href="#" class="prev"></a></li>
                    <li><a href="#" class="next"></a></li>
                </ul> 
            </div>
            <div class="clear"></div> 
        </div> 

        <div class="widget">
            <h3 class="title">Categories</h3>
            <ul class="sidebar-links">
                <li><a href="#">Entertainment <span>(12)</span></a></li> 
                <li><a href="#">Business <span>(8)</span></a></li>
                <li><a href="#">Social Media <span>(9)</span></a></li>
                <li><a href="#">Fashion <span>(16)</span></a></li>
                <li><a href="#">Media <span>(3)</span></a></li>
                <li><a href="#">Trailers <span>(37)</span></a></li>
                <li><a href="#">Tech <span>(11)</span></a></li>
            </ul>
            <div class="clear"></div>
        </div> 


        <div class="widget">
            <h3 class="title">Advertisement</h3>
            <div class="banner160">
                <a href="#"><img src="<?php echo URL; ?>demo/banner160.png" width="160" height="600" alt="banner" /></a>
                <span><a href="#">advertise here</a></span>
            </div>
        </div> 


        <div class="widget">
            <h3 class="title">Most Used Tags</h3>
            <ul class="tags">
                <li><a href="#">Entertainment</a></li>
                <li><a href="#">US</a></li>
                <li><a href="#">World</a></li>
                <li><a href="#">CSS3</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Google+</a></li>
                <li><a href="#">YouTube</a></li>
                <li><a href="#">Dev</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Gadgets</a></li>
                <li><a href="#">Mobile</a></li>
                <li><a href="#">HTML5</a></li>
            </ul>
            <div class="clear"></div>
        </div>


        <div class="widget">
            <h3 class="title">HD Trailers</h3>
            <script type="text/javascript">
                jQuery(function() {
                    jQuery('#slides_widget_2').slides({preload: true, effect: 'slide', preloadImage: '<?php echo URL; ?>images/loading.gif', play: 3000, pause: 1500, hoverPause: true, generatePagination: false, });
                });
            </script>
            <div id="slides_widget_2" class="slides_widget">
                <div class="slides_container">
                    <a href="#" class="someClass" title="Some Girls (2013)"><img src="<?php echo URL; ?>demo/160-movie3.jpg" alt="img" /></a>
                    <a href="#" class="someClass" title="Man of Steel (2013)"><img src="<?php echo URL; ?>demo/160-movie1.jpg" alt="img" /></a>
                    <a href="#" class="someClass" title="Iron Man 3 (2013)"><img src="<?php echo URL; ?>demo/160-movie2.jpg" alt="img" /></a>
                    <a href="#" class="someClass" title="Frozen (2013)"><img src="<?php echo URL; ?>demo/160-movie4.jpg" alt="img" /></a>
                </div><!-- end .slides_container -->
                <ul class="direction-nav">
                    <li><a href="#" class="prev"></a></li>
                    <li><a href="#" class="next"></a></li>
                </ul> 
            </div> 
            <div class="clear"></div> 
        </div> 


    </aside>
  






