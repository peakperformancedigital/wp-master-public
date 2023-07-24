<?php
/**
 * WPAI - Order imported items as they're ordered in the CSV/XML file by setting a custom post date
 * 
 * This will set a custom post date for each imported item so that they're displayed in the same exact order as they are in the import file.
 * 
 * @package         pkpd-wptheme\wpai-order-as-input-file
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */


if ( ! function_exists( 'pkpd_set_imported_item_date' ) && ! function_exists( 'pkpd_reset_imported_item_date' ) ) {
    function pkpd_set_imported_item_date( $id ) {
    	if ( $post = get_post( $id ) ) {
    		$date = get_option( 'my_custom_date_option', date( "Y-m-d H:i:s", time() ) );
    		
    		if ( $date_obj = new DateTime( $date ) ) {
    			$date_obj->modify( '-1 second' );
    			$new_date = $date_obj->format( 'Y-m-d H:i:s' );
    			update_option( 'my_custom_date_option', $new_date );
    			wp_update_post( array(
    				'ID' 			=> $id,
    				'post_date' 	=> $new_date,
    				'post_date_gmt' => get_gmt_from_date( $new_date )
    			) );
    		}
    	}
    }
    
    function pkpd_reset_imported_item_date( $import_id ) {
    	delete_option( 'my_custom_date_option' );
    }
}

add_action( 'pmxi_saved_post', 'pkpd_set_imported_item_date', 10, 1 );
add_action( 'pmxi_after_xml_import', 'pkpd_reset_imported_item_date', 10, 1 );