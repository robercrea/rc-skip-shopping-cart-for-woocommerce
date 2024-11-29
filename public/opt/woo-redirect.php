<?php

// Redirect user to checkout

class RC_SWSC_Redirect_Option {

    function __construct(){
        if($this->is_active())
            add_filter('woocommerce_add_to_cart_redirect', array($this, 'skip_cart'));
    }

    function skip_cart(){
        return wc_get_checkout_url();
    }

    // Check if option is active
    private function is_active(){
        return (intval(get_option('rc_swsc_option', 1)) == 1);
    }

}

new RC_SWSC_Redirect_Option();