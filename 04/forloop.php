<?php

  for ($i = 1; $i < 4; $i++) {
    echo "<dt>Итерация внешнего цикла $i";

    for ($j = 1; $j < 4; $j++) {
      echo "<dd>Итерация внутреннего цикла $j";
    }
  }

?>