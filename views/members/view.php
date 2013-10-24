<meta property="og:title" content="<?php
                if ($this->user[0]['minter_displayname'] == '') {
                    echo $this->user[0]['minter_firstname'] . '&nbsp' . $this->user[0]['minter_lastname'];
                } else {
                    echo $this->user[0]['minter_displayname'];
                }
                ?>" />
<meta property="og:image" content="<?php echo URL .$this->userphotodata[0]['photo_path']?>" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image:width" content="400" />
<meta property="og:image:height" content="300" />
<section class="wrap">
    <aside class="profile-left">
        <div class="widget">
            <hr />
            <h4 class="title"><?php
                if ($this->user[0]['minter_displayname'] == '') {
                    echo $this->user[0]['minter_firstname'] . '&nbsp' . $this->user[0]['minter_lastname'];
                } else {
                    echo $this->user[0]['minter_displayname'];
                }
                ?> </h4>
            <hr />
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

    <div class="stream">
<script type='text/javascript' src='<?php echo URL; ?>js/pagination-pview.js'></script>
        <script>

$(document).ready(function() {

	$('.interivities-stream-list').scrollPagination({

		nop     : 5, // The number of posts per scroll to be loaded
		offset  : 0, // Initial offset, begins at 0 in this case
		error   : 'No More Posts!', // When the user reaches the end this is the message that is
		                            // displayed. You can change this if you want.
		delay   : 500, // When you scroll down the posts will load after a delayed amount of time.
		               // This is mainly for usability concerns. You can alter this as you see fit
		scroll  : true, // The main bit, if set to false posts will not load as the user scrolls. 
		               // but will still load if the user clicks.
                user : <?php echo $this->user[0]['minter_id']; ?>
                            
		
	});
	
});

</script>
        <div class="interivities-stream">
            <ul class="interivities-stream-list">

            </ul><!-- end #widget-list -->   
        </div><!-- end #widget-left -->  
    </div>
