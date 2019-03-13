<?php

  $number = array(10, 20, 30);

  echo '<dt>Цикл while: ';

  $i = 0;

  while ($i < 3) {
    echo "<dd>Элемент $i = $number[$i]";
    $i++;
  }

  echo '<dt>Цикл do while: ';

  $i = 0;

  do {
    echo "<dd>Элемент $i = $number[$i]";
    $i++;
  } while ($i < 3);

?>
