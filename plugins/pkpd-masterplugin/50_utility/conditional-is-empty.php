<?php
/**
 * Checks if post content is empty.
 * 
 * This will return true if the content is empty; false if it’s not.
 * https://blog.room34.com/archives/5360/how-to-really-check-if-the-content-is-empty-in-wordpress/
 * look into rewriting with https://gist.github.com/bhongy/6761732
 * 
 * @package         pkpd-masterplugin\conditional-is-empty
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * @example         if (empty_content($post->post_content)) { ... }
 * 
 */


function empty_content($str) {
    return trim(str_replace('&nbsp;','',strip_tags($str,'<img>'))) == '';
}