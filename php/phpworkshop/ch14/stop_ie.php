<?php

function getBrowser()
{
  $user_agent = $_SERVER['HTTP_USER_AGENT'];

  $browser = "Unknown Browser";

  $browser_array = array(
    '/msie/i' => 'Internet Explorer',
    '/trident/i' => 'Internet Explorer',
    '/firefox/i' => 'Firefox',
    '/safari/i' => 'Safari',
    '/chrome/i' => 'Chrome',
    '/edge/i' => 'Edge',
    '/opera/i' => 'Opera',
    '/netscape/i' => 'Netscape',
    '/maxthon/i' => 'Maxthon',
    '/konqueror/i' => 'Konqueror',
    '/mobile/i' => 'Handheld Browser',
  );

  foreach ($browser_array as $regex => $value) {
    if (preg_match($regex, $user_agent))
      $browser = $value;

  }

  return $browser;
}

if (getBrowser() === 'Internet Explorer') {
  echo 'IE is forbidden';
}