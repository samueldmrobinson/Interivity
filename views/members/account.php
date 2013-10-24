<section id="main">
    <div class="row">
        <div id="entry-title" class="twelve columns relative">
            <h2 class="content-title">
                <span onclick="javascript:act.like(6, '.like-6', 1);" class="ilove set-like voteaction">
                    <div class="top_love_6 top_love" style="display: none;"></div>
                    <em><img src="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/heart.caption.png" height="24" width="24" class="zoom-heart1" style="position: absolute; width: 44px; height: 44px; background-image: none; margin: 2px 8px 6px -8px; opacity: 0; background-position: initial initial; background-repeat: initial initial;"><img src="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/heart.caption.png" height="24" width="24" class="zoom-heart1" style="position: absolute; width: 44px; height: 44px; background-image: none; margin: 2px 8px 6px -16px; opacity: 0; background-position: initial initial; background-repeat: initial initial;"><img src="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/heart.caption.png" height="24" width="24" class="zoom-heart1" style="position: absolute; width: 44px; height: 44px; background-image: none; margin: 2px 8px 6px -24px; opacity: 0; background-position: initial initial; background-repeat: initial initial;"><img src="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/heart.caption.png" height="24" width="24" class="zoom-heart1" style="position: absolute; width: 44px; height: 44px; background-image: none; margin: 2px 8px 6px -32px; opacity: 0; background-position: initial initial; background-repeat: initial initial;"><img src="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/heart.caption.png" height="24" width="24" class="zoom-heart1" style="position: absolute; width: 44px; height: 44px; background-image: none; margin: 2px 8px 6px -40px; opacity: 0; background-position: initial initial; background-repeat: initial initial;"><strong class="like-6">7</strong></em>
                </span>
                My account </h2>
            <nav class="hotkeys-meta">
                <span class="nav-previous no-zoom"><a href="http://demo.cosmothemes.com/serpent/newsletter/" rel="prev">Previous</a></span>
                <span class="nav-next"></span>
            </nav>
        </div>
    </div>
    <div class="row">
        <div id="primary" class="twelve columns">
            <div id="content" role="main">
                <iframe name="hidden_upload_iframe" class="hidden"></iframe>
                <script type="text/javascript">
                    Cosmo_Uploader.template_directory_uri = "http://demo.cosmothemes.com/serpent/wp-content/themes/serpent";
                    Cosmo_Uploader.init();
                </script>
                <div class="cosmo_uploader_interface cosmo_floating_uploader hidden" id="floating_uploader" style="top: 285px; left: 345.890625px;">
                    <div class="cui_thumbnail_container">
                        <div class="cui_upload_button_container cui_add_button">
                            <img src="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/images/upload.png">
                            <form class="cui_form" action="http://demo.cosmothemes.com/serpent/wp-content/themes/serpent/upload-server.php" method="post" enctype="multipart/form-data" target="hidden_upload_iframe">
                                <input type="file" name="files_to_upload[]" class="cui_files_to_upload" tabindex="-1">
                                <input type="hidden" name="type" value="image">
                                <input type="hidden" name="action" value="upload">
                                <input type="hidden" name="sender">
                            </form>
                            <a href="javascript:void(0);">Upload</a>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    window.floating_uploader = Cosmo_Uploader.Basic_Functionality("floating_uploader");
                    Cosmo_Uploader.Featured_Functionality(window.floating_uploader);
                    Cosmo_Uploader.Degenerate_Into_Featured_Image_Uploader(window.floating_uploader);
                </script>
                <script type="">
                </script>
                <article id="post-6" class="post-6 page type-page status-publish hentry post single-post no_bg">
                    <form method="post" id="adduser" action="http://demo.cosmothemes.com/serpent/my-account/">
                        <div class="tabs-container form-profile-pic">
                            <label for="profile-pic">Profile picture</label>
                            <img src="<?php echo URL . $this->user[0]['photo_path']?>" height="100" width="100" alt="" class="photo avatar" style="opacity: 1;"> <span>Click on picture to change it</span>
                           
                            <input type="hidden" name="avatar_id" id="avatar_upload_id" value="-1" class="generic-record generic-single-record ">
                            <script type="text/javascript">
                                Cosmo_Uploader.Get_Floating_Uploader(".form-profile-pic img", "#avatar_upload_id");
                            </script>
                        </div>
                        
                       
                        <div class="tabs-container form-username">
                            <label for="user-name">Username</label>
                            <input class="text-input" name="user-name" type="text" id="user-name" value="<?php echo $this->user[0]['minter_displayname'] ?>">
                        </div> 
                        <div class="tabs-container form-username">
                            <label for="first-name">First name</label>
                            <input class="text-input" name="first-name" type="text" id="first-name" value="<?php echo $this->user[0]['minter_firstname']  ?>">
                        </div> 
                        <div class="tabs-container form-username">
                            <label for="last-name">Last name</label>
                            <input class="text-input" name="last-name" type="text" id="last-name" value="<?php echo $this->user[0]['minter_lastname'] ?>">
                        </div> 
                        <div class="tabs-container form-email">
                            <label for="email">E-mail *</label>
                            <input class="text-input" name="email" type="text" id="email" value="<?php echo $this->user[0]['minter_email'] ?>">
                        </div> 
                        <div class="tabs-container form-url">
                            <label for="url">Website</label>
                            <input class="text-input" name="url" type="text" id="url" value="">
                        </div> 
                        <div class="tabs-container form-password">
                            <label for="pass1">Password * </label>
                            <input class="text-input" name="pass1" type="password" id="pass1">
                        </div> 
                        <div class="tabs-container form-password">
                            <label for="pass2">Repeat password *</label>
                            <input class="text-input" name="pass2" type="password" id="pass2">
                        </div> 
                        <div class="tabs-container form-textarea">
                            <label for="description">Biographical information</label>
                            <textarea name="description" id="description" rows="3" cols="50">Sed blandit enim non mi luctus tempor. Duis sed nulla nulla. Aliquam tincidunt urna eget nibh aliquam at fermentum ligula venenatis. Nullam suscipit eros non est molestie ornare. In egestas sem sollicitudin mi mattis ultrices. Nullam pretium vehicula turpis, sed condimentum lacus euismod quis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam et auctor urna. In tellus neque, viverra sit amet fringilla quis, convallis</textarea>
                        </div> 
                        <p class="form-submit">
                            <input name="updateuser" type="submit" id="updateuser" class="submit button" value="Update">
                            <input type="hidden" id="_wpnonce" name="_wpnonce" value="a6e5af9906"><input type="hidden" name="_wp_http_referer" value="/serpent/my-account/"> <input name="action" type="hidden" id="action" value="update-user">
                        </p>
                    </form>
                </article>
            </div>
        </div>
    </div>
</section>