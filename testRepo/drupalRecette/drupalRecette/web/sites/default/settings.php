
<?php

/*$config['system.logging']['error_level'] = 'verbose';

error_reporting(E_ALL);
ini_set('display_errors', FALSE);
ini_set('display_startup_errors', FALSE);
*/
if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}
$databases['default']['default'] = array (
  'database' => 'drupaldb',
  'username' => 'drupal',
  'password' => 'Softia321+',
  'prefix' => 'dp_rf_',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['hash_salt'] = 'rWXQwm4H_vbkviuGYyL_0tkZbX7drhFoNM3bhi6AUEChz2uyppeI_ehzeQpXaqPL18uhWEkYyA';
$settings['config_sync_directory'] = 'sites/default/files/config_UNgndmmFwxfTWElyxTOgUWjlNXs5zaZru2Ptkchbm_zgolQUsKXn8qqVMuQzoFRxeKG6qnQAEg/sync';

$settings['trusted_host_patterns'] = array(
  '^ces-refonte.softia.ovh$',
);
$conf['https'] = TRUE;
$options['uri'] = 'https://ces-refonte.softia.ovh/';
