<?php

$url = 'http://www.kaspersky.ru/rss/news';
$xml = simplexml_load_file($url) or die ('Невозможно загрузить данные!');

include ('../09/header.html');

foreach ($xml->channel->item as $item)
{
  echo '<a href="'.$item->link.'">'.$item->title.'</a>';
  echo '<br><small>'.$item->pubDate.'</small><br>';
  echo $item->description. '<hr>';
}

include ('../09/footer.php');

?>
