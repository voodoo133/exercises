<?php  

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

?>