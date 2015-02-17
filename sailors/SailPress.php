<?php
/**
 * Plugin Name:       SailPress
 * Plugin URI:        http://sailpress.io/
 * Description:       A plugin framework to sail your wp plugin development.
 * Version:           1.0.0
 * Author:            Me
 * Author URI:        http://me.com/
 * License:           MIT
 */

if(!class_exists('SailPress')) :

final class SailPress {

    private static $_instance;

    private $plugins = [];

    private function __consturct() {

    }

    public static function instance() {
        if(is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function plugin($name, $instance = null) {
        if($instance) {
            $this->plugins[$name] = $instance;
        }
        return $this->plugins[$name];
    }

}

endif;

function SailPress() {
    return SailPress::instance();
}

$GLOBALS['SailPress'] = SailPress();