<?php 

abstract class Pager
{
  abstract protected function total();
  abstract protected function pnumber();
  abstract protected function pageLink();
  abstract protected function parameters();
}
