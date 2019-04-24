<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
<p>Имя:<input type="text" name="name" value="<?php if (isset ($_POST['name'])) echo $_POST['name']; ?>"></p>
<p>Email:<input type="text" name="email" value="<?php if (isset ($_POST['email'])) echo $_POST['email']; ?>"></p>
<p><input type="submit" value="Подача запрооса"></p>
<form>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $errors = array();

  if (empty ($_POST['name'])) {
    $errors[] = trim($_POST['name']);
  }

  if (empty ($_POST['email'])) {
    $errors[] = trim($_POST['email']);
  }

  if (!empty($errors)) {
    echo 'Ошибка пожалуйста укажите ';

    foreach ($errors as $msg) {
      echo " - $msg ";
    }
  } else {
    echo "Форма отправлена! Спасибо, $name";
  }
}

?>
