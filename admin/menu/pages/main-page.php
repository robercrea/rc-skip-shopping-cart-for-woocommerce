<?php if (!defined('ABSPATH') || !is_admin()) exit; 

include_once 'inc/header.php'; 
?>

<form action="options.php" method="post">
    <?php
        settings_fields('rc_swsc_fields');
        do_settings_sections('rc_swsc_fields');
        submit_button();
    ?>
</form>
<?php include_once 'inc/footer.php';?>
