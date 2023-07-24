<?php
/**
 * Disable RSD Link in headers
 * 
 * @package         pkpd-mu\remove-rsd-link
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-01-20
 * 
 */


remove_action('wp_head', 'rsd_link');