<?php
/**
 * Send WP mail through SMTP server defined in wp-config.php
 * 
 * @package         pkpd-wptheme\mail-smtp
 * @author          Adam S. Lowe <adam@peakperformancedigital.com>
 * @copyright       2023 Peak Performance Digital 
 * @license         GPL-2.0-or-later
 * @version         0.1.0
 * @since           0.1.0 Added 2022-11-10
 * 
 */

/** 
 * Uncomment and add the following configuration to wp-config.php 
 * to use the MAIL SMTP function pkpd_smtp_mail_sender
 */
//define( 'SMTP_USER',   'username' );              // SMTP Username
//define( 'SMTP_PASS',   'password' );              // SMTP Password
//define( 'SMTP_HOST',   'hostname' );              // SMTP Server
//define( 'SMTP_FROM',   'from@company.com' );      // From email
//define( 'SMTP_NAME',   'Display Name' );          // Force From Nome
//define( 'SMTP_PORT',   '587' );                   // SMTP Port
//define( 'SMTP_SECURE', 'tls' );                   // SSL or TLS Method
//define( 'SMTP_AUTH',    true );                   // Use Secure SMTP authentication (true|false)
//define( 'SMTP_DEBUG',   0 );                      // For SMTP Debugging Set 1 or 2
 
if ( !function_exists('pkpd_smtp_mail_sender') ) :
 
    add_action( 'phpmailer_init', 'pkpd_smtp_mail_sender' );
 
    function pkpd_smtp_mail_sender( $phpmailer ) {

        $phpmailer->isSMTP();
        $phpmailer->Host       = SMTP_HOST;
        $phpmailer->SMTPAuth   = SMTP_AUTH;
        $phpmailer->Port       = SMTP_PORT;
        $phpmailer->Username   = SMTP_USER;
        $phpmailer->Password   = SMTP_PASS;
        $phpmailer->SMTPSecure = SMTP_SECURE;
        $phpmailer->From       = SMTP_FROM;
        $phpmailer->FromName   = SMTP_NAME;  
 
    } 
 
endif;


