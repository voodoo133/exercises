<?php 

function task2()
{
  function odd(int $num): bool
  {
    return $num % 2 !== 0;
  }

  var_dump(odd(3), odd(4));
}

function task3()
{
  function sum(...$nums)
  {
    return array_sum($nums);
  }

  var_dump(sum(1, 2, 3), sum(1, 2, 3, 4, 5));
}