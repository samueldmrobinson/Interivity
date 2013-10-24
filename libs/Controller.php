<?php

class Controller {

    function __construct() {
       @session_start();
       date_default_timezone_set('Europe/London');
        $this->view = new View();
        $this->page_title = 'Loading...';
    }

    public function loadModel($name) {
        $path = 'models/' . $name . '_model.php';

        if (file_exists($path)) {
            require $path;
        }
        $modelName = $name . '_model';
        $this->model = new $modelName;
    }
    
   



}

?>
