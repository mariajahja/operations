<?php

/*
This file is a template for the actual `secrets.php` used by various Delphi
frontends.

The "secret" values in this file are automatically replaced with production
credentials at deploy time.

This file needs to be kept in sync with `dev/docker/web/assets/secrets.php`.
*/

class Secrets {

  public static $db = array(
    'auto' => array('{SECRET_DB_USERNAME_AUTO}', '{SECRET_DB_PASSWORD_AUTO}'),
    'epi' => array('{SECRET_DB_USERNAME_EPI}', '{SECRET_DB_PASSWORD_EPI}')
  );

  public static $epicast = array(
    'captcha_key' => '{SECRET_EPICAST_CAPTCHA_KEY}'
  );

  public static $api = array(
    'twitter' => '{SECRET_API_AUTH_TWITTER}',
    'ght' => '{SECRET_API_AUTH_GHT}',
    'fluview' => '{SECRET_API_AUTH_FLUVIEW}',
    'cdc' => '{SECRET_API_AUTH_CDC}',
    'quidel' => '{SECRET_API_AUTH_QUIDEL}',
    'norostat' => '{SECRET_API_AUTH_NOROSTAT}',
    'afhsb' => '{SECRET_API_AUTH_AFHSB}',
    'sensors' => '{SECRET_API_AUTH_SENSORS}',
    'sensor_subsets' => array(
      'twtr_sensor' => '{SECRET_API_AUTH_TWTR_SENSOR}',
      'gft_sensor' => '{SECRET_API_AUTH_GFT_SENSOR}',
      'ght_sensors' => '{SECRET_API_AUTH_GHT_SENSORS}',
      'cdc_sensor' => '{SECRET_API_AUTH_CDC_SENSOR}',
      'quid_sensor' => '{SECRET_API_AUTH_QUID_SENSOR}',
      'wiki_sensor' => '{SECRET_API_AUTH_WIKI_SENSOR}',
    ),
  );

  public static $flucontest = array(
    'hmac' => '{SECRET_FLUCONTEST_HMAC}'
  );

  public static $wiki = array(
    'hmac' => '{SECRET_WIKI_HMAC}'
  );

  public static $cdcp = array(
    'hmac' => '{SECRET_CDCP_HMAC}'
  );

}
?>
