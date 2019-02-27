<?php

  $days = array(
    'Понедельник',
    'Вторник',
    'Среда'
  );

  foreach ($days as $key => $value) {
    echo "&bull; $value ";
  }

  $months = array(
    'янв' => 'Январь',
    'фев' => 'Февраль',
    'мар' => 'Март'
  );

  echo '<dl>';

  foreach ($months as $key => $value) {
    echo "<dt>$key<dd>$value";
  }

  echo '</dl>';

?>
