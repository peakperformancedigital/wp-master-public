<?php
/**
 * Disable WordPress Auto Updates for plugins and themes
 * 
 * Has a similar effect as the wp-config.php declatation
 * define( 'WP_AUTO_UPDATE_CORE', false );
 * 
 * @package         pkpd-masterplugin\disable-autoupdates
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */


add_filter( 'auto_update_plugin', '__return_false' );
add_filter( 'auto_update_theme', '__return_false' );