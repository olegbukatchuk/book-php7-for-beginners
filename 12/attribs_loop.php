<?php

echo '<title>PHP - Простой XML</title>';

$xml = simplexml_load_file('catalog.xml') or die ('Невозможно загрузить данные!');
$counter = 0;

foreach ($xml->children() as $book)
{
  $counter++;

  echo ' '.$counter.': ';
  echo '<img src="'.$book->title['cover'].'">';
}

?>
