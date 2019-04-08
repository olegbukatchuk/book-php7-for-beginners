<?php

$str = "C++ Programming in easy steps";
echo "Исходная строка: '$str' <hr>";

$ver = strtolower($str);
echo "Строчные буквы: '$ver' <br>";

$ver = strtoupper($str);
echo "Проописные буквы: '$ver' <hr>";

$ver = ucfirst(strtolower($str));
echo "Прописная первая буква первого слова: '$ver' <br>";
echo "Прописная первая буква каждогоо слова: ".ucwords($ver);

?>
