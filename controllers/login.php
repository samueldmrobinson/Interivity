<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();
        
      
    }

    function checkpoint(){
        $this->model->checkpoint(); 
    }
}
?>
