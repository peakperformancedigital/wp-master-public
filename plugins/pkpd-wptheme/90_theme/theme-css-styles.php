<?php
/**
 * Enqueues a default theme.css
 * 
 * @package         pkpd-wptheme\theme-css-styles
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */


function pkpd_theme_css() {
     wp_enqueue_style('theme-style', plugin_dir_url( __DIR__ ) . '/css/theme.css');
}
add_action( 'wp_enqueue_scripts', 'pkpd_theme_css' );
