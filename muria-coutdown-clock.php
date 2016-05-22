<?php
/*
  Plugin Name: Live Composer Add-On - Countdown clock
  Plugin URI: http://www.livecomposerplugin.com
  Description: Adds a new module for Countdown clock.
  Author: Murianna theme
  Version: 1.0
  Author URI: http://themeforest.net/user/murianna
 */

// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;
 if (!defined('DS_LIVE_COMPOSER_VER'))
        return;
 //Add Action
 add_action('plugins_loaded', 'muria_textdomain');
 add_action('init', 'muria_add_style');
 function muria_textdomain()
{

    load_plugin_textdomain('muria', false, dirname(plugin_basename(__FILE__)) . '/languages');
}



function muria_add_style(){
    wp_enqueue_style('muria-style', plugin_dir_url(__FILE__) . 'css/style.css');
    wp_enqueue_script('muria-lib-knob', plugin_dir_url(__FILE__) . 'js/libs/jquery.knob.js');
    wp_enqueue_script('muria-lib-throttle', plugin_dir_url(__FILE__) . 'js/libs/jquery.throttle.js');
    wp_enqueue_script('muria-coutdown', plugin_dir_url(__FILE__) . 'js/libs/coutdown.min.js');
    wp_enqueue_script('muria-main', plugin_dir_url(__FILE__) . 'js/main.js');
    
}
include (dirname(__FILE__) . '/modules/module.php');
add_action('dslc_hook_register_modules', create_function('', 'return dslc_register_module( "Muria_coutdown_clock" );'));