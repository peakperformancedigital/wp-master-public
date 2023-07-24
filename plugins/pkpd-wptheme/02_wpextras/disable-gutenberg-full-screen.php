<?php
/**
 * Disables the full-screen Block Editor
 * 
 * Allows us to see the WP Dasboard's sidebar.
 * 
 * @package         pkpd-wptheme\disable-gutenberg-full-screen
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */


add_action( 'admin_head', function () { ?>
	<style>
		.wp-admin .components-popover.nux-dot-tip {
			display: none !important;
		}
	</style>

	<script>
		jQuery(window).load( function(){
			wp.data && wp.data.select( 'core/edit-post' ).isFeatureActive( 'welcomeGuide' ) && wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'welcomeGuide' );
			wp.data && wp.data.select( 'core/edit-post' ).isFeatureActive( 'fullscreenMode' ) && wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'fullscreenMode' );
		});
	</script>
<?php } );