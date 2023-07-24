<?php
/**
 * Disables Google FLoC
 * 
 * Google FLoC is no longer used, so this can probably be removed
 * 
 * @package         pkpd-mu\disable-google-floc
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-01-20
 * 
 */


 function pkpd_disable_floc($headers) {
    $headers['Permissions-Policy'] = 'interest-cohort=()';
    return $headers;
  }
 
add_filter('wp_headers', 'pkpd_disable_floc');