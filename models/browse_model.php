<?php

class Browse_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function getuserdata($arg) {
        $sth = $this->db->prepare('SELECT members.minter_id, minter_firstname, minter_lastname, minter_dob, minter_activated, minter_email, minter_interests, minter_personality, minter_twitter, minter_facebookid, minter_displayname, photo_path
                                   FROM members INNER JOIN members_photos ON members.photo_id = members_photos.photo_id WHERE members.minter_id = :user_id');
        $sth->execute(array(
            ':user_id' => $arg
        ));
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function GetCountryList() {
        $sth = $this->db->prepare('SELECT DISTINCT loc_country
FROM invertivities WHERE loc_country IS NOT NULL');
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function GetCityList() {
        $sth = $this->db->prepare('SELECT DISTINCT loc_city,loc_country
FROM invertivities WHERE loc_city IS NOT NULL AND loc_country IS NOT NULL');
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function geoCheckIP() {

        //contact ip-server
        $response = @file_get_contents('http://api.ipinfodb.com/v3/ip-city/?key=18971b91d6cdf07a80228d5033023003072f97ad297cbf8e38cd7c65524c743a&ip=' . $_SERVER['REMOTE_ADDR']);
        $exloc = explode(';', $response);
        //print_r ($exloc);
        return ($exloc);
    }

    public function browse() {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        $_vars = array($url[0], $url[1], $url[2]);
        return $_vars;
    }

    public function stream_my($type) {
        $_geoLocation = $this->geoCheckIP();

        $offset = is_numeric($_POST['offset']) ? $_POST['offset'] : die();
        $postnumbers = is_numeric($_POST['number']) ? $_POST['number'] : die();

        switch ($type) {

            case city:
                $sth = $this->db->prepare('SELECT * FROM  `invertivities`
        LEFT JOIN members ON members.minter_id = invertivities.minter_id 
        LEFT JOIN members_photos ON members.photo_id = members_photos.photo_id
        WHERE invertivities.loc_city = :city AND invertivities.loc_country = :country ORDER BY cinter_timestamp DESC LIMIT ' . $postnumbers . ' OFFSET ' . $offset);
                $sth->execute(array(
                    ':city' => $_geoLocation[6],
                    ':country' => $_geoLocation[4]
                ));
                foreach ($sth->fetchAll(PDO::FETCH_ASSOC) as $row) {

                    echo '<div id="post-1052 fc-cfifo" class="post-1052 post type-post format-image hentry category-uncategorized post" location="' . $row['loc_city'] . '">';
                    echo '<div class="entry-content">';
                    echo '<h2 class="caption"><a href="#">' . $row['cinter_title'] . '</a></h2>';
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
                    echo '<p class="delimiter">&nbsp;</p><br />';
                    echo '</div>';
                }

                break;

            case country:
                $sth = $this->db->prepare('SELECT * FROM  `invertivities`
        LEFT JOIN members ON members.minter_id = invertivities.minter_id 
        LEFT JOIN members_photos ON members.photo_id = members_photos.photo_id
        WHERE invertivities.loc_country = :country ORDER BY cinter_timestamp DESC LIMIT ' . $postnumbers . ' OFFSET ' . $offset);
                $sth->execute(array(
                    ':country' => $_geoLocation[4]
                ));

                foreach ($sth->fetchAll(PDO::FETCH_ASSOC) as $row) {

                    echo '<div id="post-1052 fc-cfifo" class="post-1052 post type-post format-image hentry category-uncategorized post" location="' . $row['loc_city'] . '">';
                    echo '<div class="entry-content">';
                    echo '<h2 class="caption">' . $row['cinter_title'] . '</h2>';
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
                    echo '<p class="delimiter">&nbsp;</p><br />';
                    echo '</div>';
                }
                break;
        }
        //Change Query to Left Join and INNER Join for Performance
    }

    public function stream_images() {
        $offset = is_numeric($_POST['offset']) ? $_POST['offset'] : die();
        $postnumbers = is_numeric($_POST['number']) ? $_POST['number'] : die();

        //Change Query to Left Join and INNER Join for Performance
        $sth = $this->db->prepare('SELECT * FROM  `invertivities`
        LEFT JOIN members ON members.minter_id = invertivities.minter_id 
        LEFT JOIN members_photos ON members.photo_id = members_photos.photo_id
        WHERE invertivities.minter_id = :user_id ORDER BY cinter_timestamp DESC LIMIT ' . $postnumbers . ' OFFSET ' . $offset);
        $sth->execute(array(
            ':user_id' => $arg
        ));

        foreach ($sth->fetchAll(PDO::FETCH_ASSOC) as $row) {

            echo '<div id="post-1052" class="post-1052 post type-post status-pending format-image hentry category-uncategorized post">';
            echo '<div class="entry-content">';
            echo '<h2 class="caption">' . $row['cinter_title'] . '</h2>';
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

    public function stream_videos() {
        $offset = is_numeric($_POST['offset']) ? $_POST['offset'] : die();
        $postnumbers = is_numeric($_POST['number']) ? $_POST['number'] : die();

        //Change Query to Left Join and INNER Join for Performance
        $sth = $this->db->prepare('SELECT * FROM  `invertivities`
        LEFT JOIN members ON members.minter_id = invertivities.minter_id 
        LEFT JOIN members_photos ON members.photo_id = members_photos.photo_id
        ORDER BY cinter_timestamp DESC LIMIT ' . $postnumbers . ' OFFSET ' . $offset);
        $sth->execute();

        foreach ($sth->fetchAll(PDO::FETCH_ASSOC) as $row) {

            echo '<div id="post-1052 fc-cfifo" class="post-1052 post type-post format-image hentry category-uncategorized post" location="' . $row['loc_city'] . ', ' . $row['loc_country'] . '">';
            echo '<div class="entry-content">';
            echo '<h2 class="caption"><a href="#">' . $row['cinter_title'] . '</a></h2>';
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
            echo '<p class="delimiter">&nbsp;</p><br />';
            echo '</div>';
        }
    }

    public function stream_interivity() {
        $offset = is_numeric($_POST['offset']) ? $_POST['offset'] : die();
        $postnumbers = is_numeric($_POST['number']) ? $_POST['number'] : die();

        //Change Query to Left Join and INNER Join for Performance
        $sth = $this->db->prepare('SELECT * FROM  `invertivities`
        LEFT JOIN members ON members.minter_id = invertivities.minter_id 
        LEFT JOIN members_photos ON members.photo_id = members_photos.photo_id
        ORDER BY cinter_timestamp DESC LIMIT ' . $postnumbers . ' OFFSET ' . $offset);
        $sth->execute();

        foreach ($sth->fetchAll(PDO::FETCH_ASSOC) as $row) {

            echo '<div id="post-1052 fc-cfifo" class="post-1052 post type-post format-image hentry category-uncategorized post" location="' . $row['loc_city'] . ', ' . $row['loc_country'] . '">';
            echo '<div class="entry-content">';
            echo '<h2 class="caption"><a href="#">' . $row['cinter_title'] . '</a></h2>';
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
            echo '<p class="delimiter">&nbsp;</p><br />';
            echo '</div>';
        }
    }

    public function stream_music() {
        $offset = is_numeric($_POST['offset']) ? $_POST['offset'] : die();
        $postnumbers = is_numeric($_POST['number']) ? $_POST['number'] : die();

        //Change Query to Left Join and INNER Join for Performance
        $sth = $this->db->prepare('SELECT * FROM  `invertivities`
        LEFT JOIN members ON members.minter_id = invertivities.minter_id 
        LEFT JOIN members_photos ON members.photo_id = members_photos.photo_id
        ORDER BY cinter_timestamp DESC LIMIT ' . $postnumbers . ' OFFSET ' . $offset);
        $sth->execute();

        foreach ($sth->fetchAll(PDO::FETCH_ASSOC) as $row) {

            echo '<div id="post-1052 fc-cfifo" class="post-1052 post type-post format-image hentry category-uncategorized post" location="' . $row['loc_city'] . ', ' . $row['loc_country'] . '">';
            echo '<div class="entry-content">';
            echo '<h2 class="caption"><a href="#">' . $row['cinter_title'] . '</a></h2>';
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
            echo '<p class="delimiter">&nbsp;</p><br />';
            echo '</div>';
        }
    }

    public function stream_attachments() {
        $offset = is_numeric($_POST['offset']) ? $_POST['offset'] : die();
        $postnumbers = is_numeric($_POST['number']) ? $_POST['number'] : die();

        //Change Query to Left Join and INNER Join for Performance
        $sth = $this->db->prepare('SELECT * FROM  `invertivities`
        LEFT JOIN members ON members.minter_id = invertivities.minter_id 
        LEFT JOIN members_photos ON members.photo_id = members_photos.photo_id
        ORDER BY cinter_timestamp DESC LIMIT ' . $postnumbers . ' OFFSET ' . $offset);
        $sth->execute();

        foreach ($sth->fetchAll(PDO::FETCH_ASSOC) as $row) {

            echo '<div id="post-1052 fc-cfifo" class="post-1052 post type-post format-image hentry category-uncategorized post" location="' . $row['loc_city'] . ', ' . $row['loc_country'] . '">';
            echo '<div class="entry-content">';
            echo '<h2 class="caption"><a href="#">' . $row['cinter_title'] . '</a></h2>';
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
            echo '<p class="delimiter">&nbsp;</p><br />';
            echo '</div>';
        }
    }

}

?>
