<?php 

function task1()
{
  $arr = ['fst', 'snd', 'thd', 'fth'];

  echo $arr[mt_rand(0, count($arr) - 1)] . PHP_EOL;
}

function task2()
{
  $arr = ['fst' => 1, 'snd' => 2, 'thd' => 3, 'fth' => 4];

  print_r(array_keys($arr));
  echo PHP_EOL;
}

function task3()
{
  $arr = ['fst', 'snd', 'thd', 'fth', 'snd', 'thd'];

  print_r(array_unique($arr));
  echo PHP_EOL;
}

function task4()
{
  $x = 1;
  $y = 2;

  [$y, $x] = [$x, $y];

  print_r($x);
  echo PHP_EOL;
  print_r($y); 
  echo PHP_EOL;
}

function task5()
{
  $arr = [];
  $arr_length = mt_rand(5, 10);

  for ($i = 0; $i < $arr_length; $i++)
    $arr[] = mt_rand(0, 100);

  sort($arr);

  print_r($arr); 
  echo PHP_EOL;
}

function task6() 
{
  $arr = file("months.txt");

  print_r($arr); 
  echo PHP_EOL;
}

task6();

?>