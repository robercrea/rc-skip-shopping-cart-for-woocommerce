<?php
/**
 * author: Rober Crea
 * uri: https://robercrea.com
 * desc: menu pages footer
 * since: 1.0
 */

defined('ABSPATH') || exit;

?>

</section> <!-- end content -->

<footer>
    <section>
        <img src="<?php echo esc_url(RC_SWSC_URL)?>images/robercrea.svg"/>
        <p>
            <?php esc_attr_e('Visit', 'rc-skip-shopping-cart-for-woocommerce');?> 
            <a href="https://robercrea.com/" target="_blank">robercrea.com</a> 
            <?php esc_attr_e('to discover more plugins!', 'rc-skip-shopping-cart-for-woocommerce');?>
        </p>
        <a class="smallbtn" target="_blank" href="<?php echo esc_url(RC_SWSC_URI);?>"><?php esc_attr_e('Report Bug/Leave Comment', 'rc-skip-shopping-cart-for-woocommerce');?></a>
</section>
</footer>

</div><!-- end robercrea-admin -->