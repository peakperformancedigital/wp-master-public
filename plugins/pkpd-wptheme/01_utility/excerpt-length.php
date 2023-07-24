<?php
/**
 * Set default excerpt length
 * 
 * The WordPress default excerpt length is 55 characters,
 * this sets it to whatever you want. 
 * 
 * @package         pkpd-wptheme\excerpt-length
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */

 
 add_filter( 'excerpt_length', function($length) {
    return 55;
}, PHP_INT_MAX );