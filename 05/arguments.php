<?php

  $a = $b = 5;

  function modify(int $val, int &$ref) {
    echo "Переданные значения: $val, $ref<br>";

    $val++;
    $ref++;

    echo "Инкрементальные значения: $val, $ref<hr>";
  }

  modify($a, $b);

  echo "Сохранённые значения: $a, $b";

?>
