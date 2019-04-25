<?php

$page_title = 'PHP - Ошибки';

include ('../09/header.html');

function fail($str)
{
  echo "<p>Пожалуйста, укажите $str</p>";
  echo '<p><a href="post.php">Написать сообщение</a>';

  include ('../09/footer.html');

  exit();
}

if (mysqli_affected_rows($dbc) != 1)
{
  echo '<p>Ошибка</p>'.mysqli_error($dbc);

  mysqli_close($dbc);
}
else
{
  mysqli_close($dbc);

  header('Location: forum.php');
}

if (isset($_POST['message']))
{
  if (!empty(trim($_POST['first_name'])))
  {
    $first_name = addslashes($_POST['first_name']);
  }
  else
  {
    fail('имя');
  }

  if (!empty(trim($_POST('last_name'))))
  {
    $last_name = addslashes($_POST['last_name']);
  }
  else
  {
    fail('фамилию');
  }

  if (!empty(trim($_POST['subject'])))
  {
    $subject = addslashes($_POST['subject']);
  }
  else
  {
    fail('тему');
  }

  if (!empty(trim($_POST['message'])))
  {
    $subject = addslashes($_POST['message']);
  }
  else
  {
    fail('текст сообщения');
  }
}

require ('../connect_db.php');

$sql = "INSERT INTO forum (first_name, last_name, subject, message, post_date)
        VALUES ('$first_name', '$last_name', '$subject', '$message', NOW())";

$result = mysqli_query($dbc, $sql);

?>
