<?php

class Session {

    public static function init() {

        @session_start();




    }

    public static function set($key, $value) {

        $_SESSION[$key] = $value;
    }

    public static function get($key, $data) {
        if (isset($_SESSION[$key][0][$data])) {
            return $_SESSION[$key][0][$data];
        }
        elseif (isset($_SESSION[$key][$data])) {
            return $_SESSION[$key][$data];
        }
        elseif (isset($_SESSION[$key]) || $data = FALSE) {
        
    }
    }

    public static function destroy() {
        session_destroy();
    }

    function KeyGenerator($length = 32) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    }

}

?>
