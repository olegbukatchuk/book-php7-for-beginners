<?php

  $yes = TRUE;
  $no = FALSE;

  $result = ($no && $no) ? 'TRUE' : 'FALSE';
  echo "no и no вернёт $result<br>";

  $result = ($yes && $no) ? 'TRUE' : 'FALSE';
  echo "yes и no вернёт $result<br>";

  $result = ($yes && $yes) ? 'TRUE' : 'FALSE';
  echo "yes и yes вернёт $result<br>";

  $result = ($no || $no) ? 'TRUE' : 'FALSE';
  echo "no или no вернёт $result<br>";

  $result = ($yes || $no) ? 'TRUE' : 'FALSE';
  echo "yes или no вернёт $result<br>";

  $result = ($yes || $yes) ? 'TRUE' : 'FALSE';
  echo "yes или yes вернёт $result<br>";

  $result = (!$yes) ? 'TRUE' : 'FALSE';
  echo "не yes вернёт $result<br>";
  
?>
