<?php

class Bootstrap {

    function __construct() {
        $comingsoon = '1';

        if ($comingsoon == '0' || $_GET['bypass'] == '1' || $_GET['auth'] == '52793164770') {



            global $url;
            $url = isset($_GET['url']) ? $_GET['url'] : null;
            $url = rtrim($url, '/');
            $url = explode('/', $url);
            //print_r($url);
            //If first array [0] http://localhost/(HERE) - Go To Index Controller
            if (empty($url[0])) {
                require 'controllers/index.php';
                $controller = new Index();
                $controller->loadModel('index');
                $controller->index();
                return false;
            }
            //Error Finding Print Url Explode in array 
            $file = 'controllers/' . $url[0] . '.php';
            if (file_exists($file)) {
                require $file;
                if (isset($url[1])) {
                    if (!method_exists($url[0], $url[1])) {
                        require 'controllers/error.php';
                        $controller = new Error;
                        $controller->loadModel('error');
                        $controller->index();
                        return false;
                    }
                }
            } else {
                require 'controllers/error.php';
                $controller = new Error;
                $controller->loadModel('error');
                $controller->index();
                return false;
            }
            //......... [0] Controller http://localhost/(HERE) 
            $controller = new $url[0];
            //Load first array [0] Controller http://localhost/(HERE) 
            $controller->loadModel($url[0]);
            //Calling Methods
            if (isset($url[3])) {
                $controller->{$url[1]}($url[2], $url[3]);
                return false;
            } elseif (isset($url[2])) {
                $controller->{$url[1]}($url[2]);
                return false;
            } else {
                if (isset($url[1])) {
                    $controller->{$url[1]}();
                    return false;
                } else {
                    $controller->index();
                }
            }
        } 
        elseif ($comingsoon == '1') {
            require 'controllers/error.php';
            $controller = new Error;
            $controller->loadModel('error');
            $controller->coming_soon();
            return false;
        }
    }

}

?>
