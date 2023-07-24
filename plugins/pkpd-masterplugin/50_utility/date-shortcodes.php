<?php
/**
 * Adds shortcodes to display the date in various ways
 * 
 * @package         pkpd-masterplugin\allow-svg
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */


function pkpd_year_shortcode () {
    $year = date_i18n ('Y');
    return $year;
}
add_shortcode ('year', 'pkpd_year_shortcode');

function pkpd_month_shortcode () {
    $monthyear = date_i18n ('F');
    return $month;
}
add_shortcode ('month', 'pkpd_month_shortcode');

function pkpd_yyyymmdd_shortcode () {
    $yyyymmdd = date_i18n ('y-m-d'); 
    return $yyyymmdd;
}
add_shortcode ('yyyymmdd', 'pkpd_yyyymmdd_shortcode');

function pkpd_monthyear_shortcode () {
    $monthyear = date_i18n ('F Y');
    return $monthyear;
}
add_shortcode ('monthyear', 'pkpd_monthyear_shortcode');

function pkpd_day_shortcode () {
    $day = date_i18n ('l');
    return $day;
}
add_shortcode ('day', 'pkpd_day_shortcode');