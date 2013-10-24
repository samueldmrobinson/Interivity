<!-- Begin Sidebar 1 -->
<aside class="sidebar">

    <div class="widget">
        <h3 class="title">Advertisement</h3>
        <div class="banner300">
            <script type="text/javascript"><!--
google_ad_client = "ca-pub-0993660073106193";
/* Interivity Rectangle */
google_ad_slot = "1245063964";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
        </div>
    </div> 




    <br style="margin-top: -20px;" />
    <div class="widget">
        <h3 class="title">The Featured Stuff</h3>
        <ul class="widget-list" id="tfs">
            <?php
            foreach ($this->fsdata as $row) {
                echo '<li>';
                echo '<a href="' . URL . 'members/view/' . $row['minter_id'] . '/"><img src="' . URL . $row['photo_path'] . '" alt="article img" /></a>';
                echo '<div class="meta-date">';
                echo '<div class="category"><a href="' . URL . 'members/category/' . $row['category_id'] . '/">' . $row['category'] . '</a></div>';
                //echo   '<div class="'.$row['cinter_classtype'].'"></div>';
                echo '</div>';
                echo '<a href="' . URL . 'members/post/' . $row['cinter_id'] . '/"><h2>' . $row['cinter_title'] . '</h2></a>';
                echo '</li>';
            }
            ?>
        </ul><!-- end #widget-list --> 
    </div>       

    <?php
    echo '<div class="widget-left">';
    if (Session::get('loggedIn', 'minter_id') > '') {
        $this->location = Session::get('loggedIn', 'minter_location');
        $this->location = explode(',', $this->location);
        echo ' <h3>Whats In ' . ucfirst(strtolower($this->location[0])) . '</h3>';
        echo '<ul class="widget-list">';

        foreach ($this->iyarea as $row) {
            echo '<li>';
            echo '<a href="' . URL . 'members/view/' . $row['minter_id'] . '/"><img src="' . URL . $row['photo_path'] . '" alt="article img" /></a>';
            echo '<div class="meta-date">';
            echo '<div class="category"><a href="' . URL . 'members/category/' . strtolower($row['category']) . '/">' . $row['category'] . '</a></div>';
            //echo   '<div class="'.$row['cinter_classtype'].'"></div>';
            echo '</div>';
            echo '<a href="' . URL . 'members/post/' . $row['cinter_id'] . '/"><h2>' . $row['cinter_title'] . '</h2></a>';
            echo '</li>';
        }

        echo '</ul>';
        echo ' </div>  ';
    }
    ?>



          
<!--

          <div class="widget">
            <h3 class="title">42 Social Widget</h3>
            <ul class="social-icons">
                <li><a href="#"><img src="<?php echo URL; ?>images/social/500px.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/Behance.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/DeviantART.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/Digg.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/Dribbble.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/Facebook.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/Flickr.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/Forrst.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/Google%2b.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/Instagram.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/LinkedIn.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/MySpace.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/Pinterest.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/Posterous.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/Reddit.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/RSS.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/Skype.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/Soundcloud.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/Spotify.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/StumbleUpon.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/Tumblr.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/Twitter.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/Vimeo.png" width="32" height="32" alt="social icon" /></a></li>
                <li><a href="#"><img src="<?php echo URL; ?>images/social/YouTube.png" width="32" height="32" alt="social icon" /></a></li>
            </ul>
            <div class="clear"></div> 
          </div> -->


    </aside><!-- end #sidebar -->   