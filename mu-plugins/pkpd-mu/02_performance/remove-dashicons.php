<?php
/**
 * Remove Dashicons from front end if not logged in
 * 
 * @package         pkpd-mu\remove-dashicons
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-01-20
 * 
 */


function pkpd_dequeue_dashicons() {
    if ( ! is_user_logged_in() ) {
        wp_deregister_style( 'dashicons' );
    }
}

add_action( 'wp_enqueue_scripts', 'pkpd_dequeue_dashicons' );
