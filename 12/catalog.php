<?php

echo '<title>PHP - Простой XML</title><pre>';

$xml = simplexml_load_file('./catalog.xml') or die ('Невозможно загрузить данные!');

var_dump($xml);
