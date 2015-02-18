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

function load_sailpress() {
    if(!class_exists('SailPress')) {
        require_once 'SailPress.php';
    }
}

add_action('plugins_loaded', 'load_sailpress');