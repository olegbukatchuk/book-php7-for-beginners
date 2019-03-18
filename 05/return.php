<?php

  function supply() : array {
    return array(75, 3.142, 'Супер PHP', True);
  }

  $array = supply();

  foreach ($array as $data) {
    echo "Значение элемента: $data<br>";
  }

?>
