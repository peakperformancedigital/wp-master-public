<?php
/**
 * Disables the site health screen
 * 
 * @package         pkpd-masterplugin\disable-site-health
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */


 if ( ! defined( 'ABSPATH' ) ) exit;

// disable the admin menu
function pkpd_remove_site_health_menu() {
    remove_submenu_page( 'tools.php', 'site-health.php' );
}
add_action( 'admin_menu', 'pkpd_remove_site_health_menu' );


// block site health page screen
function pkpd_block_site_health_access() {
    if ( is_admin() ) {
        $screen = get_current_screen();
        // if screen id is site health
        if ( 'site-health' == $screen->id ) {
            wp_redirect( admin_url() );
            exit;
        }
    }
}
add_action( 'current_screen', 'pkpd_block_site_health_access' );