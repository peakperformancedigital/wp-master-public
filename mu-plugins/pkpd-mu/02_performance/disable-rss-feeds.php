<?php
/**
 * Disable RSS Feeds
 * 
 * @package         pkpd-mu\disable-rss-feeds
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-01-20
 * 
 */


function pkpd_security_disable_feed() {
	wp_die( __( 'Security has disabled the RSS Feed, please visit the <a href="'. esc_url( home_url( '/' ) ) .'">Homepage</a>!' ) );
}

add_action('do_feed_rdf', 'pkpd_security_disable_feed', 1);
add_action('do_feed_rss', 'pkpd_security_disable_feed', 1);
add_action('do_feed_rss2', 'pkpd_security_disable_feed', 1);
add_action('do_feed_atom', 'pkpd_security_disable_feed', 1);
add_action('do_feed_rss2_comments', 'pkpd_security_disable_feed', 1);
add_action('do_feed_atom_comments', 'pkpd_security_disable_feed', 1);
