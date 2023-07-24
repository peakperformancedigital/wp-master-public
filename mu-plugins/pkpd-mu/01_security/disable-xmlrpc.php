<?php
/**
 * Disables xmlrpc
 * 
 * Sourced from https://blogvault.net/wordpress-disable-xmlrpc/
 * 
 * @package         pkpd-mu\disable-xmlrpc
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-01-20
 * 
 */

 
add_filter( 'xmlrpc_enabled', '__return_false' );
