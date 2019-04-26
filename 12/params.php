<?php

$city = 'Moscow';
$units = 'metric';
$mode = 'xml';
$id = '28df3c64f387cf55026e0de3fb8beaa4';

$request = 'http://api.openweathermap.org/data/2.5/weather?'.
           'q='.$city.'&units='.$units.'&mode='.$mode.'&APPID='.$id;

$xml = simplexml_load_file($request) or die ('Новозможно загрузить данные!');

try
{
  $xml->asXml('params.xml');
  
  header('Location: params.xml');
}
catch (Exception $e)
{
  echo 'Ошибка: '.$e->getMessage();
}

?>
