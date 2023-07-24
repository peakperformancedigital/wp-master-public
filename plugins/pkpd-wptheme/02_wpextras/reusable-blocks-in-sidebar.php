<?php
/**
 * Adds a Link to Reusable Blocks to Admin Menu 
 * 
 * @package         pkpd-wptheme\reusable-blocks-in-sidebar
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */


function pkpd_reusable_blocks_admin_menu() {
    add_menu_page( 'Reusable Blocks', 'Reusable Blocks', 'edit_posts', 'edit.php?post_type=wp_block', '', 'dashicons-editor-table', 22 );
}

 // Add to the admin_menu hook of your theme functions.php file 
add_action( 'admin_menu', 'pkpd_reusable_blocks_admin_menu' );