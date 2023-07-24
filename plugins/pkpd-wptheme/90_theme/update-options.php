<?php
/**
 * Enable SVG Support In WP
 * 
 * @package         pkpd-wptheme\allow-svg
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */



function set_default_options() {
    update_option('timezone_string', 'America/New_York');
    update_option('start_of_week', 0);
    update_option('show_on_front', 'page');
    update_option('page_on_front', 1);
    update_option('rss_use_excerpt', 1);
    update_option('blog_public', 0);
    update_option('default_comment_status', 'closed');
    update_option('comment_registration', 1);
    update_option('comment_moderation', 1);
    update_option('show_avatars', 0);
    update_option('thumbnail_size_w', 150);
    update_option('thumbnail_size_h', 150);
    update_option('medium_size_w', 500);
    update_option('medium_size_h', 9999);
    update_option('large_size_w', 1800);
    update_option('large_size_h', 9999);
    update_option('date_format', 'F j, Y');
}
add_action('switch_theme', 'set_default_options');
