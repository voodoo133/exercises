<?php 

class ComplexNumber
{
  private $real_part;
  private $imaginary_part;
  
  function __construct(float $rp, float $ip)
  {
    $this->real_part = $rp;
    $this->imaginary_part = $ip;
  }
}

?>