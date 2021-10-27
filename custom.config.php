<?php
/**
 * This is my custom config for Nextcloud, the values in these file take precedence over config.php
 * This is a test
 * 
 */

$CONFIG = array (

  'trusted_domains' => 
  array (
    0 => '192.168.1.3:8080',
    1 => 'cloud.theautomation.nl',
  ),
  'trusted_proxies' =>
  array (
    0 => '172.20.0.0/16',
  ),
  'defaultapp' => 'files',
  'overwriteprotocol' => 'http',
  'default_phone_region' => 'NL',

);
