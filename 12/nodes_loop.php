<?php

echo '<title>PHP - Простой XML</title>';

$xml = simplexml_load_file('catalog.xml') or die ('Невозможно загрузить данные!');
$counter = 0;

foreach ($xml->children() as $book)
{
  $counter++;

  echo 'Книга '.$counter.': ';
  echo $book->title.' для начинающих ['.$book->category.']<hr>';
}

?>
