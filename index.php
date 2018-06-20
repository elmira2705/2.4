<?php
require_once 'functions4.php';

$errors = [];

if (!empty ($_POST))
{
  if (login ($_POST['name']))
  {
    redirect ('testn');
  }
  else
  {
    $errors [] = 'Неверный логин или пароль';
  }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Авторизация</title>
</head>
<body>
  <section id="login">
    <div>
      <h1>Авторизция</h1>
      <ul>
      <?php foreach ($errors as $error) : ?>
      <ul><?php echo $error ?></ul>
      <?php endforeach;?>
      </ul>
      <form method="post">
        <div>
          <label>Имя</label>
            <input type="text" placeholder="Имя" name="name">
        </div>
                <input type="submit" value="Войти">
            </form>
          </div>
  </section>
</body>
</html>
