<?php

class Session
{
  
  public function __construct()
  {
    session_start();
  }

  public function get($key)
  {
    return $_SESSION[$key] ?? "";
  }

  public function set($key, $value)
  {
    $_SESSION[$key] = $value;
  }

  public function listKeys()
  {
    $keys = [];

    foreach ($_SESSION as $key => $value) {
      $keys[] = $key;
    }

    return $keys;
  }

  public function existsKey($key)
  {
    return isset($_SESSION[$key]);
  }

  public function __destruct()
  {
    session_destroy();
  }
}

echo '<pre>';

$session = new Session();

$session->set('key', 'value');
var_dump($session->existsKey('key'));

$session->set('key1', 'value1');
var_dump($session->get('key1'));

var_dump($session->listKeys());
var_dump($session->get('key2'));

echo '</pre>';

?>
