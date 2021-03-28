<?php

function get_ip()
{
  if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
    $ip = $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
  } else {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
      $ip = $_SERVER['REMOTE_ADDR'];
    }
  }

  return $ip;
}

$ip_list_file = "ip_list.log";
$ip_list = [];

if (file_exists($ip_list_file)) {
  $ip_list = json_decode(file_get_contents($ip_list_file), true);
}

$curr_ip = get_ip();

if (!isset($ip_list[$curr_ip])) 
  $ip_list[$curr_ip] = 0;

$ip_list[$curr_ip]++;

file_put_contents($ip_list_file, json_encode($ip_list));