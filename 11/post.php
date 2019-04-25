<?php

$page_title = 'PHP - Публикация сообщений';

include ('../09/header.html');

echo '
  <form action="process.php" method="POST" accept-charset="utf-8">
  Имя: <input name="first_name" type="text">
  Фамилия: <input name="last_name" type="text">
  <p>Тема:<br><input name="subject" type="text" size="64"></p>
  <p>Сообщение:<br><textarea name="message" rows="5" cols="50"></textarea></p>
  <p><input type="submit" value="Отправить"></p>
  </form>
';

echo '<p><a href="forum.php">Вернуться к форуму</a></p>';

include ('../09/footer.html');

?>
