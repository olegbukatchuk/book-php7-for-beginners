<?php

$dbc = mysqli_connect('db', 'root', '', 'forum') or die (mysqli_connect_error());

mysqli_set_charset($dbc, 'utf-8');

?>
