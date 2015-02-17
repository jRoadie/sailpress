<?php
namespace sailpress\core;

abstract class Plugin {

    private $config = [];

    private static function __construct() {

    }

    public static function instance($subclass) {
        $instance = self::$_instances[$subclass];
        if(!$instance) {
            $instance = self::$_instances[$subclass] = new $subclass;
        }
        return $instance;
    }

}