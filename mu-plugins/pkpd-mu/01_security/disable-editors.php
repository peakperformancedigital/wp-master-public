<?php
/**
 * Disables the theme and plugin the plugin file editors
 * 
 * These directives should be placed in wp-config.php, 
 * not in a mu-plugin. They are included here for reference only.
 * Be careful using DISALLOW_FILE_MODS since it may prevent
 * you from adding or updating plugins and themes.
 * 
 * @package         pkpd-mu\disable-editors
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2023-06-20
 * 
 */


define( 'DISALLOW_FILE_EDIT', true ); //disables file editor
//define( 'DISALLOW_FILE_MODS', true ); //disables both file editor and installer (use with caution)