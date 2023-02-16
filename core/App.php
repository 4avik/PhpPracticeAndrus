<?php 

class App {
    //static property methods
    public static $registry = [
        //'config' => [],
        //'database' => $queryBuilder
    ];
    
    public static function bind ($key, $value) {
        static::$registry[$key]=$value;
    }

    public static function get ($key) {
        if (!array_key_exists($key, static::$registry)) {
            throw new exception("No {$key} is bound in the container");
        }

        return static::$registry[$key];
    }

}


?>