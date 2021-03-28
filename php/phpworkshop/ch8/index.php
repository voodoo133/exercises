<?php 

function task1()
{
  file_put_contents("hello.txt", "Hello, World!");

  $hello_content = file_get_contents("hello.txt");

  echo $hello_content . PHP_EOL;
}

function task2()
{
  file_put_contents(date("Y-m-d-h-i-s", time()) . ".txt", mt_rand(0, PHP_INT_MAX));
}

function task3()
{
  file_put_contents("extensions.txt", join("\n", get_loaded_extensions()));
  file_put_contents("constants.txt", join("\n", array_keys(get_defined_constants())));
}

task3();

?>
