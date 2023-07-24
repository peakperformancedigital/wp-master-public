<?php
/**
 * Replace the default [...] excerpt more with an elipsis.
 * 
 * @package         pkpd-masterplugin\default-excerpt-ellipses
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */


add_filter(
	'excerpt_more',
	function( $more ) {
		return '&hellip;';
	}
);