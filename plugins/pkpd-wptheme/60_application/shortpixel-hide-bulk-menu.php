<?php
/**
 * Hides the menu item for bulk shortpixel resizing*
 * 
 * @package         pkpd-wptheme\shortpixel-hide-bulk-menu
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */


add_action('admin_menu', function () {
  remove_submenu_page('upload.php', 'wp-short-pixel-bulk');
}, 20);