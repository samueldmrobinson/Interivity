<?php

class Members_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    //Information Gathering 

    public function interivity_featured($arg) {
        $sth = $this->db->prepare("SELECT cinter_id, invertivities.minter_id, photo_path,category_id, category, cinter_classtype, cinter_title FROM `invertivities` 
            LEFT JOIN category_interests 
            ON invertivities.category_id = category_interests.cat_id   
            LEFT JOIN members 
            INNER JOIN members_photos ON members.photo_id = members_photos.photo_id
            ON invertivities.minter_id = members.minter_id 
            WHERE `cinter_featured`='1' ORDER BY `cinter_timestamp` DESC LIMIT " . $arg . "");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getuserimage($user) {

        $sth = $this->db->prepare("SELECT `photo_path` FROM members_photos 
JOIN members ON members.photo_id = members_photos.photo_id AND members_photos.minter_id = " . $user . " LIMIT 1
");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function peoplelikeyou($interest, $user) {
        $interests = explode(',', $interest);
        $sth = $this->db->prepare("SELECT minter_firstname, minter_lastname, minter_displayname, photo_path FROM members 
            LEFT JOIN members_photos ON members.photo_id = members_photos.photo_id
            WHERE `minter_interests` LIKE '%" . $interests[0] . "%' 
              AND `minter_interests` LIKE '%" . $interests[1] . "%'
              AND `minter_interests` LIKE '%" . $interests[2] . "%'
              AND members.minter_id <> '" . $user . "'
              LIMIT 6 ORDER BY RAND();
              ");
        $sth->execute();
        //AND minter_personality LIKE '%1%'
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getuserdata($arg) {
        $sth = $this->db->prepare('SELECT members.minter_id, minter_firstname, minter_lastname, minter_dob, minter_activated, minter_email, minter_interests, minter_personality, minter_twitter, minter_facebookid, minter_displayname, photo_path
                                   FROM members INNER JOIN members_photos ON members.photo_id = members_photos.photo_id WHERE members.minter_id = :user_id');
        $sth->execute(array(
            ':user_id' => $arg
        ));
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function comment_post($arg) {
        $sth = $this->db->prepare("SELECT comment_id, invertivity_comments.minter_id, comment_text, comment_type, comment_response, comment_timestamp, photo_path, minter_firstname, minter_lastname, minter_displayname FROM `invertivity_comments`
            LEFT JOIN members 
            ON invertivity_comments.minter_id = members.minter_id   
            INNER JOIN members_photos ON members.photo_id = members_photos.photo_id
            WHERE invertivity_id = '" . $arg . "' ORDER BY comment_timestamp DESC");
        $data = $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserGlobal($id) {

        $sth = $this->db->prepare("SELECT `minter_id`,`minter_firstname`,`minter_lastname`,`minter_dob`,`minter_email`,`minter_displayname`,`minter_location`,`minter_morn_mood`,
`minter_morn_clr`,`minter_morn_bkgnd`,`minter_afte_mood`,`minter_afte_clr`,`minter_afte_bkgnd`,`minter_evn_mood`,`minter_evn_clr`,`minter_evn_bkgnd`,`minter_evn_bkgnd` FROM `members` WHERE minter_id = :user_id");
        $sth->execute(array(
            ":user_id" => $id
        ));
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function interivity_post($arg) {
        $sth = $this->db->prepare("SELECT invertivities.minter_id,minter_firstname, minter_lastname, minter_displayname, photo_path, cinter_id, category, cinter_classtype, cinter_title, cinter_type, cinter_typevalue, cinter_promoted, cinter_content    FROM `invertivities` 
            LEFT JOIN category_interests 
            ON invertivities.category_id = category_interests.cat_id   
            LEFT JOIN members 
            INNER JOIN members_photos ON members.photo_id = members_photos.photo_id
            ON invertivities.minter_id = members.minter_id 
            WHERE `cinter_id`='" . $arg . "' ORDER BY `cinter_timestamp` DESC LIMIT " . $arg . "");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function inyourarea() {
        $this->location = Session::get('loggedIn', 'minter_location');
        $this->location = explode(',', $this->location);

        $sth = $this->db->prepare("SELECT cinter_id, invertivities.minter_id, photo_path, category, cinter_classtype, cinter_type, cinter_typevalue ,cinter_title, category_id, loc_city FROM `invertivities` LEFT JOIN category_interests 
            ON invertivities.category_id = category_interests.cat_id   
            LEFT JOIN members 
            INNER JOIN members_photos ON members.photo_id = members_photos.photo_id
            ON invertivities.minter_id = members.minter_id  WHERE loc_city = '" . $userlocation[0] . "'ORDER BY cinter_timestamp DESC LIMIT 5 ");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function browse($arg, $arg2 = false) {
        $_vars = array("method", "type");
        if ($arg2) {
            return compact($arg, $arg2, $_vars);
        } else {
            return compact($arg, 'null', $_vars);
        }
    }

    public function fil_brwse() {


        $sth = $this->db->prepare("SELECT DISTINCT loc_country FROM invertivities ORDER BY loc_country ASC");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    // Streams
    
        public function stream_cc() {
            
        $offset = is_numeric($_POST['offset']) ? $_POST['offset'] : die();
        $postnumbers = is_numeric($_POST['number']) ? $_POST['number'] : die();    

        $sth = $this->db->prepare('SELECT loc_country, loc_city FROM invertivities GROUP BY (loc_city) ORDER BY loc_city ASC LIMIT ' . $postnumbers . ' OFFSET ' . $offset);
        $sth->execute();

        foreach ($sth->fetchAll(PDO::FETCH_ASSOC) as $row) {
            if($row['loc_city'] !== ''){
            
            if($row['loc_country'] !== ''){
            
            echo '<li id="interivity-card" style="background-color: white">';

            echo ' <div class="meta-date">';
            echo ' <div class="category"><a href="' . URL . 'members/countries/' . strtolower($row['loc_country']) . '/">' . $row['loc_country'] . '</a></div>';

            echo ' </div>';
            echo '<a href="' . URL . 'members/cities/' . strtolower($row['loc_city']) . '"><h6>' . ucfirst(strtolower($row['loc_city'])). '</a></h6>';
            echo ' </li>';
        }
       }
      }
    }
        public function stream_ccoc() {
            
        $offset = is_numeric($_POST['offset']) ? $_POST['offset'] : die();
        $postnumbers = is_numeric($_POST['number']) ? $_POST['number'] : die();    

        $sth = $this->db->prepare('SELECT loc_country, loc_city FROM invertivities GROUP BY (loc_country) ORDER BY loc_city ASC LIMIT ' . $postnumbers . ' OFFSET ' . $offset);
        $sth->execute();

        foreach ($sth->fetchAll(PDO::FETCH_ASSOC) as $row) {
            
            
            if($row['loc_country'] !== ''){
            
            echo '<li id="interivity-card" style="background-color: white">';

            echo ' <div class="meta-date">';
            echo ' <div class="category"><a href="#">' . $row['loc_country'] . '</a></div>';

            echo ' </div>';
            echo '<a href="' . URL . 'members/countries/' . strtolower($row['loc_country']) . '"><h6>' . ucfirst(strtolower($row['loc_country'])). '</a></h6>';
            echo ' </li>';
        
       }
      }
    }
    

    public function invertivities_stream($arg) {

        $offset = is_numeric($_POST['offset']) ? $_POST['offset'] : die();
        $postnumbers = is_numeric($_POST['number']) ? $_POST['number'] : die();

        //Change Query to Left Join and INNER Join for Performance
        $sth = $this->db->prepare('SELECT invertivities.minter_id, cinter_id , cinter_title, cinter_typevalue, cinter_type, invertivities.cinter_content, cinter_classtype, cinter_promoted, minter_firstname, minter_lastname, minter_displayname, photo_path  
        
        FROM  `invertivities`
        LEFT JOIN members ON members.minter_id = invertivities.minter_id 
        LEFT JOIN members_photos ON members.photo_id = members_photos.photo_id
        WHERE invertivities.minter_id = :user_id ORDER BY cinter_timestamp DESC LIMIT ' . $postnumbers . ' OFFSET ' . $offset);
        $sth->execute(array(
            ':user_id' => $arg
        ));

        foreach ($sth->fetchAll(PDO::FETCH_ASSOC) as $row) {

            echo '<div id="post-1052" class="post-1052 post type-post status-pending format-image hentry category-uncategorized post">';
            echo '<div class="entry-content">';
            echo '<h2 class="caption">'.$row['cinter_title'].'</h2>';
            echo '<div class="entry-meta">';
            echo '<ul>';
            echo '<li class="edit_post" title="Edit post"><a href="http://demo.cosmothemes.com/serpent/submit/?post=1052">Edit</a></li>';
            echo '<li class="delete_post" title="Remove post"><a href="javascript:void(0)">Delete</a></li>';
            echo '</ul>';
            echo '</div>';
            echo '<div class="excerpt bottom-separator">';
            echo '<p>https://www.youtube.com/watch?v=5ZmV8b1wr10</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '<p class="delimiter">&nbsp;</p>';
        }
    }

    public function category_interivities_steam($arg) {

        $offset = is_numeric($_POST['offset']) ? $_POST['offset'] : die();
        $postnumbers = is_numeric($_POST['number']) ? $_POST['number'] : die();

        //Change Query to Left Join and INNER Join for Performance
        $sth = $this->db->prepare('SELECT invertivities.minter_id, cinter_id , cinter_title, cinter_typevalue, cinter_type, invertivities.cinter_content, cinter_classtype, cinter_promoted, minter_firstname, minter_lastname, minter_displayname, photo_path  
        
        FROM  `invertivities`
        LEFT JOIN members ON members.minter_id = invertivities.minter_id 
        LEFT JOIN members_photos ON members.photo_id = members_photos.photo_id
        WHERE invertivities.category_id = ' . $arg . ' ORDER BY cinter_timestamp DESC LIMIT ' . $postnumbers . ' OFFSET ' . $offset);
        $sth->execute();

        foreach ($sth->fetchAll(PDO::FETCH_ASSOC) as $row) {

            echo $this->userphoto['photo_path'];
            echo '<li id="interivity-card" style="background-color: white" syncid="' . $row['cinter_id'] . '">';
            echo '<a href="single-image.html"><img id="img-profile-box" src="' . URL . $row['photo_path'] . '" alt="article img" /></a>';
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
            echo '<a href="' . URL . 'members/view/' . $row['minter_id'] . '/"><h6>' . $posted . '</a> : <a href="' . URL . 'members/post/' . $row['cinter_id'] . '/">' . $row['cinter_title'] . ' </h6></a> ';




            echo ' <div class="interivity-icon-layer">';
            echo ' <div class="interivity-icon">';
            echo ' <div class="interivity-shine">';

            echo '<ul class="interivity-iconmenu">';


            echo '<li>';
            echo '<a id="comment-post-icon" DataID="' . $row['photo_id'] . '" DataType="comment-post" class="options-icons"  href="#comment-post" name="modal" style="text-decoration: none;" onclick="javascript:show();"><img src="' . URL . 'icons/blog.png" /></a>';
            echo '</li>';
            echo '<li>';
            echo '<a id="update-profile-picture-icon" DataID="' . $row['photo_id'] . '" DataType="update-profile-picture" class="options-icons"  href="#update-profile-picture" name="modal" style="text-decoration: none;" onclick="javascript:show();"><img src="' . URL . 'icons/user.png" /></a>';
            echo '</li>';
            echo '<li>';
            echo '<a id="settings-for-image-icon" DataID="' . $row['photo_id'] . '" DataType="settings-for-image"  class="options-icons"  href="#settings-for-image" name="modal" style="text-decoration: none;" onclick="javascript:show();"><img src="' . URL . 'icons/config.png" /></a>';
            echo '</li>';

            echo '</ul>';
            echo ' </div>';
            echo ' </div>';
            echo ' </div>';
            echo ' </li>';

            if ($row['cinter_type'] == 'youtube') {
                echo '<li id="interivity-card-content-youtube" style="background-color: black">';
                $this->interivity_post_style($row['cinter_type'], $row['cinter_typevalue']);
                echo ' </li>';
            } elseif ($row['cinter_type'] == 'interivity') {
                echo '<li id="interivity-card-content" style="background-color: white">';
                $this->interivity_post_style($row['cinter_type'], $row['cinter_content']);
                echo ' </li>';
            } elseif ($row['cinter_type'] !== '') {
                echo '<li id="interivity-card-content" style="background-color: white">';
                $this->interivity_post_style($row['cinter_type'], $row['cinter_typevalue']);
                echo ' </li>';
            }
        }
    }

    public function local_invertivities_steam() {
        $offset = is_numeric($_POST['offset']) ? $_POST['offset'] : die();
        $postnumbers = is_numeric($_POST['number']) ? $_POST['number'] : die();
        $this->location = Session::get('loggedIn', 'minter_location');
        $this->location = explode(',', $this->location);


        //Change Query to Left Join and INNER Join for Performance
        $sth = $this->db->prepare('SELECT invertivities.minter_id, cinter_id , cinter_title, cinter_typevalue  ,cinter_type, cinter_content, cinter_classtype, cinter_promoted, minter_firstname, minter_lastname, minter_displayname, photo_path FROM  `invertivities`
        LEFT JOIN members ON members.minter_id = invertivities.minter_id 
        LEFT JOIN members_photos ON members.photo_id = members_photos.photo_id
        WHERE invertivities.loc_city = :loc_city ORDER BY cinter_timestamp DESC LIMIT ' . $postnumbers . ' OFFSET ' . $offset);
        $sth->execute(array(
            ':loc_city' => $this->location[0]
        ));
        foreach ($sth->fetchAll(PDO::FETCH_ASSOC) as $row) {

            echo $this->userphoto['photo_path'];
            echo '<li id="interivity-card" style="background-color: white">';
            echo '<a href="single-image.html"><img id="img-profile-box" src="' . URL . $row['photo_path'] . '" alt="article img" /></a>';
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
            echo '<a href="' . URL . 'members/view/' . $row['minter_id'] . '/"><h6>' . $posted . '</a> : <a href="' . URL . 'members/post/' . $row['cinter_id'] . '/">' . $row['cinter_title'] . ' </h6></a> ';
            echo ' </li>';

            if ($row['cinter_type'] == 'youtube') {
                echo '<li id="interivity-card-content-youtube" style="background-color: black">';
                $this->interivity_post_style($row['cinter_type'], $row['cinter_typevalue']);
                echo ' </li>';
            } elseif ($row['cinter_type'] == 'interivity') {
                echo '<li id="interivity-card-content" style="background-color: white">';
                $this->interivity_post_style($row['cinter_type'], $row['cinter_content']);
                echo ' </li>';
            } elseif ($row['cinter_type'] !== '') {
                echo '<li id="interivity-card-content" style="background-color: white">';
                $this->interivity_post_style($row['cinter_type'], $row['cinter_typevalue']);
                echo ' </li>';
            }
        }
    }

    public function country_invertivities_steam() {

        $offset = is_numeric($_POST['offset']) ? $_POST['offset'] : die();
        $postnumbers = is_numeric($_POST['number']) ? $_POST['number'] : die();
        $this->location = Session::get('loggedIn', 'minter_location');
        $this->location = explode(',', $this->location);


        //Change Query to Left Join and INNER Join for Performance
        $sth = $this->db->prepare('SELECT invertivities.minter_id, cinter_id , cinter_title, cinter_typevalue  ,cinter_type, cinter_content, cinter_classtype, cinter_promoted, minter_firstname, minter_lastname, minter_displayname, photo_path FROM  `invertivities`
        LEFT JOIN members ON members.minter_id = invertivities.minter_id 
        LEFT JOIN members_photos ON members.photo_id = members_photos.photo_id
        WHERE invertivities.loc_country = :loc_country ORDER BY cinter_timestamp DESC LIMIT ' . $postnumbers . ' OFFSET ' . $offset);
        $sth->execute(array(
            ':loc_country' => $this->location[1]
        ));
        foreach ($sth->fetchAll(PDO::FETCH_ASSOC) as $row) {

            echo $this->userphoto['photo_path'];
            echo '<li id="interivity-card" style="background-color: white">';
            echo '<a href="single-image.html"><img id="img-profile-box" src="' . URL . $row['photo_path'] . '" alt="article img" /></a>';
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
            echo '<a href="' . URL . 'members/view/' . $row['minter_id'] . '/"><h6>' . $posted . '</a> : <a href="' . URL . 'members/post/' . $row['cinter_id'] . '/">' . $row['cinter_title'] . ' </h6></a> ';
            echo ' </li>';

            if ($row['cinter_type'] == 'youtube') {
                echo '<li id="interivity-card-content-youtube" style="background-color: black">';
                $this->interivity_post_style($row['cinter_type'], $row['cinter_typevalue']);
                echo ' </li>';
            } elseif ($row['cinter_type'] == 'interivity') {
                echo '<li id="interivity-card-content" style="background-color: white">';
                $this->interivity_post_style($row['cinter_type'], $row['cinter_content']);
                echo ' </li>';
            } elseif ($row['cinter_type'] !== '') {
                echo '<li id="interivity-card-content" style="background-color: white">';
                $this->interivity_post_style($row['cinter_type'], $row['cinter_typevalue']);
                echo ' </li>';
            }
        }
    }

    public function invertivities_slidesteam($arg) {
        //Change Query to Left Join and INNER Join for Performance
        $sth = $this->db->prepare('SELECT * FROM `invertivities` 
            LEFT JOIN category_interests 
            ON invertivities.category_id = category_interests.cat_id   
            LEFT JOIN members 
            INNER JOIN members_photos ON members.photo_id = members_photos.photo_id
            ON invertivities.minter_id = members.minter_id 
            ORDER BY `cinter_timestamp` DESC');
        $sth->execute(array(
            ':user_id' => $arg
        ));
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    //Structure HTML          

    public function interivity_post_style($type, $value) {
        switch ($type) {

            case 'interivity':

                echo ' <p class="p-iter">' . $value . '</p>  <div style="margin-top: +5px;" ><div>';
                break;

            case 'youtube':
                $video_id = explode("?v=", $value);
                $video_id = $video_id[1];
                echo '<iframe width="100%" height="100%" src="//www.youtube.com/embed/' . $video_id . '" frameborder="0" allowfullscreen></iframe>';
                break;
            case 'soundcloud':

                $url = 'http://api.soundcloud.com/resolve.json?url=' . $value . '&client_id=7ac001e0adc4fdf6cb90ded48fded899';
                $result = json_decode(file_get_contents($url), true);
                $result = explode('/', $result['location']);
                $result = explode('.', $result['4']);

                echo '<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F' . $result[0] . '"></iframe>';
                break;
            case 'instagram':
                $url = $value;
                $url = rtrim($url, '/');
                $ex = explode('/', $url);
                $url = 'http://api.instagram.com/oembed?url=http://instagr.am/p/' . $ex['4'] . '/';
                $result = json_decode(file_get_contents($url), true);
                echo ' <iframe id="instagram-content-block" style="align:center;" width="' . $result['width'] . '" height="' . $result['height'] . '" src="' . $result['url'] . '"></iframe>';
                break;
        }
    }

    public function interivity_slide_style($type, $value) {
        switch ($type) {
            case 'youtube':
                $video_id = explode("?v=", $value);
                $video_id = $video_id[1];
                echo '<iframe width="350" height="210" src="//www.youtube.com/embed/' . $video_id . '" frameborder="0" allowfullscreen></iframe>';
                break;
            case 'soundcloud':

                $url = 'http://api.soundcloud.com/resolve.json?url=' . $value . '&client_id=7ac001e0adc4fdf6cb90ded48fded899';
                $result = json_decode(file_get_contents($url), true);
                $result = explode('/', $result['location']);
                $result = explode('.', $result['4']);

                echo '<iframe width="400px" height="120" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F' . $result[0] . '"></iframe>';

                break;
        }
    }

    public function hmefeed_interest($interest) {
        $exin = explode(',', $interest);
        $ranexin = count($exin);
        $rand = array_rand($exin, 1);
        $arrsea = array_search($i, $exin);



        $sth = $this->db->prepare("SELECT cinter_id, invertivities.minter_id, photo_path, category, cinter_classtype, cinter_type, cinter_typevalue ,cinter_title, category_id FROM `invertivities` 
            LEFT JOIN category_interests 
            ON invertivities.category_id = category_interests.cat_id   
            LEFT JOIN members 
            INNER JOIN members_photos ON members.photo_id = members_photos.photo_id
            ON invertivities.minter_id = members.minter_id 
           
           WHERE invertivities.category_id = '" . $exin[1] . "'   ORDER BY `cinter_timestamp` DESC LIMIT 10");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function lhmefeed_interest($interest) {
        $exin = explode(',', $interest);
        $ranexin = count($exin);
        $rand = array_rand($exin, 1);
        $arrsea = array_search($i, $exin);



        $sth = $this->db->prepare("SELECT cinter_id, invertivities.minter_id, photo_path, category, cinter_classtype, cinter_type, cinter_typevalue ,cinter_title, category_id FROM `invertivities` 
            LEFT JOIN category_interests 
            ON invertivities.category_id = category_interests.cat_id   
            LEFT JOIN members 
            INNER JOIN members_photos ON members.photo_id = members_photos.photo_id
            ON invertivities.minter_id = members.minter_id 
           
           WHERE invertivities.category_id = '" . $exin[0] . "'   ORDER BY `cinter_timestamp` DESC LIMIT 10");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function rhmefeed_interest($interest) {
        $exin = explode(',', $interest);
        $ranexin = count($exin);
        $rand = array_rand($exin, 1);
        $arrsea = array_search($i, $exin);



        $sth = $this->db->prepare("SELECT cinter_id, invertivities.minter_id, photo_path, category, cinter_classtype, cinter_type, cinter_typevalue ,cinter_title, category_id FROM `invertivities` 
            LEFT JOIN category_interests 
            ON invertivities.category_id = category_interests.cat_id   
            LEFT JOIN members 
            INNER JOIN members_photos ON members.photo_id = members_photos.photo_id
            ON invertivities.minter_id = members.minter_id 
           
           WHERE invertivities.category_id = '" . $exin[1] . "'   ORDER BY `cinter_timestamp` DESC LIMIT 10");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function lrhmefeed_interest($interest) {
        $exin = explode(',', $interest);
        $ranexin = count($exin);
        $rand = array_rand($exin, 1);
        $arrsea = array_search($i, $exin);



        $sth = $this->db->prepare("SELECT cinter_id, invertivities.minter_id, photo_path, category, cinter_classtype, cinter_type, cinter_typevalue ,cinter_title, category_id FROM `invertivities` 
            LEFT JOIN category_interests 
            ON invertivities.category_id = category_interests.cat_id   
            LEFT JOIN members 
            INNER JOIN members_photos ON members.photo_id = members_photos.photo_id
            ON invertivities.minter_id = members.minter_id 
           
           WHERE invertivities.category_id = '" . $exin[2] . "'   ORDER BY `cinter_timestamp` DESC LIMIT 10");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function rlhmefeed_interest($interest) {
        $exin = explode(',', $interest);
        $ranexin = count($exin);
        $rand = array_rand($exin, 1);
        $arrsea = array_search($i, $exin);



        $sth = $this->db->prepare("SELECT cinter_id, invertivities.minter_id, photo_path, category, cinter_classtype, cinter_type, cinter_typevalue ,cinter_title, category_id FROM `invertivities` 
            LEFT JOIN category_interests 
            ON invertivities.category_id = category_interests.cat_id   
            LEFT JOIN members 
            INNER JOIN members_photos ON members.photo_id = members_photos.photo_id
            ON invertivities.minter_id = members.minter_id 
           
           WHERE invertivities.category_id = '" . $exin[3] . "'   ORDER BY `cinter_timestamp` DESC LIMIT 10");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function yourinterestshme($interests) {
        $exin = explode(',', $interests);
        $date = date('Y-m-d 00:00:00');
        foreach ($exin as $value) {
            $sth = $this->db->prepare("SELECT *, (SELECT COUNT(*) FROM invertivities WHERE category_id = '" . $value . "' AND cinter_timestamp > '" . $date . "'  ) AS number_posts FROM `category_interests` WHERE cat_id = '" . $value . "' ");
            $sth->execute();
            foreach ($sth->fetchAll(PDO::FETCH_ASSOC) as $interest) {
                $items[] = $interest;
            }
        }
        foreach ($items as $row) {
            if (strlen($row['category']) > '13') {
                $b .= '<li><a href="' . URL . 'members/category/' . $row['cat_id'] . '/">' . substr($row['category'], 0, 13) . '...<span>(' . $row['number_posts'] . ')</span></a></li>';
            } else {

                $b .= '<li><a href="' . URL . 'members/category/' . $row['cat_id'] . '/">' . $row['category'] . '<span>(' . $row['number_posts'] . ')</span></a></li>';
            }
        }
        return $b;
    }

    public function yourinterests($interests) {
        $exin = explode(',', $interests);
        $date = date('Y-m-d 00:00:00');
        foreach ($exin as $value) {
            $sth = $this->db->prepare("SELECT * FROM `category_interests` WHERE cat_id = '" . $value . "' ");
            $sth->execute();
            foreach ($sth->fetchAll(PDO::FETCH_ASSOC) as $interest) {
                $items[] = $interest;
            }
        }
        foreach ($items as $row) {
            if (strlen($row['category']) > '13') {
                $b .= '<li><a href="' . URL . 'members/category/' . $row['cat_id'] . '/">' . substr($row['category'], 0, 13) . '...</span></a></li>';
            } else {

                $b .= '<li><a href="' . URL . 'members/category/' . $row['cat_id'] . '/">' . $row['category'] . '</a></li>';
            }
        }
        return $b;
    }

    public function yourinterests_account($interests) {
        $exin = explode(',', $interests);
        //print_R ($exin);
        foreach ($exin as $value) {
            $sth = $this->db->prepare("SELECT * FROM category_interests WHERE cat_id = '" . $value . "' ");
            $sth->execute();
            //print_r($sth->fetchAll(PDO::FETCH_ASSOC));
            foreach ($sth->fetchAll(PDO::FETCH_ASSOC) as $interest) {
                // print_r($interest);
                $items[] = $interest;
            }
        }
        //print_r($items);
        foreach ($items as $row) {

            $b .= ' <input id="author" name="author" type="text" style="margin-top: +10px;" value="' . $row['category'] . '" size="30" /><br />';
            //print_r($row);
        }
        return $b;
    }

    public function yourinterests_pview($user) {

        $sth = $this->db->prepare('SELECT  minter_interests FROM members WHERE minter_id = :user_id');
        $sth->execute(array(
            ':user_id' => $user
        ));
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        $exin = explode(',', $result[0]['minter_interests']);

        foreach ($exin as $value) {
            $sth = $this->db->prepare("SELECT * FROM `category_interests` WHERE cat_id = '" . $value . "' ");
            $sth->execute();
            foreach ($sth->fetchAll(PDO::FETCH_ASSOC) as $interest) {
                $items[] = $interest;
            }
        }
        foreach ($items as $row) {
            if (strlen($row['category']) > '13') {
                $b .= '<li><a href="' . URL . 'members/category/' . $row['cat_id'] . '/">' . substr($row['category'], 0, 13) . '...</span></a></li>';
            } else {

                $b .= '<li><a href="' . URL . 'members/category/' . $row['cat_id'] . '/">' . $row['category'] . '</a></li>';
            }
        }
        return $b;
    }

    public function user_photos($userid) {
        $sth = $this->db->prepare("SELECT * FROM `members_photos` WHERE minter_id = '" . $userid . "'");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function statistics($user) {
        
    }

    // User Interations

    public function follow($following, $follower) {

        $sth = $this->db->prepare("INSERT INTO  `a2261530_interiv`.`following` (
`follow_id` ,
`following` ,
`follower` ,
`follow_timestamp`
)
VALUES (
NULL ,  '" . $following . "',  '" . $follower . "', 
CURRENT_TIMESTAMP
);
");
        $sth->execute();

        $ref = $_SERVER['HTTP_REFERER'];

        if ($ref !== '') {

            header('Location:' . $ref);
        } elseif ($ref == '') {

            echo $ref;
        }
    }

    public function unfollow($following, $follower) {

        $sth = $this->db->prepare("DELETE FROM following  WHERE follower = '" . $follower . "' AND following = '" . $following . "' 
");
        $sth->execute();

        $ref = $_SERVER['HTTP_REFERER'];

        if ($ref !== '') {

            header('Location:' . $ref);
        } elseif ($ref == '') {

            echo $ref;
        }
    }

    public function chkfllow($following, $follower) {


        $sth = $this->db->prepare("SELECT COUNT(*) FROM following WHERE following = '" . $following . "' AND follower = '" . $follower . "'");
        $sth->execute();



        return $sth->fetchColumn();
    }

    public function chkblock($block, $user) {


        $sth = $this->db->prepare("SELECT COUNT(*) FROM blocked_list WHERE block_user = '" . $block . "' AND user = '" . $user . "' LIMIT 1");
        $sth->execute();


        return $sth->fetchColumn();
    }

    public function unblock($block_user, $user) {

        $sth = $this->db->prepare("DELETE FROM blocked_list  WHERE block_user = '" . $block_user . "' AND user = '" . $user . "' 
");
        $sth->execute();

        $ref = $_SERVER['HTTP_REFERER'];

        if ($ref !== '') {

            header('Location:' . $ref);
        } elseif ($ref == '') {

            echo $ref;
        }
    }

    public function block($block_user, $user) {

        $sth = $this->db->prepare("INSERT INTO  `a2261530_interiv`.`blocked_list` (
`block_id` ,
`block_user` ,
`user` ,
`timestamp`
)
VALUES (
NULL ,  '" . $block_user . "',  '" . $user . "', 
CURRENT_TIMESTAMP
);
");
        $sth->execute();

        $ref = $_SERVER['HTTP_REFERER'];

        if ($ref !== '') {

            header('Location:' . $ref);
        } elseif ($ref == '') {

            echo $ref;
        }
    }

    // Posting Data
    public function post_interivity($user) {

        $userlocation = $this->geoCheckIP();
        $content = $_POST['content'];
        $title = $_POST['title'];
        $interest = $_POST['interest'];

        $sth1 = $this->db->prepare("SELECT *,(SELECT COUNT(category) FROM category_interests WHERE category = '" . $interest . "') AS count FROM category_interests WHERE category = '" . $interest . "' LIMIT 1");
        $sth1->execute();
        $result = $sth1->fetchAll(PDO::FETCH_ASSOC);

        if ($result[0]['count'] == '') {

            $sth = $this->db->prepare("INSERT INTO `a2261530_interiv`.`category_interests` 
                                 (`cat_id` ,`category`)
                             VALUES 
                                 (NULL ,  '" . $interest . "')");
            $sth->execute();
            $id = $this->db->lastInsertId('cat_id');

            if (strpos($content, 'http') !== false) {
                if (strpos($content, 'youtube') !== false) {
                    $sth = $this->db->prepare("INSERT INTO  `a2261530_interiv`.`invertivities` 
                                         (`cinter_id`, `cinter_type` , `cinter_typevalue` , `cinter_classtype` , `minter_id`, `cinter_title`, `category_id`, `cinter_timestamp`, 
                                          `loc_city`, `loc_country`)
                                           VALUES 
                                         (NULL , 'youtube',  '" . $content . "', 'media-video',  '" . $user . "', '" . $title . "', '" . $id . "',  CURRENT_TIMESTAMP, '" . $userlocation[6] . "', '" . $userlocation[4] . "');");
                    $sth->execute();

                    $ref = $_SERVER['HTTP_REFERER'];

                    if ($ref !== '') {

                        header('Location:' . $ref);
                    } elseif ($ref == '') {

                        echo $ref;
                    }
                } elseif (strpos($content, 'soundcloud') !== false) {
                    $sth = $this->db->prepare("INSERT INTO  `a2261530_interiv`.`invertivities` 
                                         (`cinter_id`, `cinter_type` , `cinter_typevalue` , `cinter_classtype` , `minter_id`, `cinter_title`, `category_id`, `cinter_timestamp`, 
                                          `loc_city`, `loc_country`)
                                           VALUES 
                                         (NULL , 'soundcloud',  '" . $content . "', 'media-video',  '" . $user . "', '" . $title . "', '" . $id . "',  CURRENT_TIMESTAMP, '" . $userlocation[6] . "', '" . $userlocation[4] . "');");
                    $sth->execute();

                    $ref = $_SERVER['HTTP_REFERER'];

                    if ($ref !== '') {

                        header('Location:' . $ref);
                    } elseif ($ref == '') {

                        echo $ref;
                    }
                } elseif (strpos($content, 'instagram') !== false) {
                    $sth = $this->db->prepare("INSERT INTO  `a2261530_interiv`.`invertivities` 
                                         (`cinter_id`, `cinter_type` , `cinter_typevalue` , `cinter_classtype` , `minter_id`, `cinter_title`, `category_id`, `cinter_timestamp`, 
                                          `loc_city`, `loc_country`)
                                           VALUES 
                                         (NULL , 'instagram',  '" . $content . "', 'media-image',  '" . $user . "', '" . $title . "', '" . $id . "',  CURRENT_TIMESTAMP, '" . $userlocation[6] . "', '" . $userlocation[4] . "');");
                    $sth->execute();

                    $ref = $_SERVER['HTTP_REFERER'];

                    if ($ref !== '') {

                        header('Location:' . $ref);
                    } elseif ($ref == '') {

                        echo $ref;
                    }
                } else {
                    $sth = $this->db->prepare("INSERT INTO  `a2261530_interiv`.`invertivities` 
                                         (`cinter_id`, `cinter_type` , `cinter_typevalue` , `cinter_classtype` , `minter_id`, `cinter_title`, `category_id`, `cinter_timestamp`, 
                                          `loc_city`, `loc_country`)
                                           VALUES 
                                         (NULL , 'website',  '" . $content . "', 'media-video',  '" . $user . "', '" . $title . "', '" . $id . "',  CURRENT_TIMESTAMP, '" . $userlocation[6] . "', '" . $userlocation[4] . "');");
                    $sth->execute();

                    $ref = $_SERVER['HTTP_REFERER'];

                    if ($ref !== '') {

                        header('Location:' . $ref);
                    } elseif ($ref == '') {

                        echo $ref;
                    }
                }
            } else {

                $sth = $this->db->prepare("INSERT INTO  `a2261530_interiv`.`invertivities` 
                                         (`cinter_id`,`cinter_content` , `cinter_type` , `cinter_typevalue` , `cinter_classtype` , `minter_id`, `cinter_title`, `category_id`, `cinter_timestamp`, 
                                          `loc_city`, `loc_country`)
                                           VALUES 
                                         (NULL, '" . $content . "' , 'Interivity' , NULL, NULL,  '" . $user . "', '" . $title . "', '" . $id . "',  CURRENT_TIMESTAMP, '" . $userlocation[6] . "', '" . $userlocation[4] . "');");
                $sth->execute();
                $ref = $_SERVER['HTTP_REFERER'];
                if ($ref !== '') {
                    header('Location:' . $ref);
                } elseif ($ref == '') {

                    echo $ref;
                }
            }
        } elseif ($result[0]['count'] !== '') {
            if (strpos($content, 'http') !== false) {
                if (strpos($content, 'youtube') !== false) {
                    $sth = $this->db->prepare("INSERT INTO  `a2261530_interiv`.`invertivities` 
                                         (`cinter_id`, `cinter_type` , `cinter_typevalue` , `cinter_classtype` , `minter_id`, `cinter_title`, `category_id`, `cinter_timestamp`, 
                                          `loc_city`, `loc_country`)
                                           VALUES 
                                         (NULL , 'youtube',  '" . $content . "', 'media-video',  '" . $user . "', '" . $title . "', '" . $result[0]['cat_id'] . "',  CURRENT_TIMESTAMP, '" . $userlocation[6] . "', '" . $userlocation[4] . "');");
                    $sth->execute();

                    $ref = $_SERVER['HTTP_REFERER'];

                    if ($ref !== '') {

                        header('Location:' . $ref);
                    } elseif ($ref == '') {

                        echo $ref;
                    }
                } elseif (strpos($content, 'soundcloud') !== false) {
                    $sth = $this->db->prepare("INSERT INTO  `a2261530_interiv`.`invertivities` 
                                         (`cinter_id`, `cinter_type` , `cinter_typevalue` , `cinter_classtype` , `minter_id`, `cinter_title`, `category_id`, `cinter_timestamp`, 
                                          `loc_city`, `loc_country`)
                                           VALUES 
                                         (NULL , 'soundcloud',  '" . $content . "', 'media-video',  '" . $user . "', '" . $title . "', '" . $result[0]['cat_id'] . "',  CURRENT_TIMESTAMP, '" . $userlocation[6] . "', '" . $userlocation[4] . "');");
                    $sth->execute();

                    $ref = $_SERVER['HTTP_REFERER'];

                    if ($ref !== '') {

                        header('Location:' . $ref);
                    } elseif ($ref == '') {

                        echo $ref;
                    }
                } elseif (strpos($content, 'instagram') !== false) {
                    $sth = $this->db->prepare("INSERT INTO  `a2261530_interiv`.`invertivities` 
                                         (`cinter_id`, `cinter_type` , `cinter_typevalue` , `cinter_classtype` , `minter_id`, `cinter_title`, `category_id`, `cinter_timestamp`, 
                                          `loc_city`, `loc_country`)
                                           VALUES 
                                         (NULL , 'instagram',  '" . $content . "', 'media-image',  '" . $user . "', '" . $title . "', '" . $result[0]['cat_id'] . "',  CURRENT_TIMESTAMP, '" . $userlocation[6] . "', '" . $userlocation[4] . "');");
                    $sth->execute();

                    $ref = $_SERVER['HTTP_REFERER'];

                    if ($ref !== '') {

                        header('Location:' . $ref);
                    } elseif ($ref == '') {

                        echo $ref;
                    }
                } else {
                    $sth = $this->db->prepare("INSERT INTO  `a2261530_interiv`.`invertivities` 
                                         (`cinter_id`, `cinter_type` , `cinter_typevalue` , `cinter_classtype` , `minter_id`, `cinter_title`, `category_id`, `cinter_timestamp`, 
                                          `loc_city`, `loc_country`)
                                           VALUES 
                                         (NULL , 'website',  '" . $content . "', 'media-video',  '" . $user . "', '" . $title . "', '" . $result[0]['cat_id'] . "',  CURRENT_TIMESTAMP, '" . $userlocation[6] . "', '" . $userlocation[4] . "');");
                    $sth->execute();

                    $ref = $_SERVER['HTTP_REFERER'];

                    if ($ref !== '') {

                        header('Location:' . $ref);
                    } elseif ($ref == '') {

                        echo $ref;
                    }
                }
            } else {

                $sth = $this->db->prepare("INSERT INTO  `a2261530_interiv`.`invertivities` 
                                         (`cinter_id`,`cinter_content` , `cinter_type` , `cinter_typevalue` , `cinter_classtype` , `minter_id`, `cinter_title`, `category_id`, `cinter_timestamp`, 
                                          `loc_city`, `loc_country`)
                                           VALUES 
                                         (NULL, '" . $content . "' , 'Interivity' , NULL, NULL,  '" . $user . "', '" . $title . "', '" . $result[0]['cat_id'] . "',  CURRENT_TIMESTAMP, '" . $userlocation[6] . "', '" . $userlocation[4] . "');");
                $sth->execute();
                $ref = $_SERVER['HTTP_REFERER'];
                if ($ref !== '') {
                    header('Location:' . $ref);
                } elseif ($ref == '') {

                    echo $ref;
                }
            }
        }
    }

    public function post_comment() {


        $sth = $this->db->prepare("INSERT INTO `a2261530_interiv`.`invertivity_comments` 
                                 (`comment_id`, `minter_id`, `invertivity_id`, `comment_text`, `comment_type`, `comment_response`, `comment_timestamp`) 
                                  VALUES 
                                 (NULL, :mid, :iid, :ct, :ctt, '', CURRENT_TIMESTAMP);");
        $sth->execute(array(
            ':mid' => $_POST['minter_id'],
            ':iid' => $_POST['cinter_id'],
            ':ct' => $_POST['comment_text'],
            ':ctt' => $_POST['type']
        ));

        $ref = $_SERVER['HTTP_REFERER'];

        if ($ref !== '') {

            header('Location:' . $ref);
        } elseif ($ref == '') {

            echo $ref;
        }
    }

    //Utilities

    public function timeago($timestamp) {
        $difference = floor(abs(time() - strtotime($timestamp)) / 60);
        if ($difference == '0') {
            return 'couple seconds ago';
        } elseif ($difference < '60') {
            $hours = floor($difference / 60); // No. of mins/60 to get the hours and round down  
            return $difference . ' minutes ago';
        } elseif ($difference > '60') {
            if ($difference > '525949') {
                $year = floor($difference / 525949);
                if ($year == '1') {
                    return 'about a year ago';
                } elseif ($year > '1') {
                    return $year . ' years ago';
                }
            } elseif ($difference > '43829') {
                $months = floor($difference / 43829.1);
                if ($months == '1') {
                    return 'about a month ago';
                } elseif ($months > '1') {
                    return $months . ' months ago';
                }
            } elseif ($difference > '1440') {
                $day = floor($difference / 1440);
                if ($day == '1') {
                    return $day . ' day ago';
                } elseif ($day > '1') {
                    return $day . ' days ago';
                }
            } else {
                $hours = floor($difference / 60); // No. of mins/60 to get the hours and round down  
                return $hours . ' hours ago';
            }
        }
    }

    public function geoCheckIP() {

        //contact ip-server
        $response = @file_get_contents('http://api.ipinfodb.com/v3/ip-city/?key=18971b91d6cdf07a80228d5033023003072f97ad297cbf8e38cd7c65524c743a&ip=' . $_SERVER['REMOTE_ADDR']);
        $exloc = explode(';', $response);
        //   print_r ($exloc);
        return ($exloc);
    }

    public function photo_upload($userid) {

        //if they DID upload a file...
        if ($_FILES['upload']['name']) {
            //if no errors...
            if ($_FILES['upload']['name']) {
                //now is the time to modify the future file name and validate the file
                $new_file_name = strtolower('hello'); //rename file
                if ($_FILES['upload']['size'] > (10240000)) { //can't be larger than 1 MB
                    $valid_file = false;
                    $message = 'Oops!  Your file\'s size is to large.';
                } else {
                    //move it to users directory
                    move_uploaded_file($_FILES['upload']['tmp_name'], 'users/' . $userid . '/images/' . $_FILES['upload']['name']);
                    $sth = $this->db->prepare("INSERT INTO `a2261530_interiv`.`members_photos` 
                                 (`photo_id`, `photo_path`, `photo_title`, `minter_id`, `photo_upload_timestamp`, `photo_public`) 
                          VALUES (NULL, :mid, :iid, :ct, CURRENT_TIMESTAMP, :ctt);");
                    $path = 'users/' . $userid . '/images/' . $_FILES['upload']['name'];
                    $sth->execute(array(
                        ':mid' => $path,
                        ':iid' => $_POST['description'],
                        ':ct' => $userid,
                        ':ctt' => '1'));

                    $ref = $_SERVER['HTTP_REFERER'];

                    if ($ref !== '') {

                        header('Location:' . $ref);
                    } elseif ($ref == '') {

                        echo $ref;
                    }
                }
            }
            //if there is an error...
            else {
                //set that to be the returned message
                echo 'Ooops!  Your upload triggered the following error:  ' . $_FILES['photo']['error'];
            }
        }

//you get the following information for each file:
        echo $_FILES['upload']['name'];
        echo $_FILES['upload']['size'];
        echo $_FILES['upload']['type'];
        echo $_FILES['upload']['tmp_name'];
    }

    public function Query_Photo($userid, $DataType, $DataID) {

        echo '<a href="#" onlclick="close("' . $DataType . '")" class="close" id="closebutton" style="text-decoration: none;" title="Close">
                        <b style="color: Red; background-color: Gray;">X</b></a>';
        echo $userid . '<br/>';

        echo $DataType . '<br/>';
        echo $DataID . '<br/>';
    }

}

?>