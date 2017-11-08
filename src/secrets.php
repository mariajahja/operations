<?php
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
    'signals' => '{SECRET_API_AUTH_SIGNALS}',
    'ilinet' => '{SECRET_API_AUTH_ILINET}',
    'stateili' => '{SECRET_API_AUTH_STATEILI}',
    'cdc' => '{SECRET_API_AUTH_CDC}',
    'sensors' => '{SECRET_API_AUTH_SENSORS}'
  );

  public static $wiki = array(
    'hmac' => '{SECRET_WIKI_HMAC}'
  );

  public static $cdcp = array(
    'hmac' => '{SECRET_CDCP_HMAC}'
  );

}
?>