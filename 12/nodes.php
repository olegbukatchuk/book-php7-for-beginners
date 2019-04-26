<?php

echo '<title>PHP - Простой XML</title>';

$xml = simplexml_load_file('catalog.php') or die ('Невозможно загрузить данные!');

echo 'Первая книга: '.$xml->book[0]->title.' для начинающих<br>';
echo 'Категория: '.$xml->book[0]->category;

?>
