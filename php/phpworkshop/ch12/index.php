<?php 

function task1()
{
  return highlight_file("index.php", TRUE);
}

function task2()
{
  class Point
  {
    private $x = 0;
    private $y = 0;
    
    function __construct($x, $y)
    {
      $this->x = $x;
      $this->y = $y;
    }
  }

  $point = new Point(2, 4);

  file_put_contents("point.txt", serialize($point));
  $point = null;

  $recovery_point = unserialize(file_get_contents("point.txt"));

  print_r($recovery_point);
}

function task3()
{
  function arabic2roman($num)
  {
    $roman_nums = [
      'M' => 1000, 
      'CM' => 900, 
      'D' => 500, 
      'CD' => 400, 
      'C' => 100, 
      'XC' => 90, 
      'L' => 50, 
      'XL' => 40, 
      'X' => 10, 
      'IX' => 9, 
      'V' => 5, 
      'IV' => 4, 
      'I' => 1
    ];

    $output_roman_num = '';

    foreach ($roman_nums as $roman_num => $arabic_num) {
      if ($num % $arabic_num !== $num && $num !== 0) {
        $output_roman_num .= $roman_num;
        $num = $num % $arabic_num;
      }
    }

    return $output_roman_num;
  }

  var_dump(arabic2roman(116));
  var_dump(arabic2roman(199));
  var_dump(arabic2roman(14));
}

task3();
