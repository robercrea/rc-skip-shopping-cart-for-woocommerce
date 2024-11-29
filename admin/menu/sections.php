<?php if (!defined('ABSPATH')) exit;

// Menu sections
class RC_SWSC_Sections {

    function __construct(){
        if(is_admin()){
            add_action('admin_init', array($this, 'setup_sections'));
        }
    }

    function setup_sections(){
        add_settings_section('rc_swsc_section', 
        __('Skip Cart', 'rc-skip-shopping-cart-for-woocommerce'), 
        false, 
        'rc_swsc_fields');
    }
}

new RC_SWSC_Sections();