<? php
require_once _DIR_ . 'functions.php';

if (!isAdmin()) {
    http_response_code (403);
    echo 'Доступ запрещен!';
    header ('Location: index.php');
  }
}

<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8"
  <title>Домашнее задание к лекции 2.4 «Куки, сессии и авторизация»</title>
</head>

<body>
  <h3><a href="test4.html">Создать тест</a>"</h3>;
  <h4>Редактировать тесты:</h4>
      <ul>
        <li><a href="test1.html">Тест1</a>
        <input type="submit" value="Редактировать тест">
        <input type="submit" value="Удалить тест"></li>
        <li><a href="test2.html">Тест2</a>
        <input type="submit" value="Редактировать тест">
        <input type="submit" value="Удалить тест"></li>
        <li><a href="test3.html">Тест3</a>
        <input type="submit" value="Редактировать тест">
        <input type="submit" value="Удалить тест"></li>
      </ul>
  </body>
</html>
