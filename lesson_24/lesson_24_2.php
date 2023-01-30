<?php

define('MAX_SIZE', 1024 * 1000);

$file = $_FILES['img'] ?? false;
$error = '';

if ($file && $file['error'] == UPLOAD_ERR_OK) {
  print_r($file);
  $blacklist = ['.php', '.phtml', '.php3', 'php4', 'html', '.htm'];

  foreach ($blacklist as $ext) {
    if (str_ends_with($file['name'], $ext)) {
      $error = 'Расширение файла не подходит!';
    }
  }

  if (!$error) {
    $type = getimagesize($file['tmp_name']);
    // print_r($type);
    $allowed_types = ['image/jpeg', 'image/jpg', 'image/png'];
    if ($type && in_array($type['mime'], $allowed_types)) {
      if ($file['size'] <= MAX_SIZE) {
        $dist = 'images/' . $file['name'];
        if (move_uploaded_file($file['tmp_name'], $dist)) {
          $link = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/lesson_24/' . $dist;
        } else {
          $error = 'Ошибка при загрузке файла!';
        }
      } else {
        $error = 'Размер файла превышен!';
      }
    } else {
      $error = 'Тип файла не подходит!';
    }
  }
}

?>

<form name="upload" action="" method="post" enctype="multipart/form-data">
  <?php if ($error) { ?>
  <p style="color: tomato;"><?= $error; ?></p>
  <?php } else if (isset($link)) { ?>
  <a href="<?= $link; ?>">Изображение успешно загружено: <?= $link; ?></a>
  <?php } ?>
  <p>
    <input type="file" name="img">
  </p>
  <p>
    <button type="submit">Отправить</button>
  </p>
</form>