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

                <img id="img-profile" src="<?php echo URL . $this->userphotodata[0]['photo_path'] ?>" alt="img" width="160" height="220" /></a>
        
            </div><!-- end .slides_container -->
<ul class="sidebar-links" style="margin-top: -30px;">
          
            <li><a href="<?php echo URL; ?>members/photos/<?php echo $this->user[0]['minter_id'] ?>/">Photos</a></li>
   </ul>
              <div class="clear"></div>
        </div><!-- end #slides_widget --> 
        <div class="clear"></div> 
        </div> 
            <hr style="margin-top: -20px;" />
            <h4 class="title">Connect </h4>
            <hr />
            <ul class="sidebar-links"> 
                <!--                <li><a href="#">Share Interivity</a></li>-->
                <?php
               
                if ($this->chkfollow > '0') {

                    echo '<li><a href="' . URL . 'members/unfollow/' . $this->user[0]['minter_id'] . '/">Unfollow</a></li>';
                } elseif ($this->chkfollow < '1') {

                    echo '<li><a href="' . URL . 'members/follow/' . $this->user[0]['minter_id'] . '/">Follow</a></li>';
                }
                ?>
                <li><a href="<?php echo URL; ?> 'members/followers/<?php echo $this->user[0]['minter_id']; ?>/">Followers</a></li>
                <!--<li><a href="#">Message</a></li>  -->
                
                 <?php
               
                if ($this->chkblock > '0') {

                    echo '<li><a href="' . URL . 'members/unblock/' . $this->user[0]['minter_id'] . '/">Unblock User</a></li>';
                } elseif ($this->chkblock < '1') {

                    echo '<li><a href="' . URL . 'members/block/' . $this->user[0]['minter_id'] . '/">Block User</a></li>';
                }
                ?>
                
                
                                                                        
            </ul>
            <div class="clear"></div>


        </div><!-- end #slides_widget --> 




        <div class="widget">
            <hr style="margin-top: +20px;" />
            <h3 class="title">Interests</h3>
            <hr />
            <ul class="tags">
                  <?php echo $this->urintrst; ?>
            </ul>
            <div class="clear"></div>
        </div>

       
    </aside>
