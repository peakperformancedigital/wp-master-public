<?php
/**
 * Adds aria-current="page" to the menu item for the current page
 * 
 * This is helpful for accessibility 
 * 
 * @package         pkpd-masterplugin\aria-current
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */

function pkpd_add_attribute_to_current_menu_item( $atts, $item, $args ) {
    // check if this item represents the current post
    if ( $item->object_id  == get_the_ID() ) 
    {
        // add the desired attributes:
        $atts['aria-current'] = 'page';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'pkpd_add_attribute_to_current_menu_item', 10, 3 );