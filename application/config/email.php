<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'smtp.office365.com',
    'smtp_port' => 587,
    'smtp_user' => 'duyuru@erkurtholding.com.tr',
    'smtp_pass' => 'Mail4141',
    'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
    'charset' => 'utf-8',
    //'charset' => 'iso-8859-1',
    'wordwrap' => TRUE,
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '5', //in seconds
    
);