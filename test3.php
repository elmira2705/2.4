<?php
$json = file_get_contents(_DIR_."/answers.json");
$data = json_decode($json, true);
?>
<html>
<head>
  <title>Домашнее задание к лекции 2.4 «Куки, сессии и авторизация». Тест№3</title>
</head>

<body>
  <h4>Тест №3</h4>
  <?php foreach($data as $item) { ?>
    <form action="admin.php" method="POST">
          <fieldset>
            <legend><?php echo $item["question7"]?></legend>
            <label><input type="radio" name="q7"><?php echo $item["answer1"]?></label>
            <label><input type="radio" name="q7"><?php echo $item["answer2"]?></label>
            <label><input type="radio" name="q7"><?php echo $item["answer3"]?></label>
          </fieldset>
          <fieldset>
            <legend><?php echo $item["question8"]?></legend>
            <label><input type="radio" name="q8"><?php echo $item["answer1"]?></label>
            <label><input type="radio" name="q8"><?php echo $item["answer2"]?></label>
            <label><input type="radio" name="q8"><?php echo $item["answer3"]?></label>
          </fieldset>
          <fieldset>
            <legend><?php echo $item["question9"]?></legend>
            <label><input type="radio" name="q9"><?php echo $item["answer1"]?></label>
            <label><input type="radio" name="q9"><?php echo $item["answer2"]?></label>
            <label><input type="radio" name="q9"><?php echo $item["answer3"]?></label>
          </fieldset>
          <input type="submit" value="Отправить">
    </form>
</body>
</html>
