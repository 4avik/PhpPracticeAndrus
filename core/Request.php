<?php

class Request 
{
    public static function uri () {
        return trim($_SERVER['REQUEST_URI'], '/');
        trim (parse_url($_SERVER['REQUEST_URI'], '/'));
    }
    

    public static function method () {
        return $_SERVER['REQUEST_METHOD'];
    }
}

