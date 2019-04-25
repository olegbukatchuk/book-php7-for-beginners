<?php

$dbc = mysqli_connect('db_server', 'db_user', 'db_pass', 'db_name') or die (mysqli_connect_error());

mysql_set_charset($dbc, 'utf-8');

?>
