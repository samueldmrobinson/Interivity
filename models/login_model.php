<?php

class Login_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function checkpoint() {

        //contact ip-server
        $response = @file_get_contents('http://api.ipinfodb.com/v3/ip-city/?key=18971b91d6cdf07a80228d5033023003072f97ad297cbf8e38cd7c65524c743a&ip='.$_SERVER['REMOTE_ADDR']);
        $exloc = explode(';', $response);

        $sth = $this->db->prepare("SELECT minter_id, minter_firstname, minter_lastname, minter_dob, minter_activated, minter_email, minter_interests, minter_personality, minter_location , minter_twitter, minter_facebookid  FROM members WHERE 
                           minter_email = :email AND minter_password = MD5(:password) ");
        $sth->execute(array(
            ':email' => $_POST['minter_email'],
            ':password' => $_POST['minter_password']
        ));

        $count = $sth->rowCount();

        $data = ($sth->fetchAll());
        //print_r($data);

        if ($count > 0) {

            $minter_location = ($exloc[6] . ',' . $exloc[4]);

            $usth = $this->db->prepare("UPDATE a2261530_interiv.members SET minter_location = '" . $minter_location . "' WHERE members.minter_id = '" . $data[0]['minter_id'] . "'");
            $usth->execute();

            $sth = $this->db->prepare("SELECT minter_id, minter_firstname, minter_lastname, minter_dob, minter_activated, minter_email, minter_interests, `minter_morn_mood`,`minter_morn_clr`,`minter_morn_bkgnd`,`minter_afte_mood`,`minter_afte_clr`,`minter_afte_bkgnd`,`minter_evn_mood`,`minter_evn_clr`,`minter_evn_bkgnd`,minter_personality, minter_location , minter_twitter, minter_facebookid, minter_demo  FROM members WHERE 
                           minter_email = :email AND minter_password = MD5(:password) ");
            $sth->execute(array(
                ':email' => $_POST['minter_email'],
                ':password' => $_POST['minter_password']
            ));
            $data = ($sth->fetchAll());

            Session::init();
            Session::set('loggedIn', $data);


            header('Location: ../?success=1');
        } 
        else 
        {
            header('Location: ../?error=19038');
        }
    }

    public function interivity_featured($arg) {
        $sth = $this->db->prepare("SELECT * FROM `invertivities` 
            LEFT JOIN category_interests 
            ON invertivities.category_id = category_interests.cat_id   
            LEFT JOIN members
            ON invertivities.minter_id = members.minter_id
            WHERE `cinter_featured`='1' ORDER BY `cinter_timestamp` DESC LIMIT " . $arg . "");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>