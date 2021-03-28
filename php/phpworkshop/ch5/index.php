<?php  

function task1() 
{
  function calculateDistance(Point $p1, Point $p2): float
  {
    return sqrt(pow($p2->x - $p1->x, 2) + pow($p2->y - $p1->y, 2) + pow($p2->z - $p1->z, 2));
  }

  require_once "classes/Point.php";

  $p1 = new Point(1.0, 1.0, 1.0);
  $p2 = new Point(3.0, 3.0, 3.0);

  $d = calculateDistance($p1, $p2);
}

function task2()
{
  require_once "classes/ComplexNumber.php";

  $cn = new ComplexNumber(1.0, 2.0);
}

function task3()
{
  require_once "classes/Build.php";
  require_once "classes/Porch.php";
  require_once "classes/Flat.php";
}

task3();
?>