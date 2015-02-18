<?php
if(!class_exists('SailPress')) :

function loader() {
    include 'core/Plugin.php';
};

final class SailPress {

    private static $_instance;

    private $plugins = [];

    private function __consturct() {

    }

    public static function instance() {
        if(is_null(self::$_instance)) {
            loader();
            self::$_instance = new self();
            do_action('sailpress_loaded');
        }
        return self::$_instance;
    }

    public function plugin($name, $instance = null) {
        if(isset($this->plugins[$name])) {
            return $this->plugins[$name];
        } else {
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