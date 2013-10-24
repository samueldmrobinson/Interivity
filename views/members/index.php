<?php $this->hmefeed; ?>
<section class="wrap">
    <div class="content">
        <script type="text/javascript">
            jQuery(function() {
                jQuery('#slides').slides({preload: true, effect: 'slide', preloadImage: '<?php echo URL; ?>images/loading.gif', play: 4000, pause: 1500, hoverPause: true, generatePagination: false, });
            });
        </script>
        <div id="slides">
            <div class="slides_container">
                <?php
                foreach ($this->data as $row) {
                    echo '<div class="slide">';
                    echo ' <a><img src="' . URL . 'images/slide-default.jpg" alt="Slider Image" /></a>';
                    echo '<div class="meta-slider">';


                    echo '</div>';
                    echo '<div class="title-slider">';
                    if ($row['minter_displayname'] == '') {
                        $posted = $row['minter_firstname'] . '&nbsp' . $row['minter_lastname'];
                    } else {
                        $posted = $row['minter_displayname'];
                    }
                    echo '<a href="' . URL . 'members/view/' . $row['minter_id'] . '/"><h6>' . $posted . '</a> : <a href="' . URL . 'members/post/' . $row['cinter_id'] . '/">' . $row['cinter_title'] . ' </h6></a> ';
                    echo '<br />';
                    Members_Model::interivity_slide_style($row['cinter_type'], $row['cinter_typevalue']);
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div><!-- end .slides_container -->
            <ul class="direction-nav">
                <li><a href="#" class="prev"></a></li>
                <li><a href="#" class="next"></a></li>
            </ul> 
        </div><!-- end #slides --> 
        <div class="clear"></div> 



        <?php
        echo '<div class="widget-left">';
        $i = 0;
        $len = count($this->lhmefeed);
        foreach ($this->lhmefeed as $item) {
            //print_r ($item);
            if ($i == 0) {
                echo '<h3>' . $item['category'] . '</h3>';
                echo '<article class="widget-first">';

                echo '<div class="' . $item['cinter_typevalue'] . '"></div><!-- Media Icon -->';

                switch ($item['cinter_type']) {
                    case 'youtube':
                        $video_id = explode("?v=", $item['cinter_typevalue']);
                        $video_id = $video_id[1];
                        echo '<iframe width="100%" height="100%" src="//www.youtube.com/embed/' . $video_id . '" frameborder="0" allowfullscreen></iframe>';
                        break;
                    case 'soundcloud':

                        $url = 'http://api.soundcloud.com/resolve.json?url=' . $item['cinter_typevalue'] . '&client_id=7ac001e0adc4fdf6cb90ded48fded899';
                        $result = json_decode(file_get_contents($url), true);
                        $result = explode('/', $result['location']);
                        $result = explode('.', $result['4']);

                        echo '<iframe width="100%" height="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F' . $result[0] . '"></iframe>';
                        break;
                }
                
                echo '<hr style="margin-top:+5px;margin-bottom:+15px;" />';
                echo '<a href="' . URL . 'members/view/' . $item['minter_id'] . '/"><img class="phmimg" src="' . URL . $row['photo_path'] . '" alt="article img"></a>';
                echo '<a href="/members/post/' . $item['cinter_id'] . '/"><h2>' . $item['cinter_title'] . '</h2></a>';
                if ($item['cinter_type'] == 'soundcloud') {
                    echo '<br style="margin-top:+5px;margin-bottom:+15px;" />';
                }
                echo '</article>';
                echo '<ul class="widget-list">';
            } elseif ($i > 0) {
                echo '<li>';
                echo '<a href="' . URL . 'members/view/' . $item['minter_id'] . '/"><img src="' . URL . $item['photo_path'] . '" alt="article img" /></a>';
                echo '<div class="meta-date">';
                echo '<div class="category"><a href="' . URL . 'members/category/' . strtolower($item['category']) . '/">' . $item['category'] . '</a></div>';
                //echo   '<div class="'.$item['cinter_classtype'].'"></div>';
                echo '</div>';
                echo '<a href="' . URL . 'members/post/' . $item['cinter_id'] . '/"><h2>' . $item['cinter_title'] . '</h2></a>';
                echo '</li>';
            }


            $i++;
        }
        echo '</ul>';
        echo '</div>';
        ?>


        <?php
        echo '<div class="widget-right">';
        $i = 0;

        foreach ($this->rhmefeed as $item) {
            //print_r ($this->rhmefeed);
            if ($i == 0) {
                echo '<h3>' . $item['category'] . '</h3>';
                echo '<article class="widget-first">';

                echo '<div class="' . $item['cinter_typevalue'] . '"></div><!-- Media Icon -->';

                switch ($item['cinter_type']) {
                    case 'youtube':
                        $video_id = explode("?v=", $item['cinter_typevalue']);
                        $video_id = $video_id[1];
                        echo '<iframe width="100%" height="100%" src="//www.youtube.com/embed/' . $video_id . '" frameborder="0" allowfullscreen></iframe>';
                        break;
                    case 'soundcloud':

                        $url = 'http://api.soundcloud.com/resolve.json?url=' . $item['cinter_typevalue'] . '&client_id=7ac001e0adc4fdf6cb90ded48fded899';
                        $result = json_decode(file_get_contents($url), true);
                        $result = explode('/', $result['location']);
                        $result = explode('.', $result['4']);

                        echo '<iframe width="100%" height="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F' . $result[0] . '"></iframe>';
                        break;
                }
                echo '<hr style="margin-top:+5px;margin-bottom:+15px;" />';
                echo '<a href="' . URL . 'members/view/' . $item['minter_id'] . '/"><img class="phmimg" src="' . URL . $row['photo_path'] . '" alt="article img"></a>';
                echo '<a href="/members/post/' . $item['cinter_id'] . '/"><h2>' . $item['cinter_title'] . '</h2></a>';
                if ($item['cinter_type'] == 'soundcloud') {
                    echo '<br style="margin-top:+5px;margin-bottom:+15px;" />';
                }
                echo '</article>';
                echo '<ul class="widget-list">';
            } elseif ($i > 0) {
                echo '<li>';
                echo '<a href="' . URL . 'members/view/' . $item['minter_id'] . '/"><img src="' . URL . $item['photo_path'] . '" alt="article img" /></a>';
                echo '<div class="meta-date">';
                echo '<div class="category"><a href="' . URL . 'members/category/' . strtolower($item['category']) . '/">' . $item['category'] . '</a></div>';
                //echo   '<div class="'.$item['cinter_classtype'].'"></div>';
                echo '</div>';
                echo '<a href="' . URL . 'members/post/' . $item['cinter_id'] . '/"><h2>' . $item['cinter_title'] . '</h2></a>';
                echo '</li>';
            }


            $i++;
        }
        echo '</ul>';
        echo '</div>';
        ?>

        <div class="clear"></div>
        <?php
        echo '<div class="widget-left">';
        $i = 0;
        $len = count($this->lrhmefeed);
        foreach ($this->lrhmefeed as $item) {
            //print_r ($item);
            if ($i == 0) {
                echo '<h3>' . $item['category'] . '</h3>';
                echo '<article class="widget-first">';

                echo '<div class="' . $item['cinter_typevalue'] . '"></div><!-- Media Icon -->';

                switch ($item['cinter_type']) {
                    case 'youtube':
                        $video_id = explode("?v=", $item['cinter_typevalue']);
                        $video_id = $video_id[1];
                        echo '<iframe width="100%" height="100%" src="//www.youtube.com/embed/' . $video_id . '" frameborder="0" allowfullscreen></iframe>';
                        break;
                    case 'soundcloud':

                        $url = 'http://api.soundcloud.com/resolve.json?url=' . $item['cinter_typevalue'] . '&client_id=7ac001e0adc4fdf6cb90ded48fded899';
                        $result = json_decode(file_get_contents($url), true);
                        $result = explode('/', $result['location']);
                        $result = explode('.', $result['4']);

                        echo '<iframe width="100%" height="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F' . $result[0] . '"></iframe>';
                        break;
                }
                echo '<hr style="margin-top:+5px;margin-bottom:+15px;" />';
                echo '<a href="' . URL . 'members/view/' . $item['minter_id'] . '/"><img class="phmimg" src="' . URL . $row['photo_path'] . '" alt="article img"></a>';
                echo '<a href="/members/post/' . $item['cinter_id'] . '/"><h2>' . $item['cinter_title'] . '</h2></a>';
                if ($item['cinter_type'] == 'soundcloud') {
                    echo '<br style="margin-top:+5px;margin-bottom:+15px;" />';
                }
                echo '</article>';
                echo '<ul class="widget-list">';
            } elseif ($i > 0) {
                echo '<li>';
                echo '<a href="' . URL . 'members/view/' . $item['minter_id'] . '/"><img src="' . URL . $item['photo_path'] . '" alt="article img" /></a>';
                echo '<div class="meta-date">';
                echo '<div class="category"><a href="' . URL . 'members/category/' . strtolower($item['category']) . '/">' . $item['category'] . '</a></div>';
                //echo   '<div class="'.$item['cinter_classtype'].'"></div>';
                echo '</div>';
                echo '<a href="' . URL . 'members/post/' . $item['cinter_id'] . '/"><h2>' . $item['cinter_title'] . '</h2></a>';
                echo '</li>';
            }


            $i++;
        }
        echo '</ul>';
        echo '</div>';
        ?>


        <?php
        echo '<div class="widget-right">';
        $i = 0;

        foreach ($this->rlhmefeed as $item) {
            //print_r ($this->rhmefeed);
            if ($i == 0) {
                echo '<h3>' . $item['category'] . '</h3>';
                echo '<article class="widget-first">';

                echo '<div class="' . $item['cinter_typevalue'] . '"></div><!-- Media Icon -->';

                switch ($item['cinter_type']) {
                    case 'youtube':
                        $video_id = explode("?v=", $item['cinter_typevalue']);
                        $video_id = $video_id[1];
                        echo '<iframe width="100%" height="100%" src="//www.youtube.com/embed/' . $video_id . '" frameborder="0" allowfullscreen></iframe>';
                        break;
                    case 'soundcloud':
                        $url = 'http://api.soundcloud.com/resolve.json?url=' . $item['cinter_typevalue'] . '&client_id=7ac001e0adc4fdf6cb90ded48fded899';
                        $result = json_decode(file_get_contents($url), true);
                        $result = explode('/', $result['location']);
                        $result = explode('.', $result['4']);


                        echo '<iframe width="100%" height="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F' . $result['id'] . '"></iframe>';
                        break;
                }
                echo '<hr style="margin-top:+5px;margin-bottom:+15px;" />';
                echo '<a href="' . URL . 'members/view/' . $item['minter_id'] . '/"><img class="phmimg" src="' . URL . $row['photo_path'] . '" alt="article img"></a>';
                echo '<a href="/members/post/' . $item['cinter_id'] . '/"><h2>' . $item['cinter_title'] . '</h2></a>';
                if ($item['cinter_type'] == 'soundcloud') {
                    echo '<br style="margin-top:+5px;margin-bottom:+15px;" />';
                }
                echo '</article>';
                echo '<ul class="widget-list">';
            } elseif ($i > 0) {
                echo '<li>';
                echo '<a href="' . URL . 'members/view/' . $item['minter_id'] . '/"><img src="' . URL . $item['photo_path'] . '" alt="article img" /></a>';
                echo '<div class="meta-date">';
                echo '<div class="category"><a href="' . URL . 'members/category/' . strtolower($item['category']) . '/">' . $item['category'] . '</a></div>';
                //echo   '<div class="'.$item['cinter_classtype'].'"></div>';
                echo '</div>';
                echo '<a href="' . URL . 'members/post/' . $item['cinter_id'] . '/"><h2>' . $item['cinter_title'] . '</h2></a>';
                echo '</li>';
            }


            $i++;
        }
        echo '</ul>';
        echo '</div>';
        ?>
    </div>
    <aside class="sidebar-midle">

        <?php if (count($this->plydata) > 3): ?> 
            <div class="widget">
                <h3 class="title">People Like You</h3>
                <script type="text/javascript">
                    jQuery(function() {
                        jQuery('#slides_widget1').slides({preload: true, effect: 'slide', preloadImage: '<?php echo URL; ?>images/loading.gif', play: 3000, pause: 1500, hoverPause: true, generatePagination: false, });
                    });
                </script>
                <div id="slides_widget1" class="slides_widget">
                    <div class="slides_container">
                        <?php
                        foreach ($this->plydata as $row) {
                            if ($row['minter_displayname'] !== '') {
                                $username = $row['minter_displayname'];
                            } else {
                                $username = '' . $row['minter_firstname'] . '&nbps' . $row['minter_lastname'];
                            }
                            echo '<a href="#" class="someClass" title="' . $username . '"><img src="' . $row['photo_path'] . '" alt="img" /></a>';
                        }
                        ?>

                    </div>
                    <ul class="direction-nav">
                        <li><a href="#" class="prev"></a></li>
                        <li><a href="#" class="next"></a></li>
                    </ul> 
                </div>
                <div class="clear"></div>  
            </div>    
        <?php endif; ?>
        <div class="widget">
            <h3 class="title">Your Interests (Today)</h3>
            <ul class="sidebar-links">
                <?php
                echo $this->yurintrst;
                ?>

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
        <div class="clear"></div> 
        </div> 
    </aside>






