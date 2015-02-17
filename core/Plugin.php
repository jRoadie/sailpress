<?php
namespace sailpress\core;

abstract class Plugin {

    private $name;
    private $version;
    private $baseDir;
    private $baseUrl;
    private $pluginFile;

    private function __construct() {

    }

    public static function instance($subclass) {
        $instance = SailPress()->plugin($subclass);
        if(!$instance) {
            $instance = SailPress()->plugin($subclass, new $subclass);
        }
        return $instance;
    }

    public function name($value = null) {
        $this->prop(__FUNCTION__);
    }

    private function prop($prop) {

    }

}