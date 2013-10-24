<?php

class Report extends Controller {

    function __construct() {
        parent::__construct();
        
        
        
       
    }
    
    public function warning(){
         $this->view->page_title = 'Warning';
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->location = $this->model->geoCheckIP();
        $this->view->render('error/report');
    }


}

?>
