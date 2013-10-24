<?php

class Database extends PDO {

public function __construct() {
        //Local (WAMP)
    //parent::__construct('mysql:host=localhost;dbname=interivity', 'root','');
    
    //Remote Server
    parent::__construct('mysql:host=mysql6.000webhost.com;dbname=a2261530_interiv', 'a2261530_interiv','J!yp441G96G524s');
   }
}
?>
