<?php
recuire_once 'funcrions4.php';

if (!isAuthorized ()){
  redirect ("index.php");
  die;
}
if (!isAdmin ()){
  http_response_code (403);
  echo 'Вам доступ запрещен!';
  die;
}
$uploaded_tests ='./Tests/';
if (!empty($_POST) || !empty($_FILES)) {
    move_uploaded_file($_FILES ['new_test']['tmp_name'], $uploaded_tests .
    $_FILES['new_test']['name']);
  }

if (is_uploaded_file($_FILES['new_test']['tmp_name'])) {
      header ('Location: listn.php');
  } else {
      echo "Файл не был загружен";
  }
?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>2.2 Обработка форм. Загрузка тестов</title>
</head>
<body>
  <h3>Страница администратора</h3>
  <h4> Загрузите новый тест в формате json: </h4>
  <form enctype="multipart/form-data" action="adminn.php" method="POST">
  <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
  <div>
    <input type="file" name="new_test">
  </div>
  <input type="submit" value="Загрузить">
</form>
</body>
</html>
