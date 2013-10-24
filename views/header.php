<?php
$logged = Session::get('loggedIn', 'minter_id');
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9 oldie" lang="en"> <![endif]-->

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content="Interivity, Interests, Activities, Interivities, best your interests can get, we remember what we like"/>
        <meta name="description" content="Interivity is a tool for staying up-to-date 
              with your Interests based on your Location. We like to pride ourself on 
              it's difference, we allow users more flexibility then other alike websites."/>
        <meta property="og:title" content="<?php echo $this->page_title; ?> - The best your interests can with images, videos, music and more"/>
        <meta property="og:site_name" content="Interivity"/>
        <meta property="og:url" content="<?php echo URL; ?>"/>
        <meta property="og:image" content="<?php echo URL; ?>/images/og-logo.jpg"/>
        <meta property="og:type" content="website"/>
        <meta name="alexaVerifyID" content="lbi-uvtAnwn7bYcqXR8CNu03yLM" />
        <meta property="og:description" content="Interivity is a tool for staying up-to-date 
              with your Interests based on your Location. We like to pride ourself on 
              it's difference, we allow users more flexibility then other alike websites."/>
        <title><?php echo $this->page_title; ?> - Interivity - The best your interests can with images, videos, music and more</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0"/>
        <script type="text/javascript">
            //<![CDATA[
            window.__CF = window.__CF || {};
            window.__CF.AJS = {"abetterbrowser": {"ie": "8"}};
            //]]>
        </script>
        <link rel="shortcut icon" href="<?php echo URL; ?>images/favicon.png"/>
        <link rel="stylesheet" href="<?php echo URL; ?>wp-content/themes/serpent/style.css" type="text/css" media="all"/>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'/>
        <link rel="pingback" href="xmlrpc.php"/>
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>wp-content/themes/serpent/lib/css/shortcode.css"/>
        <!--[if lt IE 9]>
                    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
         <![endif]-->
        <link rel='stylesheet' id='frontend.css-style-css' href='<?php echo URL; ?>wp-content/themes/serpent/css/autoinclude/frontenda7a0.css?ver=3.6.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='globals.css-style-css' href='<?php echo URL; ?>wp-content/themes/serpent/css/autoinclude/globalsa7a0.css?ver=3.6.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='ie.css-style-css' href='<?php echo URL; ?>wp-content/themes/serpent/css/autoinclude/iea7a0.css?ver=3.6.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='mobile.css-style-css' href='<?php echo URL; ?>wp-content/themes/serpent/css/autoinclude/mobilea7a0.css?ver=3.6.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='slider.css-style-css' href='<?php echo URL; ?>wp-content/themes/serpent/css/autoinclude/slidera7a0.css?ver=3.6.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='smart-grid.css-style-css' href='<?php echo URL; ?>wp-content/themes/serpent/css/autoinclude/smart-grida7a0.css?ver=3.6.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='style.css-style-css' href='<?php echo URL; ?>wp-content/themes/serpent/css/autoinclude/stylea7a0.css?ver=3.6.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='typography.css-style-css' href='<?php echo URL; ?>wp-content/themes/serpent/css/autoinclude/typographya7a0.css?ver=3.6.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='simplemodal-login-css' href='<?php echo URL; ?>wp-content/themes/serpent/css/default4b68.css?ver=1.0.4' type='text/css' media='screen'/>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type='text/javascript' src='<?php echo URL; ?>wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
        <script type='text/javascript' src='<?php echo URL; ?>wp-content/themes/serpent/lib/js/actionsa7a0.js?ver=3.6.1'></script>
        <script type='text/javascript' src='<?php echo URL; ?>wp-content/themes/serpent/js/slides.min.jquerya7a0.js?ver=3.6.1'></script>
        <script type='text/javascript' src='<?php echo URL; ?>wp-content/themes/serpent/js/foundationa7a0.js?ver=3.6.1'></script>
        <script type='text/javascript' src='<?php echo URL; ?>wp-content/themes/serpent/js/jquery.orbit.mina7a0.js?ver=3.6.1'></script>
        <script type='text/javascript' src='<?php echo URL; ?>wp-content/themes/serpent/js/jquery.mosaic.1.0.1.mina7a0.js?ver=3.6.1'></script>
        <script type='text/javascript' src='<?php echo URL; ?>wp-content/themes/serpent/js/jquery.superfisha7a0.js?ver=3.6.1'></script>
        <script type='text/javascript' src=<?php echo URL; ?>wp-content/themes/serpent/js/jquery.supersubsa7a0.js?ver=3.6.1'></script>
        <script type='text/javascript' src='<?php echo URL; ?>wp-content/themes/serpent/js/jquery.accordiona7a0.js?ver=3.6.1'></script>
        <script type='text/javascript' src='<?php echo URL; ?>wp-content/themes/serpent/js/toura7a0.js?ver=3.6.1'></script>
        <script type='text/javascript' src='<?php echo URL; ?>wp-content/themes/serpent/js/jquery.tabs.packa7a0.js?ver=3.6.1'></script>
        <script type='text/javascript' src='<?php echo URL; ?>wp-content/themes/serpent/js/jquery.scrollTo-1.4.2-mina7a0.js?ver=3.6.1'></script>
        <script type='text/javascript' src='<?php echo URL; ?>wp-content/themes/serpent/js/functionsa7a0.js?ver=3.6.1'></script>
        <script type='text/javascript' src='<?php echo URL; ?>wp-content/themes/serpent/js/jquery.cookiea7a0.js?ver=3.6.1'></script>
        <script type='text/javascript' src='<?php echo URL; ?>wp-content/themes/serpent/js/hot_keysa7a0.js?ver=3.6.1'></script>
        <script type="text/javascript" src="<?php echo URL; ?>wp-content/themes/serpent/lib/php/assets/audio-player86c6.js?ver=2.0.4.1"></script>
        <script type="text/javascript">AudioPlayer.setup("<?php echo URL; ?>wp-content/themes/serpent/lib/php/assets/player86c6.swf?ver=2.0.4.1", {width: "290", animation: "yes", encode: "yes", initialvolume: "60", remaining: "no", noinfo: "no", buffer: "5", checkpolicy: "no", rtl: "no", bg: "E5E5E5", text: "333333", leftbg: "CCCCCC", lefticon: "333333", volslider: "666666", voltrack: "FFFFFF", rightbg: "B4B4B4", rightbghover: "999999", righticon: "333333", righticonhover: "FFFFFF", track: "FFFFFF", loader: "009900", border: "CCCCCC", tracker: "DDDDDD", skip: "666666", pagebg: "FFFFFF", transparentpagebg: "yes"});</script>
        <link href="<?php echo URL; ?>wp-content/themes/serpent/videojs/videojs/video-js.min.css" rel="stylesheet">
            <script src="<?php echo URL; ?>wp-content/themes/serpent/videojs/videojs/video.min.js"></script>
            <script type="text/javascript">
                jQuery(function() {
                    jQuery('.demo-tooltip').tour();
                });
            </script>
            <script type="text/javascript">
                /*redirect to post item page*/
                jQuery(document).ready(function() {
                    var post_item_page = "/";
                    jQuery('.simplemodal-submit').click(function() {
                        jQuery('[name="redirect_to"]').val(post_item_page);
                    })
                });
            </script>
            <?php
            if ($logged > '') :
                ?>
                <script type="text/javascript">
                    datetoday = new Date(); // create new Date()
                    timenow = datetoday.getTime(); // grabbing the time, it is now
                    datetoday.setTime(timenow); // setting the time now to datetoday variable
                    hournow = datetoday.getHours();  //the hour it is
                    function timerMethod() {
                        $(document).ready(function() {
                            datetoday = new Date(); // create new Date()
                            timenow = datetoday.getTime(); // grabbing the time it is now
                            datetoday.setTime(timenow); // setting the time now to datetoday variable
                            hournow = datetoday.getHours();  //the hour it is
                            if (hournow >= 18) {  // if it is after 6pm
                                $('#colour').attr('href', '<?php echo URL; ?>css/colors/<?php echo Session::get('loggedIn', 'minter_evn_clr') ?>.css');
                                $('#background').attr('src', '<?php echo Session::get('loggedIn', 'minter_evn_bkgnd') ?>');
                            }
                            else if (hournow >= 12) { // if it is after 12pm
                                $('#colour').attr('href', '<?php echo URL; ?>css/colors/<?php echo Session::get('loggedIn', 'minter_afte_clr') ?>.css');
                                $('#background').attr('src', '<?php echo Session::get('loggedIn', 'minter_afte_bkgnd') ?>');
                            }
                            else if (hournow >= 0) { // if it is after midnight
                                $('#colour').attr('href', '<?php echo URL; ?>css/colors/<?php echo Session::get('loggedIn', 'minter_morn_clr') ?>.css');
                                $('#background').attr('src', '<?php echo Session::get('loggedIn', 'minter_morn_bkgnd') ?>');
                            }
                        });
                    }
                    var timerId = setInterval(timerMethod, 60000);
                    $(document).ready(timerMethod);
                </script>
            <?php endif; ?>
            <script>
                $(document).ready(function() {
// hide targeted element first
                    $("#sticky-bar").hide();

// fade back in targeted element
                    $(function() {
                        $(window).scroll(function() {
                            if ($(this).scrollTop() > 50) {
                                $('#sticky-bar').fadeIn();
                            } else {
                                $('#sticky-bar').fadeOut();
                            }
                        });
                    });

                });
            </script>
   </head>
   <body class="home blog" style="background-color: #ffffff;   background-image: url(<?php echo URL; ?>wp-content/themes/serpent/lib/images/pattern/pattern.paper.png);    ">
        <div id="loadingbar-frame"></div>



        <?php
        if ($logged > '') :
            ?>
            <div class="sticky-bar" id="sticky-bar">
                <div class="container large">
                    <div class="left">
                        <a href="#" class="profile-pic">
                        </a><a href="#" class="profile-pic"><img src="<?php echo URL . $this->user[0]['photo_path']; ?>" height="32" width="32" alt="" class="photo avatar"></a> 
                        <div class="cosmo-icons">
                            <ul>
                                <li class="signin"><a href="#"><?php
                                        if ($this->user[0]['minter_displayname'] == '') {
                                            echo $this->user[0]['minter_firstname'] . '&nbsp' . $this->user[0]['minter_lastname'];
                                        } else {
                                            echo $this->user[0]['minter_displayname'];
                                        }
                                        ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="right">
                        <div class="cosmo-icons fr">
                            <ul>
                                <li class="image show-hover hidden" style="display: none;"><a class="ajax-call" href="<?php echo URL; ?>profile/add_post/#pic_upload">Image</a></li>
                                <li class="video show-hover hidden" style="display: none;"> <a class="ajax-call" href="<?php echo URL; ?>profile/add_post/#video_upload">Video</a></li>
                                <li class="text show-hover hidden" style="display: none;"> <a class="ajax-call" href="<?php echo URL; ?>profile/add_post/#text_post">Text</a></li>
                                <li class="audio show-hover hidden" style="display: none;"> <a class="ajax-call" href="<?php echo URL; ?>profile/add_post/#audio_post">Audio</a></li>
                                <li class="attach show-hover hidden" style="display: none;"> <a class="ajax-call" href="<?php echo URL; ?>profile/add_post/#file_post">File</a></li>
                                <li class="my-settings show-first"><a class="ajax-call" href="<?php echo URL; ?>members/account/">My settings</a></li>
                                <li class="my-profile show-first"><a class="ajax-call" href="<?php echo URL; ?>profile">My profile</a></li>
                                <li class="my-posts show-first"><a class="ajax-call" href="<?php echo URL; ?>profile/my_posts/">My added posts</a></li>
                                <li class="my-likes show-first"><a class="ajax-call" href="<?php echo URL; ?>profile/f_type/like/">My liked posts</a></li>
                                <li class="my-add"><a class="ajax-call" href="<?php echo URL; ?>profile/add_post/">Add post</a></li>
                                <li class="my-logout"><a class="ajax-call" href="<?php echo URL; ?>/profile/logout/">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="container large">
            <div class="twelve columns" id="big-keyboard" style="display: none;">
                <br />
                <br />
                <br />
                <div id="keyboard-container" class="bottom-separator relative">
                    <div id="img">
                        <img src="<?php echo URL; ?>wp-content/themes/serpent/images/keyboard.png" alt="">
                            <p class="hint">
                                Use advanced navigation for a better experience. <br>
                                    You can quickly scroll through posts by pressing the above keyboard keys. Now press <strong>the button in right corner</strong> to close this window. </p>
                    </div>
                    <div class="close"></div>
                </div>
            </div>
            <?php
            if ($logged > '') {
                if (Session::get('loggedIn', 'minter_demo') == '0') {
                    require_once 'website-demo.php';
                }
            } else {
                //require_once 'website-demo.php';
            }
            require_once 'pre-header.php';
            ?>
