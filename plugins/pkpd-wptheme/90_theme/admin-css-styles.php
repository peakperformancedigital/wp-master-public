<?php
/**
 * Enqueue admin stylesheet
 * 
 * @package         pkpd-wptheme\admin-css-styles
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */


function pkpd_admin_style() {
  wp_enqueue_style( 'admin-style', plugin_dir_url( __DIR__ ) . '/css/admin.css' );
}
add_action( 'admin_enqueue_scripts', 'pkpd_admin_style');
