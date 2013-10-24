<section class="wrap">
   <?php
     require_once 'profile-left-main.php';
     ?>
    <!-- end #sidebar-midle -->  
    <div class="stream">
        <div class='accordionButton first'>Post Your Interivity</div>
        <div class='accordionContent'> 
            <form action="<?php echo URL; ?>members/post_interivity/" method="post" id="commentform">
                <div class="sleft">
                    <label for="comment">Ramble On + Youtube, Instagram, Soundcloud and Other links:<span>*</span></label>
                    <textarea id="textarea" name="content"  ></textarea>      
                </div>

                <div class="sright">
                    <label for="author">Title:<span>*</span></label> 
                    <input id="author" name="title" type="text" value="" size="30" />



                    <label for="url">Interest linked:</label>
                    <input id="url" name="interest" type="text" value="" size="30" />
                </div>
                <br style="margin-top:-5px;" />

                <input id="submitpost" type="submit" name="submit" class="submitcomm" value="Post" />
            </form>
        </div>
        <div class="interivities-stream">
            <ul class="interivities-stream-list">
                <?php
                foreach ($this->data as $row) {
                    
                    echo '<li id="interivity-card" style="background-color: white">';
                    echo '<a href="single-image.html"><img id="img-profile-box" src="'. URL . $this->userphotodata[0]['photo_path'].'" alt="article img" /></a>';
                    echo ' <div class="meta-date">';
                    echo ' <div class="category"><a href="' . URL . 'interivities/' . $row['cinter_type'] . '/">' . $row['cinter_type'] . '</a></div>';
                    echo '   <div class="' . $row['cinter_classtype'] . '"></div>';
                    if ($row['cinter_promoted'] == '1') {
                        echo '   <div class="category"><a href"interivities/promoted/">Promoted</a></div>';
                    }
                    echo ' </div>';
                    if ($row['minter_displayname'] == '') {
                    $posted = $row['minter_firstname'] . '&nbsp' . $row['minter_lastname'];
                    } else {
                    $posted = $row['minter_displayname'];
                }
                     echo '<a href="'. URL .'members/view/'.$row['minter_id'].'/"><h6>' . $posted . '</a> : <a href="'. URL .'members/post/'.$row['cinter_id'].'/">' . $row['cinter_title'] . ' </h6></a> ';
                    echo ' </li>';

                    if ($row['cinter_type'] == 'youtube') {
                        echo '<li id="interivity-card-content-youtube" style="background-color: black">';
                        Members_Model::interivity_post_style($row['cinter_type'], $row['cinter_typevalue']);
                        echo ' </li>';
                    } 
                   
                    elseif($row['cinter_type'] == 'interivity') {
                        echo '<li id="interivity-card-content" style="background-color: white">';
                        Members_Model::interivity_post_style($row['cinter_type'], $row['cinter_content']);
                        echo ' </li>';
                    }
                    
                    elseif ($row['cinter_type'] !== '') {
                        echo '<li id="interivity-card-content" style="background-color: white">';
                        Members_Model::interivity_post_style($row['cinter_type'], $row['cinter_typevalue']);
                        echo ' </li>';
                    } 
                }
                ?>
            </ul><!-- end #widget-list -->   
        </div><!-- end #widget-left -->  
    </div>
