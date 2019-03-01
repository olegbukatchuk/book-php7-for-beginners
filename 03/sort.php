<?php

  $a = NULL;
  $b = 8;
  $c = 'PHP - это весело!';

  $verb = ($b == 1) ? 'угадали' : 'не угадали';
  echo "Вы $verb! Вы назвали число $b.<hr>";

  $parity = ($b % 2 != 0) ? 'нечётное' : 'чётное';
  echo "$b - $parity число<hr>";

  $result = $a ?? $b ?? $c;
  echo "abc: $result <br>";

  $result = $c ?? $b ?? $a;
  echo "cba: $result <br>";
  
?>
