<?php

class Report_Model extends Model {

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

    public function geoCheckIP() {

        //contact ip-server
        $response = @file_get_contents('http://api.ipinfodb.com/v3/ip-city/?key=18971b91d6cdf07a80228d5033023003072f97ad297cbf8e38cd7c65524c743a&ip=' . $_SERVER['REMOTE_ADDR']);
        $exloc = explode(';', $response);
        //print_r ($exloc);
        return ($exloc);
    }

   
}

?>
