<?php
/**
 * Disables the admin menu item with the count of unread form submissions
 * 
 * @package         pkpd-wptheme\fluent-form-disable-menu-count
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2023-06-21
 * 
 */


add_filter('fluentform_admin_menu_bar_items',function ($d){
    return [];
});
