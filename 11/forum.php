<?php

$page_title = 'PHP - Форум';

include ('../09/header.html');

require ('./connect_db.php');

$sql = 'SELECT * FROM forum';
$result = mysqli_query($dbc, $sql);

if (mysqli_num_rows($result) > 0)
{
  echo '<table><tr><th>Автор</th><th>Тема</th><th id="msg">Сообщение</th></tr>';

  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
  {
    echo '<tr><td>'.
    $row['first_name'].' '.
    $row['last_name'].'<br>'.
    $row['post_date'].'</td><td>'.
    $row['subject'].'</td><td>'.
    $row['message'].'</td></tr>';
  }
}
else
{
  echo '<p>В настоящее время сообщений нет.</p>';
}

echo '<p><a href="post.php">Написать сообщение</a></p>';

mysqli_close($dbc);

include ('../09/footer.html');

?>
