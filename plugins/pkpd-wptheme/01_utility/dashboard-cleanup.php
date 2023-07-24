<?php
/**
 * Remove unwanted dashboard widgets
 * 
 * Use 'dashboard-network' as the second parameter to remove widgets from a network dashboard.
 * 
 * @package         pkpd-wptheme\dashboard-cleanup
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */

 
function pkpd_remove_dashboard_widgets(){
    //remove_meta_box('dashboard_activity', 'dashboard', 'normal');   // Activity
    remove_action( 'welcome_panel', 'wp_welcome_panel' ); // WordPress Welcome Panel
    remove_meta_box('dashboard_right_now', 'dashboard', 'normal');   // Right Now
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); // Recent Comments
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');  // Incoming Links
    remove_meta_box('dashboard_plugins', 'dashboard', 'normal');   // Plugins
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');  // Quick Press
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');  // Recent Drafts
    remove_meta_box('dashboard_primary', 'dashboard', 'side');   // WordPress blog
    remove_meta_box('dashboard_secondary', 'dashboard', 'side');   // Other WordPress News
    remove_meta_box('dashboard_site_health', 'dashboard', 'normal');   // Site Health
    remove_meta_box( 'e-dashboard-overview', 'dashboard', 'normal'); // Elementor News
    remove_meta_box( 'seopress_ga_dashboard_widget', 'dashboard', 'normal' ); // SEOPress Google Analytics
    remove_meta_box( 'seopress_matomo_dashboard_widget', 'dashboard', 'normal' ); // SEOPress Matomo Analytics
    remove_meta_box( 'wp_mail_smtp_reports_widget_lite', 'dashboard', 'normal' ); // WP Mail SMTP Dashboard 
    remove_meta_box( 'itsec-dashboard-widget', 'dashboard', 'normal' ); // iThemes Security
    remove_meta_box( 'fluentsmtp_reports_widget', 'dashboard', 'normal' ); // FluentSMTP
    remove_meta_box( 'google_dashboard_widget', 'dashboard', 'normal' ); // Google SiteKit
    //remove_meta_box( 'mec_widget_total_bookings', 'dashboard', 'normal' ); // MEC Total Booking Dashboard
    //remove_meta_box( 'mec_widget_news_features', 'dashboard', 'normal' ); // MEC News Dashboard
    //remove_meta_box( 'rg_forms_dashboard', 'dashboard', 'normal' ); // Gravity Forms
    //remove_meta_box( 'vg_sheet_editor_usage_stats', 'dashboard', 'normal'); // WP Sheet Editor
}
add_action('wp_dashboard_setup', 'pkpd_remove_dashboard_widgets', 20);
