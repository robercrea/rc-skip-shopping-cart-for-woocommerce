<?php if (!defined('ABSPATH')) exit;

// Load menu files
require_once plugin_dir_path(__FILE__) . 'menu/register.php';
require_once plugin_dir_path(__FILE__) . 'menu/sections.php';
require_once plugin_dir_path(__FILE__) . 'menu/fields.php';

class RC_SWSC_Admin {
    function __construct(){
        if(is_admin())
            add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts'));
    }

    // Enqueue admin css
    function enqueue_scripts(){
        $admin_css = plugins_url('/css/admin.css', __FILE__);
    
        // Load admin css
        wp_enqueue_style('rc_swsc_style', $admin_css, array(), RC_SWSC_VERSION);
    }
}

new RC_SWSC_Admin();