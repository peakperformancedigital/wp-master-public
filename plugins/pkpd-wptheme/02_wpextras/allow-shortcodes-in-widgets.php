<?php
/**
 * Allow shortcodes in widgets
 * 
 * By default, shortcodes don't work in widgets. This enables them. 
 * 
 * @package         pkpd-wptheme\allow-shortcodes-in-widgets
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */

 
add_filter ('widget_text', 'do_shortcode');