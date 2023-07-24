<?php
/**
 * Disables the Block Editor block directory
 * 
 * In the editor, if you search for something, third party
 * blocks show up and ask you if you want to install them.
 * This disables that behavior.
 * 
 * 
 * @package         pkpd-masterplugin\disable-block-directory
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */

 function pkpd_disable_block_directory_plugin() {
    // Define a list of allowed user roles.
    $allowed_roles = array( '' );

    // Check whether the current user has any of the above allowed user roles.
    $roles_filtered = array_intersect(
        $allowed_roles,
        (array) wp_get_current_user()->roles
    );

    // If the user does not have any of that roles, disable the Block Directory.
    if ( empty( $roles_filtered ) ) {
        remove_action(
            'enqueue_block_editor_assets',
            'wp_enqueue_editor_block_directory_assets'
        );
    }
}
add_action( 'init', 'pkpd_disable_block_directory_plugin' );
