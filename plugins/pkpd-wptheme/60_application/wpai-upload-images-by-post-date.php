<?php
/**
 * WPAI - Upload images to folder based on post date
 * 
 * Upload all images for the post to a folder based 
 * on the post date (in Y/m format). For example, if 
 * the post was published on June 1st 2017, its images 
 * would be uploaded to /wp-content/uploads/2017/06.
 * 
 * @package         pkpd-wptheme\wpai-upload-images-by-post-date
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */


if ( ! function_exists( 'pkpd_set_import_img_upload_folder_by_post_date' ) ) {
 function pkpd_set_import_img_upload_folder_by_post_date($uploads, $articleData, $current_xml_node, $import_id) {
	if ( ! empty($articleData['post_date'])) {
		$uploads['path'] = $uploads['basedir'] . '/' . date("Y/m", strtotime($articleData['post_date']));
		$uploads['url'] = $uploads['baseurl'] . '/' . date("Y/m", strtotime($articleData['post_date']));
		
		if (!file_exists($uploads['path'])) {
			mkdir($uploads['path'], 0755, true);
		}
	}
	return $uploads;
}   
}

add_filter('wp_all_import_images_uploads_dir', 'pkpd_set_import_img_upload_folder_by_post_date', 99, 4);