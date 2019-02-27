<?php

  $phrase = 'Правда редко бывает чистой';
  $author = 'Оскар Уайльд';

  echo $phrase;
  echo "<p>Часто говорят, что <q>$phrase</q></p>";

  $phrase = $phrase . ' и никогда не бывает простой';

  echo "<p><q>$phrase</q><cite>&nbsp;$author</cite></p>"

?>
