<?php

  $x = 5;
  $y = 10;

  echo "X: $x, Y: $y<br>";

  $x = $x ^ $y;
  $y = $x ^ $y;
  $x = $x ^ $y;

  echo "X: $x, Y: $y<br>";

?>
