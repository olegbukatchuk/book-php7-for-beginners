<?php

echo 'Дата: '.date('jS F Y').'<br>';
echo 'День недели: '.date('l').'<br>';
echo 'Время: '.date('h: i: s a').'<br>';
echo 'Часовой пояс: '.date_default_timezone_get().'<hr>';

date_default_timezone_set('Europe/Moscow');
echo 'Текущий часовой пояс: '.date_default_timezone_get();
echo '<br>Текущёе время: '.date('h: i: s').'<hr>';

$d = strtotime('tomorrow');
echo 'Завтра: '.date('l, jS F Y', $d).'<br>';

$d = strtotime('August 18, 1979');
echo 'День рождения Михаила: '.date('jS F', $d);

?>
