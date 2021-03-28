<?php  

namespace ch7_namespace;

function task1()
{
  function pow(int $num, int $degree): int
  {
    $result = $num;

    for ($i = 1; $i < $degree; $i++)
      $result *= $num;

    return $result;
  }

  echo pow(2, 10) . PHP_EOL;
}

function task2()
{
  function parity(int $num): string
  {
    return $num === ($num >> 1) << 1 ? "Number is even" : "Number is odd";
  }

  echo parity(2) . PHP_EOL;
  echo parity(5) . PHP_EOL;
}

?>