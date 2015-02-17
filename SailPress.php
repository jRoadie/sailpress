<?php
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