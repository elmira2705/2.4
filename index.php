<? php
session_start();
reqire_once _DIR_ . 'functions.php';

if (!isAuthorized()) {
    header ('Location: index.php');
    die;
}

$errors=[];
if ($_SERVER ['REQUEST_METHOD']) =='POST') {
    $login= $_POST['login'];
    $password=$_POST['password'];
    $username = $_POST['username'];
    if (login(empty($login, $password) && !empty($username) {
        echo $username . ", вы авторизованы как гость";
        header('Location:list.php');
        die;
    } elseif empty($username){
        $errors[]='Пожалуйста, заполните поле \"Имя\"';
        header ('Location: index.php');
    }
    if (isAdmin()) {
        echo "Добро пожаловать на страницу Администратора";
        header('Location:list_admin.php');
        die;
    }
} ?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8"
  <title>Домашнее задание к лекции 2.4 «Куки, сессии и авторизация»</title>
</head>

<body>
  <h4>Пожалуйста, зарегестрируйтесь.</h4>
  <h3>Чтобы войти как гость, достаточно только имени:</h3>
  <ul>
    <? foreach ($errors as $error): ?>
    <li><?= $errors ?></li>
  <? endforeach; ?>
  </ul>
    <form method="POST" id="login-form" action="">
      <div>
        <label for="login">Логин</label>
        <input type="text" placeholder="Логин" name="login"/>
      </div>
      <div>
        <label for="key">Пароль</label>
        <input type="password" placeholder="Пароль" name="password"/>
      </div>
      <div>
        <label for="username">Имя</label>
        <input type="username" placeholder="Имя" name="username"/>
      </div>
      <input type="submit" value="Войти"/>
    </form>
  </body>
  </html>
