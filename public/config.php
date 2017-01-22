<?php

/**
 * Set configuration of your phile installation.
 *
 * You can also overwrite Phile-defaults here.
 */
$config = [];

/**
 * encryption key
 */
$config['encryptionKey'] = 'bOaZh973Ep0FB6QG5xk3hRP0ABQjZp5Ou04D?VxW{}pyea37GT]Lh{!Wpg3mCade';

/**
 * page title
 */
$config['site_title'] = 'PhileCMS';

/**
 * default theme
 */
$config['theme'] = 'example';
$config['plugins']['gibbs\\phileSubNavigation'] = array('active' => true);

/**
 * demo plugin
 */
// $config['plugins']['mycompany\\demoPlugin'] = ['active' => true];

return $config;
