<?php

class Help extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->page_title = 'Help';
        
        
    }
    
    function index(){
        
        $this->view->render('help/index');
        
    }
    function terms_conditions(){
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->location = $this->model->geoCheckIP();
        
        $this->view->render('index/terms_conditions');
        
    }
    function privacy_policy(){
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->location = $this->model->geoCheckIP();
        
        $this->view->render('index/privacy_policy');
        
    }
    function keyboard_shortcuts(){
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->location = $this->model->geoCheckIP();      
        $this->view->render('help/keyboard_shortcuts');
        
    }
    
    
    public function other($arg = false) {
       
        require 'models/help_model.php';
        $model = new Help_Model();
        $this->view->blah = $model->blah();
        
        
    }

}

?>
