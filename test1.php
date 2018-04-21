<?php
$json = file_get_contents(_DIR_."answers.json");
$data = json_decode($json, true);
?>
<html>
<head>
  <title>Домашнее задание к лекции 2.4 «Куки, сессии и авторизация». Тест№1</title>
</head>

<body>
  <h4>Тест №1</h4>
    <?php foreach($data as $item) { ?>
    <form action="admin.php" method="POST">
          <fieldset>
            <legend><?php echo $item["question1"]?></legend>
            <label><input type="radio" name="q1"><?php echo $item["answer1"]?></label>
            <label><input type="radio" name="q1"><?php echo $item["answer2"]?></label>
            <label><input type="radio" name="q1"><?php echo $item["answer3"]?></label>
          </fieldset>
          <fieldset>
            <legend><?php echo $item["question2"]?></legend>
            <label><input type="radio" name="q2"><?php echo $item["answer1"]?></label>
            <label><input type="radio" name="q2"><?php echo $item["answer2"]?></label>
            <label><input type="radio" name="q2"><?php echo $item["answer3"]?></label>
          </fieldset>
          <fieldset>
            <legend><?php echo $item["question3"]?></legend>
            <label><input type="radio" name="q3"><?php echo $item["answer1"]?></label>
            <label><input type="radio" name="q3"><?php echo $item["answer2"]?></label>
            <label><input type="radio" name="q3"><?php echo $item["answer3"]?></label>
          </fieldset>
          <input type="submit" value="Отправить">
    </form>
</body>
</html>