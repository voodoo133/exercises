<?php 

function task1()
{
  function fib($n)
  {
    $a = 0; 
    $b = 1;

    if ($n === 0) return $a;
    if ($n === 1) return $b;

    for ($i = 2; $i <= $n; $i++) {
      $c = $a + $b;

      $a = $b;
      $b = $c;
    }

    return $c;
  }

  echo fib(5) . PHP_EOL;
}

function currMonthCalendar()
{
  $cal = [];

  $first_month_day = 1;
  $last_month_day = date("t", time());

  $week_num = 1;

  $weekday_first_month_day = intval(date("w", strtotime(date("Y-m", time()) . '-01') + 1));

  $curr_month_day = $first_month_day;

  while (1) {
    for ($i = 1; $i <= 7; $i++) {
      if ($week_num === 1) {
        if ($i < $weekday_first_month_day) {
          $cal[$week_num][] = null;
        } else {
          $cal[$week_num][] = $curr_month_day++;
        }
      } else {
        if ($curr_month_day <= $last_month_day) {
          $cal[$week_num][] = $curr_month_day++;
        } else {
          $cal[$week_num][] = null;
        }
      }
    }

    $week_num++;

    if ($curr_month_day > $last_month_day) break;
  }

  return $cal;
}

$cal = currMonthCalendar();

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
    td {
      text-align: right;
    }
  </style>
</head>
<body>
  <table>
    <tr>
      <th>Пн</th>
      <th>Вт</th>
      <th>Ср</th>
      <th>Чт</th>
      <th>Пт</th>
      <th>Сб</th>
      <th>Вс</th>
    </tr>
    <? foreach ($cal as $week): ?>
    <tr>
      <? foreach ($week as $day): ?>
      <td><?=$day ?? '';?></td>
      <? endforeach; ?>
    </tr>
    <? endforeach; ?>
  </table>
</body>
</html>