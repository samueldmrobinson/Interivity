<?php

class Browse extends Controller {

    function __construct() {
        parent::__construct();
    }

//All Cities and Countries
    public function cities() {
        $data = $this->model->browse();
        $this->view->page_title = ucfirst($data[1]);
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->location = $this->model->geoCheckIP();
        $this->view->jsbuildPaginationLoader = $data;
        $this->view->render('browse/index');
    }

    public function countries() {
        $data = $this->model->browse();
        $this->view->page_title = ucfirst($data[1]);
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->location = $this->model->geoCheckIP();
        $this->view->jsbuildPaginationLoader = $data;
        $this->view->render('browse/index');
    }

    //Your City / Country
    public function my() {
        $data = $this->model->browse();
        if($data[2] !== 'city' && $data[2] !== 'country'){          
            header('Location: /report/warning/?param=change&error=user&suspend=no');
        }
        $this->view->page_title = 'My ' . ucfirst($data[2]);
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->location = $this->model->geoCheckIP();
        $this->view->jsbuildPaginationLoader = $data;
        $this->view->render('browse/index');
    }

    //Types
    public function images() {
        $data = $this->model->browse();
        $this->view->page_title = 'Browse '.ucfirst($data[1]);
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->location = $this->model->geoCheckIP();
        $this->view->jsbuildPaginationLoader = $data;
        $this->view->distinctCities = $this->model->GetCityList();
        $this->view->distinctCountries = $this->model->GetCountryList();
        $this->view->render('browse/index');
    }

    public function videos() {
        $data = $this->model->browse();
        $this->view->page_title = 'Browse '.ucfirst($data[1]);
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->location = $this->model->geoCheckIP();
        $this->view->jsbuildPaginationLoader = $data;
        $this->view->distinctCities = $this->model->GetCityList();
        $this->view->distinctCountries = $this->model->GetCountryList();
        $this->view->render('browse/index');
    }

    public function interivity() {
        $data = $this->model->browse();
        $this->view->page_title = 'Browse '.ucfirst($data[1]);
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->location = $this->model->geoCheckIP();
        $this->view->distinctCities = $this->model->GetCityList();
        $this->view->distinctCountries = $this->model->GetCountryList();
        $this->view->jsbuildPaginationLoader = $data;
        $this->view->render('browse/index');
    }

    public function music($loc) {
        $data = $this->model->browse();
        $this->view->page_title = 'Browse '.ucfirst($data[1]);
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->location = $this->model->geoCheckIP();
        $this->view->distinctCities = $this->model->GetCityList();
        $this->view->distinctCountries = $this->model->GetCountryList();
        $this->view->jsbuildPaginationLoader = $data;
        $this->view->render('browse/index');
    }

    public function attachments($loc) {
        $data = $this->model->browse();
        $this->view->page_title = 'Browse '.ucfirst($data[1]);
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->location = $this->model->geoCheckIP();
        $this->view->distinctCities = $this->model->GetCityList();
        $this->view->distinctCountries = $this->model->GetCountryList();
        $this->view->jsbuildPaginationLoader = $data;
        $this->view->render('browse/index');
    }

    public function stream_my($type) {
        $this->model->stream_my($type);
    }

    public function stream_cities() {
        $this->model->stream_cities('1');
    }

    public function stream_countries() {
        $this->model->stream_countries('1');
    }

    public function stream_images() {
        $this->model->stream_images('1');
    }

    public function stream_videos() {
        $this->model->stream_videos('1');
    }

    public function stream_interivity() {
        $this->model->stream_interivity('1');
    }

    public function stream_music() {
        $this->model->stream_music('1');
    }

    public function stream_attachments() {
        $this->model->stream_attachments('1');
    }

}

?>
