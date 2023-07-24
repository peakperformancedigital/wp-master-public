<?php
/**
 * Enqueues block editor and customizer css styles
 * 
 * @package         pkpd-wptheme\editor-css-styles
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */


function pkpd_editor_css() {
     wp_enqueue_style('editor-style', plugin_dir_url( __DIR__ ) . '/css/editor.css');
}
add_action( 'enqueue_block_editor_assets', 'pkpd_editor_css' );
add_action( 'customize_controls_enqueue_scripts', 'pkpd_editor_css' );