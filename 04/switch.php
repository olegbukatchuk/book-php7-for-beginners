<?php

  $number = 2;
  $letter = 'Б';

  switch ($number) {
    case 1:
      echo 'Единица<br>';
      break;
    case 2:
      echo 'Двойка<br>';
      break;
    case 3:
      echo 'Тройка<br>';
    default:
      echo 'Неизвестное число<br>';
      break;
  }

  switch ($letter) {
    case 'А':
      echo 'Буква "А"<br>';
      break;
    case 'Б':
      echo 'Буква "Б"<br>';
      break;
    case 'В':
      echo 'Буква "В"<br>';
    default:
      echo 'Неизвестная буква<br>';
      break;
  }

  switch ($number) {
    case 0:
    case 1:
    case 2:
      echo 'Меньше, чем 3<br>';
      break;
    default:
      echo '3 или больше, либо меньше нуля<br>';
      break;
  }

?>
