<?php
/**
 * Make the WP Block editor wider
 * 
 * Allows the block editor to expand to 1280px with a 1rem margin
 * 
 * @package         pkpd-wptheme\block-editor-width
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */


function pkpd_block_editor_full_width() {
  echo '<style>
  .wp-block {
    /*width: 100% !important;*/
    max-width: 1280px !important;}
  .editor-styles-wrapper .editor-writing-flow {  
    max-width: 1280px !important;
    margin: 1rem !important;}
  .editor-styles-wrapper {margin: 1rem !important;}
}
  </style>';
}
add_action('admin_head', 'pkpd_block_editor_full_width');
