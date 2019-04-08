<?php

$str = '| PHP String Fun |';

echo "Исходная строка: $str";

echo '<hr>Обращённая строка: '.strrev($str);
echo '<hr>Повторяющаяся строка: '.str_repeat($str, 3);
echo '<hr>Образанная строка: '.trim($str, '|');

$pad = str_pad($str, 30, '*', STR_PAD_LEFT);

echo "<hr>Подготовка символов: $pad";

echo '<hr>Разделение строки: ';

$token = strtok($str, ' ');

while ($token) {
  echo "$token ... ";

  $token = strtok(' ');
}

?>
