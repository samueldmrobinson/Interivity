

<section class="wrap">
   <?php
     require_once 'profile-left-main.php';
     ?>
    <!-- end #sidebar-midle -->  
    <div class="stream">
        <div class="interivities-stream">
            <ul class="interivities-stream-list">
                <?php
                foreach ($this->data as $row) {
                    echo '<li id="interivity-card" style="background-color: white">';
                      
                    echo '<a href="' . URL . 'view/' . $row['minter_id'] . '/"><img id="img-profile-box" src="' . URL . $row['photo_path'] . '" alt="article img" /></a>';
                   
                    echo ' <div class="meta-date">';
                    
                    echo ' <div class="category"><a href="' . URL . 'interivities/' . $row['cinter_type'] . '/">' . $row['cinter_type'] . '</a></div>';
                    echo '   <div class="' . $row['cinter_classtype'] . '"></div>';
                    if ($row['cinter_promoted'] == '1') {
                        echo '   <div class="category"><a href"interivities/promoted/">Promoted</a></div>';
                    }
                      
                      echo '<div class="clear"></div>';
             
                    
                   
                    echo ' </div>';

                    if ($row['minter_displayname'] == '') {
                        $posted = $row['minter_firstname'] . '&nbsp' . $row['minter_lastname'];
                    } else {
                        $posted = $row['minter_displayname'];
                    }

                    echo '<a href="' . URL . 'members/view/' . $row['minter_id'] . '/"><h6>' . $posted . '</a> : <a href="' . URL . 'members/post/' . $row['cinter_id'] . '/">' . $row['cinter_title'] . ' </h6></a> ';
                    // '<div id="shareinterivity"><a href="#">Share</a></div> ';
                    echo ' </li>';

                   
            if ($row['cinter_type'] == 'youtube') {
                echo '<li id="interivity-card-content-youtube" style="background-color: black">';
                Members_Model::interivity_post_style($row['cinter_type'], $row['cinter_typevalue']);
                echo ' </li>';
            } elseif ($row['cinter_type'] == 'interivity') {
                echo '<li id="interivity-card-content" style="background-color: white">';
                Members_Model::interivity_post_style($row['cinter_type'], $row['cinter_content']);
                echo ' </li>';
            } elseif ($row['cinter_type'] !== '') {
                echo '<li id="interivity-card-content" style="background-color: white">';
                Members_Model::interivity_post_style($row['cinter_type'], $row['cinter_typevalue']);
                echo ' </li>';
            }
                }

                echo '<li id="interivity-card-comment" style="background-color: white">';
                if (count($this->cdata) > 0) {
                    echo '<div class="accordionButton3"> Comments (' . count($this->cdata) . ') </div>';
                     echo '<div class="accordionContent">';
                      echo '<div id="comments">';
                       echo '<ul class="comment">';

                    foreach ($this->cdata as $comment) {
                        echo '<li>';
                         echo '<a href="'. URL .'members/view/'.$comment['minter_id'].'/"><img src = "'. URL . $comment['photo_path'] . '" class = "avatar" alt = "' . $comment['minter_displayname'] . '" /></a>';
                          echo '<span class = "comment-author"><a href = "'. URL .'members/view/'.$comment['minter_id'].'/">' . $comment['minter_displayname'] . '</a></span>';
                           echo '<span class = "comment-date">' . Members_Model::timeago($comment['comment_timestamp']) . '</span>';
                            echo '<br />';
                             echo '<div class = "comment-body">';
                              echo $comment['comment_text'];
                             echo '</div>';
                         echo '</li>';
                    }
 
                      echo '</ul> ';
                     echo '</div>';
                    echo '</div>';
                }
                echo '<div class="accordionButton3">Post Comment</div>';
                echo '<div class="accordionContent">';
                echo '<div id="respond">';
                echo '<form action="'. URL .'members/post_comment/" method="post" id="commentform">';
             
                echo '<textarea id="comment" name="comment_text" cols="45" rows="8" placeholder="write your comment here..." ></textarea> ';
               
                echo '<div class="clear"></div>';
                echo '<input type="hidden" name="minter_id" value="'. Session::get('loggedIn', 'minter_id') .'" />';
                echo '<input type="hidden" name="type" value="comment" />';
                echo '<input type="hidden" name="cinter_id" value="'.$this->data[0]['cinter_id'].'" />';
                echo '<input type="submit" name="submit" class="submitcomm" value="Submit Comment"  /> ';
                echo '</form>';
                echo '</div>';
                echo '</div>';
                echo '<div class="clear"></div>';
                echo '<br />';
                echo '<div align="right">Report <a href="#">Content</a>';

                if (count($this->cdata) > 0) {
                    echo ' / <a href="#">Comment</a>';
                }
                echo'</div> ';


                echo ' </li>';
                ?>



            </ul><!-- end #widget-list -->   
        </div><!-- end #widget-left -->  
    </div>
