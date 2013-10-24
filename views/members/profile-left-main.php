 <aside class="profile-left">
        <div class="widget">
            
            <h4 style='border-top: 2px solid #232323;
         border-bottom: 1px dotted #232323;'><?php
                if ($this->user[0]['minter_displayname'] == '') {
                    echo $this->user[0]['minter_firstname'] . '&nbsp' . $this->user[0]['minter_lastname'];
                } else {
                    echo $this->user[0]['minter_displayname'];
                }
                ?> </h4>
           
            <br />
            <div class="widget">
               
                <img id="img-profile" src="<?php echo URL .$this->userphotodata[0]['photo_path']?>" alt="img" width="160" height="220" /></a>
         
            </div><!-- end .slides_container -->
           
   <ul class="sidebar-links" style="margin-top: -30px;">
           
            <li><a href="<?php echo URL; ?>members/photos/<?php echo $this->user[0]['minter_id'] ?>/">Photos</a></li>
   </ul>
              <div class="clear"></div>
        </div><!-- end #slides_widget --> 
        <div class="clear"></div> 
        </div> 

        <hr style="margin-top: -20px;" />
        <div class="widget">
            <h3 class="title">Statistics</h3>
            <hr />
            <ul class="sidebar-links">
                <?php echo $this->statistics; ?>
            </ul>
            <div class="clear"></div>
        </div> 
        
        <hr style="margin-top: -20px;" />
        <div class="widget">
            <h3 class="title">Interests</h3>
            <hr />
            <ul class="sidebar-links">
                <?php echo $this->yurintrst; ?>
            </ul>
            <div class="clear"></div>
        </div> 


        <?php
        if ($i = 0) {
            echo ' <hr style="margin-top: -20px;" />';
            echo '<div class="widget">';
            echo '<h3 class="title">Your Top Tags</h3>';
            echo '<hr />';
            echo '<ul class="tags">';
            foreach ($this->data as $row) {
                echo '<li><a href="'.URL.'members/tag/'.$row['tag_id'].'/">'.$row['tag'].'</a></li>';
            }
            echo ' </ul>';
            echo '<div class="clear"></div>';
            echo '</div>';
        }
       
        ?>

    </aside>