<?php
function squart($n)
{
  $x = $n;
  $y = 1;
  while($x > $y)
  {
    $x = ($x + $y)/2;
    $y = $n/$x;
  }
  return $x;
}
print_r(squart(25)."\n");
print_r(squart(121)."\n");
?>