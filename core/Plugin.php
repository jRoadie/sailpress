<?php
namespace sailpress\core;

abstract class Plugin {

    private $file;
    private $dir;
    private $url;

    private function __construct() {

    }

    public static function instance($pluginFile, $subclass) {
        $plugin = SailPress()->plugin($subclass, new $subclass);
        $plugin->file = $pluginFile;
        $plugin->dir = plugin_dir_path($pluginFile);
        $plugin->url = plugin_dir_url($pluginFile);
        return $plugin;
    }

    public function __get($prop) {
        if(property_exists($this, $prop)) {
            return $this[$prop];
        }
        return null;
    }

    public function __set($prop, $val) {
        if(property_exists($this, $prop)) {
            $this[$prop] = $val;
        }
    }

}