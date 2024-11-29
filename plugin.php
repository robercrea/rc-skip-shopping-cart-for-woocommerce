<?php
/*
Plugin Name: Skip Shopping Cart for WooCommerce
Plugin URI: https://robercrea.com/plugins-wordpress/skip-shopping-cart-for-woocommerce/
Description: Allows to skip the woocommerce shopping cart and send the client direct to the payment.
Author: Rober Crea
Author URI: https://robercrea.com
Version: 1.0
License: GPL2 or later
Text Domain: rc-skip-shopping-cart-for-woocommerce
Domain Path: /languages
*/

// If this file is called directly, exit.
defined('ABSPATH') || exit;

// Set plugin version constant.
if(!function_exists('get_plugin_data')){
    require_once ABSPATH . 'wp-admin/includes/plugin.php';
}
$plugin_data = get_plugin_data(__FILE__);

if(!defined('RC_SWSC_VERSION')){
    define('RC_SWSC_VERSION', $plugin_data['Version']);
}

// Set plugin Uri constant.
if(!defined('RC_SWSC_URI')){
    define('RC_SWSC_URI', $plugin_data['PluginURI']);
}

// Set plugin url.
if(!defined('RC_SWSC_URL'))
    define('RC_SWSC_URL', plugin_dir_url(__FILE__));

require_once plugin_dir_path(__FILE__) . 'admin/admin.php';
require_once plugin_dir_path(__FILE__) . 'public/public.php';

class RC_SWSC {
    
    function __construct(){
        add_action('plugins_loaded', array($this, 'load_i18n'));
    }

    // Load internationalization.
    function load_i18n(){
        load_plugin_textdomain('rc-skip-shopping-cart-for-woocommerce', false, basename(dirname(__FILE__)).'/languages/');
    }
}

new RC_SWSC();