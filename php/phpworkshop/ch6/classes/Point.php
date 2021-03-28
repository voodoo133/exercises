<?php  

if (!defined("POINT_INCLUDED")) {
  define("POINT_INCLUDED", true);


  class Point
  {
    public $x;
    public $y;
    public $z;

    public function __construct(float $x, float $y, float $z)
    {
      $this->x = $x;
      $this->y = $y;
      $this->z = $z;
    }
  }

  $p = new Point(1, 2, 3);

  echo $p->x . PHP_EOL;
}


?>