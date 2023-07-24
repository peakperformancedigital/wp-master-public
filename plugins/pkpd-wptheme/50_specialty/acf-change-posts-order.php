<?php
/**
 * Change the ACF Post Object Dropdown Field to order by descending date 
 * 
 * @package         pkpd-wptheme\acf_change_posts_order
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * @link			https://support.advancedcustomfields.com/forums/topic/posts-object-field-order/

 * 
 */


function pkpd_change_posts_order( $args ) {
	$args['orderby'] = 'date';
	$args['order'] = 'DESC';
	return $args;
}
add_filter( 'acf/fields/post_object/query', 'pkpd_change_posts_order' );
