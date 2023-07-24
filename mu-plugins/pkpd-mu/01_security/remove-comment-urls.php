<?php
/**
 * Remove URLs from WordPress comments
 * 
 * Sourced from https://developer.wordpress.org/reference/hooks/comment_form_default_fields/#user-contributed-notes
 * 
 * @package         pkpd-mu\remove-comment-urls
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-01-20
 * 
 */


function pkpd_website_remove_urls($fields){
    if(isset($fields['url']))
        unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields', 'pkpd_website_remove_urls');
