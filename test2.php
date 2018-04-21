<?php
$json = file_get_contents(_DIR_."/answers.json");
$data = json_decode($json, true);
?>
<html>
<head>
  <title>Домашнее задание к лекции 2.4 «Куки, сессии и авторизация». Тест№2</title>
</head>

<body>
  <h4>Тест №2</h4>
    <?php foreach($data as $item) { ?>
    <form action="admin.php" method="POST">
        <fieldset>
            <legend><?php echo $item["question4"]?></legend>
            <label><input type="radio" name="q4"><?php echo $item["answer1"]?></label>
            <label><input type="radio" name="q4"><?php echo $item["answer2"]?></label>
            <label><input type="radio" name="q4"><?php echo $item["answer3"]?></label>
          </fieldset>
          <fieldset>
            <legend><?php echo $item["question5"]?></legend>
            <label><input type="radio" name="q5"><?php echo $item["answer1"]?></label>
            <label><input type="radio" name="q5"><?php echo $item["answer2"]?></label>
            <label><input type="radio" name="q5"><?php echo $item["answer3"]?></label>
          </fieldset>
          <fieldset>
            <legend><?php echo $item["question6"]?></legend>
            <label><input type="radio" name="q6"><?php echo $item["answer1"]?></label>
            <label><input type="radio" name="q6"><?php echo $item["answer2"]?></label>
            <label><input type="radio" name="q6"><?php echo $item["answer3"]?></label>
          </fieldset>
          <input type="submit" value="Отправить">
    </form>
</body>
</html>
