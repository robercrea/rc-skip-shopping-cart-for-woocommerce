<?php if (!defined('ABSPATH')) exit;

class RC_SWSC_Menus {

    private $slug = "rc-swsc-menu";

    function __construct(){
        if(is_admin()){
            add_action('admin_menu', array($this, 'register_menu'));
        }
    }

    function register_menu(){

        // Add Parent Menu
        add_menu_page(__('Skip cart', 'rc-skip-shopping-cart-for-woocommerce'), 
        __('Skip Cart', 'rc-skip-shopping-cart-for-woocommerce'),
        'manage_options',
        $this->slug, 
        array($this, 'main_page'), 
        'dashicons-cart', 
        100);

        add_submenu_page(
            $this->slug,
            __('Skip Cart', 'rc-skip-shopping-cart-for-woocommerce'),
            __('Skip Cart', 'rc-skip-shopping-cart-for-woocommerce'),
            "manage_options",
            $this->slug,
            array($this, "main_page"),
            1
        );
    }

    function main_page(){
        require_once plugin_dir_path(__FILE__) . 'pages/main-page.php';
    }

}

new RC_SWSC_Menus();