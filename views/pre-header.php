<header id="header">
    <div class="row">
        <div class="branding">
            <div class="columns four">
                <div class="innerContent">
                    <hgroup class="logo">
                        <a href="#" class="hover">
                            <h1>
                                <img src="<?php echo URL; ?>wp-content/themes/serpent/images/logo.png"/>
                            </h1>
                        </a>
                    </hgroup>
                </div>
            </div>
            <div class="cosmo-social four columns">
                <div class="right rmargin">
                    <a href="http://facebook.com/people/@/cosmotheme" target="_blank" class="fb hover-menu"><span id="facebook">3129</span></a>
                    <a href="http://twitter.com/interivity" target="_blank" class="twitter hover-menu"><span></span></a>
                    <a href="static.interivity.me/rss/" class="rss hover-menu"><span>16</span></a>
                </div>
            </div>
            <div id="searchbox" class="four columns">
                <form action="" method="get" id="searchform">
                    <fieldset>
                        <input class="input" name="s" type="text" id="keywords" value="to search, type and hit enter" onfocus="if (this.value == 'to search, type and hit enter') {
                                    this.value = '';
                                }" onblur="if (this.value == '') {
                                    this.value = 'to search, type and hit enter';
                                }">
                        <input type="submit" class="button" value="Search">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <nav id="access" role="navigation" class="row no-overflow bottom-separator ">
        <div id="d-menu" class="cosmo-icons ten columns">

            <ul id="menu-header-menu" class="sf-menu nav-bar fl supplement">
                <li id="menu-item-100" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-100 first"><a title="Your World" class="ajax-call" href="<?php echo URL; ?>">HOME<span>Your World</span></a></li>
                <li id="menu-item-110" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-110"><a title="Your City" href="<?php echo URL; ?>browse/my/city/"><?php echo $this->location[6]; ?><span>Your City</span></a></li>


                <li id="menu-item-120" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-120"><a title="Your Country" class="ajax-call" href="<?php echo URL; ?>browse/my/country/"><?php echo $this->location[4]; ?><span>Your Country</span></a></li>
                <li id="menu-item-130" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-130"><a title="Your Interests" class="ajax-call" href="#">BROWSE<span>Your Interests</span></a>
                    <ul class="children">
                        
                                <li id="menu-item-300" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-300 first" style="white-space: normal; float: left; width: 100%;"><a class="ajax-call" href="<?php echo URL; ?>browse/images/" style="float: none; width: auto;">IMAGES</a></li>
                                <li id="menu-item-310" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-310" style="white-space: normal; float: left; width: 100%;"><a class="ajax-call" href="<?php echo URL; ?>browse/videos/" style="float: none; width: auto;">VIDEOS</a></li>
                                <li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320" style="white-space: normal; float: left; width: 100%;"><a class="ajax-call" href="<?php echo URL; ?>browse/interivity/" style="float: none; width: auto;">INTERIVITY</a></li>
                                <li id="menu-item-330" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-330" style="white-space: normal; float: left; width: 100%;"><a class="ajax-call" href="<?php echo URL; ?>browse/music/" style="float: none; width: auto;">MUSIC</a></li>
                                <li id="menu-item-340" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-340" style="white-space: normal; float: left; width: 100%;"><a class="ajax-call" href="<?php echo URL; ?>browse/attachments/" style="float: none; width: auto;">ATTACHMENTS</a></li>


                           

                        </li>

                    </ul>

                </li>
                <?php
                if ($logged > '') :
                    ?>

                    <li id="menu-item-428" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-428"><a title="It's Just Fun" class="ajax-call" href="<?php echo URL; ?>">SETTINGS<span>It's Just Fun</span></a></li>
                <?php else: ?>

                    <li id="menu-item-428" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-428"><a title="It's Just Fun" class="ajax-call" href="<?php echo URL; ?>">SIGN UP<span>It's Just Fun</span></a></li>
                <?php endif; ?>

                <li id="menu-item-431" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-431"><a title="Need a Hand" class="ajax-call" href="<?php echo URL; ?>">HELP<span>Need a Hand</span></a></li>
            </ul> </div>

        <?php
        if ($logged > '') :
            ?>
            <div class="two columns" id="menu-login" style="display: block;">
                <a href="<?php echo URL; ?>" class="profile-pic">
                    <img src="<?php echo URL . $this->user[0]['photo_path']; ?>" height="32" width="32" alt="" class="photo avatar">
                </a> 
                <div class="cosmo-icons">
                    <ul class="sf-menu sf-js-enabled sf-shadow">
                        <li class="signin sfHover">
                            <a href="<?php echo URL; ?>" class="sf-with-ul"><?php
                                if ($this->user[0]['minter_displayname'] == '') {
                                    echo $this->user[0]['minter_firstname'] . '&nbsp' . $this->user[0]['minter_lastname'];
                                } else {
                                    echo $this->user[0]['minter_displayname'];
                                }
                                ?><img src="<?php echo URL; ?>/wp-content/themes/serpent/images/mask.png" class="mask" alt="Mask"><span>Subscriber</span><span class="sf-sub-indicator"> »</span></a>
                            <ul style="float: none; width: 12em; display: block; visibility: visible;">
                                <li class="my-settings" style="white-space: normal; float: left; width: 100%;"><a class="ajax-call" href="<?php echo URL; ?>members/account/" style="float: none; width: auto;">My settings</a></li>
                                <li class="my-profile" style="white-space: normal; float: left; width: 100%;"><a class="ajax-call" href="<?php echo URL; ?>members/profile/" style="float: none; width: auto;">My profile</a></li>
                                <li class="my-posts" style="white-space: normal; float: left; width: 100%;"><a class="ajax-call" href="<?php echo URL; ?>members/my_posts/" style="float: none; width: auto;">My added posts</a></li>
                                <li class="my-likes" style="white-space: normal; float: left; width: 100%;"><a class="ajax-call" href="<?php echo URL; ?>/members/f_type/like/" style="float: none; width: auto;">My liked posts</a></li> 
                                <li class="my-add" style="white-space: normal; float: left; width: 100%;"><a class="ajax-call" href="<?php echo URL; ?>members/add_post/" style="float: none; width: auto;">Add post</a></li>
                                <li class="my-logout" style="white-space: normal; float: left; width: 100%;"><a class="ajax-call" href="<?php echo URL; ?>members/logout/" style="float: none; width: auto;">Log out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        <?php else: ?>
            <div class="two columns" id="menu-login" style="display: block;">
                <div class="right">
                    <a href="#" class="profile-pic simplemodal-login simplemodal-none left"><img src="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/default_avatar_login.png"></a>
                    <div class="cosmo-icons left">
                        <ul class="sf-menu sf-js-enabled sf-shadow">
                            <li class="signin">
                                <a class="simplemodal-login simplemodal-none" href="#">sign in<span>My World</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="mobile-menu twelve" class="hide">
            <div class="toggle-menu">MENU</div>
            <ul id="menu-header-menu-1" class="mobile-nav-menu">
                <li id="menu-item-m100" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-100 first"><a title="Your World" href="<?php echo URL; ?>">HOME<span>Your World</span></a></li>
                <li id="menu-item-m110" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-110"><a title="Your City" href="<?php echo URL; ?>browse/my/city/"><?php echo $this->location[6]; ?><span>Your City</span></a></li>
                <li id="menu-item-m120" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-120"><a title="Your Country" href="<?php echo URL; ?>browse/my/country/"><?php echo $this->location[4]; ?><span>Your Country</span></a></li>
                <li id="menu-item-m130" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-130"><a title="Your Interests" href="#">BROWSE<span>Your Interests</span></a>
                    <ul class="children">
                        <li id="menu-item-m200" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-200 first" style="white-space: normal; float: left; width: 100%;"><a href="<?php echo URL; ?>browse/cities/" style="float: none; width: auto;">CITIES</a></li>
                        <li id="menu-item-m210" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-210" style="white-space: normal; float: left; width: 100%;"><a href="<?php echo URL; ?>browse/countries/" style="float: none; width: auto;">COUNTRIES</a></li>
                        <li id="menu-item-m220" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-220" style="white-space: normal; float: left; width: 100%;"><a href="#" style="float: none; width: auto;">TYPE</a>
                            <ul class="children">
                                <li id="menu-item-m300" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-300 first" style="white-space: normal; float: left; width: 100%;"><a href="<?php echo URL; ?>browse/images/" style="float: none; width: auto;">IMAGES</a></li>
                                <li id="menu-item-m310" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-310" style="white-space: normal; float: left; width: 100%;"><a href="<?php echo URL; ?>browse/videos/" style="float: none; width: auto;">VIDEOS</a></li>
                                <li id="menu-item-m320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320" style="white-space: normal; float: left; width: 100%;"><a href="<?php echo URL; ?>browse/interivity/" style="float: none; width: auto;">INTERIVITY</a></li>
                                <li id="menu-item-m330" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-330" style="white-space: normal; float: left; width: 100%;"><a href="<?php echo URL; ?>browse/music/" style="float: none; width: auto;">MUSIC</a></li>
                                <li id="menu-item-m340" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-340" style="white-space: normal; float: left; width: 100%;"><a href="<?php echo URL; ?>browse/attachments/" style="float: none; width: auto;">ATTACHMENTS</a></li>


                            </ul>

                        </li>

                    </ul>

                </li>
                <li id="menu-item-m431" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-431"><a title="Need a Hand" href="<?php echo URL; ?>">HELP<span>Need a Hand</span></a></li>

            </ul>
        </div>
    </nav>

</header>