<? php
require_once _DIR_ . 'functions.php';

if (!isAuthorized()) {
    header ('Location: index.php');
    die;
}

<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8"
  <title>Домашнее задание к лекции 2.4 «Куки, сессии и авторизация»</title>
</head>

<body>
  <h4><?= getAuthorizedUser() ['username']; ?>, пожалуйста, выберите тест:</h4>
    <ul>
      <li><a href="test1.html">Тест1</a></li>
      <li><a href="test2.html">Тест2</a></li>
      <li><a href="test3.html">Тест3</a></li>
    </ul>
  </body>
</html>
