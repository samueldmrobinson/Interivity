<?php

class Error extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->page_title = 'Something Went Wrong';
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->location = $this->model->geoCheckIP();
        $this->view->render('error/index');
    }
    function coming_soon() {
        $this->view->page_title = 'Coming Soon';
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->location = $this->model->geoCheckIP();
        $this->view->render('error/coming_soon');
    }

}

?>
