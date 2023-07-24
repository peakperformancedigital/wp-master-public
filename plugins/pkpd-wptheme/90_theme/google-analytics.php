<?php
/**
 * Enable Google Analytics via gtag.js
 * 
 * Replace G-XXXXXXXXXX with the correct Google Measurement ID
 * 
 * @package         pkpd-wptheme\google-analytics
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */


function pkpd_analytics() {
  ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-XXXXXXXXXX');
    </script>
  <?php
}
add_action('wp_footer','pkpd_analytics', 20);
