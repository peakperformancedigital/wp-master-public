<?php
/**
 * Modify archive labels.
 * 
 * Use with "get_the_archive_title" "or the_title"
 * 
 * @package         pkpd-wptheme\modify-archive-labels
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * @param string 	$title Current archive title to be displayed.
 * @return string 	Modified archive title to be displayed.
 * 
 */


function pkpd_archive_title( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( 'Category: ', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( 'Tag: ', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif ( is_search() ) {
	    global $wp_query;
        $posts_found = $wp_query->found_posts;
		$title = 'Search Results For: ' . get_search_query( false ) . ' (' . $posts_found . ')';
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	} elseif ( is_home() ) {
		$title = "Blog";
	} elseif ( is_404() ) {
		$title = 'Error 404: Page Not Found';
	}
	return $title;
}
add_filter( 'get_the_archive_title', 'pkpd_archive_title' );
