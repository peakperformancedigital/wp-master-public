<?php
/**
 * Hides the WordPress update notifications for non-admin users
 * 
 * @package         pkpd-mu\hide-wp-update-for-non-admin-users
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-01-20
 * 
 */

function pkpd_hide_core_update_notifications_from_users() {
	if ( ! current_user_can( 'update_core' ) ) {
		remove_action( 'admin_notices', 'update_nag', 3 );
	}
}
add_action( 'admin_head', 'pkpd_hide_core_update_notifications_from_users', 1 );