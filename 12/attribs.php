<?php

echo '<title>PHP - Простой XML</title>';

$xml = simplexml_load_file('catalog.xml') or die ('Невозможно загрузить данные!');

echo 'Первая книга: '.$xml->book[0]->title.' для начинающих<br>';
echo 'Обложка: '.$xml->book[0]->title['cover'].'<br>';
echo '<img src="'.$xml->book[0]->title['cover'].'">';

?>
