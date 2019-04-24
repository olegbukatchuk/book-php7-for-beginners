<?php

$page_title = 'PHP-включеня';

include ('./header.html');

echo '
  <form action="include.php" method="POST">
  <p>Имя:<input type="text" name="name"></p>
  <p>Email:<input type="text" name="email"></p>
  <p><input type="sublit" value="Подача запрооса"></p>
  </form>
';

include ('./footer.html');

?>
