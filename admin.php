<?php

    $maxFileSize = 100*1024;
    $validFileType = ["json"];
    $errorArray = [];
    $path = 'files/';
    $fileName = '';
    $result = '';

    if ($_FILES) {

        $fileName = $_FILES["user_file"]["name"];
        $fileSize = $_FILES["user_file"]["size"];
        $tmpName = $_FILES["user_file"]["tmp_name"];
        if ($fileSize > $maxFileSize) {
            $errorArray[] = "Размер файла превышает допустимый!";
        }

        $info = pathinfo($fileName);
        $format = $info['extension'];
        if(!in_array($format, $validFileType)) {
            $errorArray[] = "Недопустимый формат файла!";
        }

        if (empty($errorArray)) {

            if (is_uploaded_file($tmpName)) {

                if (move_uploaded_file($tmpName, $path.$fileName)) {
                    header('Location: list.php');//редирект на список тестов
                    die();
                }
            } else {

                $errorArray[] = 'Ошибка загрузки!';
            }
        } else {
            $result = 'Ошибки:<br>'.implode(';', $errorArray);
        }
    } else {
        $errorArray[] = 'no file';
    }
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Загрузка файла</title>
    <link rel="stylesheet" href="css/styles.css"/>
  </head>
  <body>
      <section class="main-container">
        <h1>Загрузка файлов</h1>
        <div class="form-container">
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data" class="file-input-form">
              <input type="file" name="user_file"><br>
              <input type="submit" value="Загрузить" class="button select-button"><br>
            </form><br>
        </div>
        <div class="result">
            <?php echo $result; ?>
        </div>
    </section>
  </body>
</html>
