<?php

  $letters = array('A', 'Б', 'В');
  $numbers = array(1, 2, 3);
  $matrix = array('Буква' => $letters, 'Число' => $numbers);

  echo "<p>Начало: {$matrix['Буква'][0]}";

  foreach ($matrix as $array => $list) {

    echo '<ul>';

    foreach ($list as $key => $value) {
      echo "<li>$array [$key] = $value ";
    }

    echo '</ul>';

  }

?>
