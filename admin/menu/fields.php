<?php if (!defined('ABSPATH')) exit;

class RC_SWSC_Fields {

    function __construct(){
        if(is_admin()){
            add_action('admin_init', array($this, 'setup_fields'));
            $this->register_settings();
        }
    }

    function register_settings(){
        register_setting('rc_swsc_fields', 'rc_swsc_option', array($this, 'sanitize_bool') );
    }
    
    // Sanitize Boolean
    function sanitize_bool($in){
        if($in != 1 ) return 0;
        else return $in;
    } 

    function setup_fields(){
        $this->setup_field('rc_swsc_fields', 'rc_swsc_section');
    }

    function setup_field($field, $section){

        add_settings_field(
            'rc_swsc_option',
            __('Skip the Shopping cart', 'rc-skip-shopping-cart-for-woocommerce'),
            array($this, 'skip_cart'),
            $field,
            $section,
            array(
                'name' => 'rc_swsc_option',
                'default' => 1
                )
        );
        
    }

    function skip_cart($args){
        $name = sanitize_html_class($args['name']);
        $option = esc_attr(get_option($name, $args['default']));
        echo '<input type="checkbox" value="1" 
        name="' . esc_attr($name) . '"' 
        . checked(1, $option, false )
        . '/>';
    }
}

new RC_SWSC_Fields();