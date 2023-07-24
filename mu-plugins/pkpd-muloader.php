<?php
/**
 * Peak Performance Digital Must Use Plugin Loader
 *
 * Calls security and performance functions as a must-use plugin
 * 
 * @package           pkpd-muloader
 * @author            Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright         2023 Peak Performance Digital 
 * @license           GPL-2.0-or-later
 * @version           1.0.0
 * @since             1.0.0 Added 2023-07-24
 *
 * @wordpress-plugin
 * Plugin Name:         Peak Performance Digital Must Use Plugin Loader
 * Plugin URI:          https://peakperformancedigital.com
 * Description:         Calls security and performance functions as a must-use plugin
 * Version:             1.0.0
 * Requires at least:   6.0
 * Requires PHP:        7.4
 * Updated:             July 24, 2023
 * Author:              Adam S. Lowe                 
 * Author URI:          https://peakperformancedigital.com
 * License:             GPL-2.0+
 * License URI:         http://www.gnu.org/licenses/gpl-2.0.txt
 */


 require WPMU_PLUGIN_DIR.'/pkpd-mu/pkpd-mu.php'; /*Loads the plugin from a subdirectory*/