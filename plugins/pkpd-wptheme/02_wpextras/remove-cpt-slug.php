<?php
/**
 * Remove Custom Post Type Slugs from Permalinks
 * 
 * Remove the slug from published post permalinks on custom post types.
 * 
 * @package         pkpd-wptheme\allow-svg
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */


//Remove the slug from published post permalinks. Only affect our custom post type, though.
function pkpd_remove_cpt_slug( $post_link, $post ) {

 if ( 'team_members' === $post->post_type && 'publish' === $post->post_status ) {
 $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
 }

 if ( 'practice_areas' === $post->post_type && 'publish' === $post->post_status ) {
 $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
 }
 
 return $post_link;
}
add_filter( 'post_type_link', 'pkpd_remove_cpt_slug', 10, 2 );


/**
 * Have WordPress match postname to any of our public post types (post, page, team-members).
 * All of our public post types can have /post-name/ as the slug, so they need to be unique across all posts.
 * By default, WordPress only accounts for posts and pages where the slug is /post-name/.
 *
 * @param $query The current query.
 */
function pkpd_add_cpt_post_names_to_main_query( $query ) {

 // Bail if this is not the main query.
 if ( ! $query->is_main_query() ) {
 return;
 }

 // Bail if this query doesn't match our very specific rewrite rule.
 if ( ! isset( $query->query['page'] ) || 2 !== count( $query->query ) ) {
 return;
 }

 // Bail if we're not querying based on the post name.
 if ( empty( $query->query['name'] ) ) {
 return;
 }

 // Add CPT to the list of post types WP will include when it queries based on the post name.
 $query->set( 'post_type', array( 'post', 'page', 'team_members', 'practice_areas'));
}
add_action( 'pre_get_posts', 'pkpd_add_cpt_post_names_to_main_query' );