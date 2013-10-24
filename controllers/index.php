<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->page_title = 'Home';
        $logged = Session::get('loggedIn', 'minter_id');
       
       
    }

    public function index() {
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->location = $this->model->geoCheckIP();
        $this->view->render('index/index');
    }

}

?>
