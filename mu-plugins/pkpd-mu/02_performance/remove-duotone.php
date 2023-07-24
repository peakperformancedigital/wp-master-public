<?php
/**
 * Remove WP Duotone SVGs
 * 
 * @package         pkpd-mu\remove-duotone
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-01-20
 * 
 */


function pkpd_remove_global_styles() {
    remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
    remove_action( 'in_admin_header', 'wp_global_styles_render_svg_filters' );
}
add_action('after_setup_theme', 'pkpd_remove_global_styles', 10, 0);