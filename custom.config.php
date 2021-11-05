<?php
/**
 * This is my custom config for Nextcloud, the values in these file take precedence over config.php
 */

$CONFIG = array (

  'trusted_proxies' =>
  array (
    0 => '172.22.0.0/16',
  ),
  'defaultapp' => 'files',
  'overwriteprotocol' => 'https',
  'default_phone_region' => 'NL',

  'enable_previews' => true,
  'enabledPreviewProviders' =>
  array (
    'OC\Preview\Movie',
    'OC\Preview\PNG',
    'OC\Preview\JPEG',
    'OC\Preview\GIF',
    'OC\Preview\BMP',
    'OC\Preview\XBitmap',
    'OC\Preview\MP3',
    'OC\Preview\MP4',
    'OC\Preview\TXT',
    'OC\Preview\MarkDown',
    'OC\Preview\PDF'
  ),
);
