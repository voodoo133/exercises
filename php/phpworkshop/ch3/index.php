<?php 

date_default_timezone_set("Europe/Moscow");

function exercise2 ()
{
  return date('d.m.Y H:i', time());
}

function exercise3()
{
  return mt_rand(0, 1000);
}
