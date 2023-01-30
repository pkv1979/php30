<?php

print_r($_FILES);
$success_one = false;
$success_multi = false;

if (isset($_FILES['upload_file']) && $_FILES['upload_file']['error'] == UPLOAD_ERR_OK) {
  $dist = 'files/' . $_FILES['upload_file']['name'];
  $success_one = move_uploaded_file($_FILES['upload_file']['tmp_name'], $dist);
}

if (isset($_FILES['upload_files'])) {
  foreach ($_FILES['upload_files']['error'] as $key => $error) {
    // echo $key . ': ' . $error;
    if ($error == UPLOAD_ERR_OK) {
      $dist = 'files/' . $_FILES['upload_files']['name'][$key];
      $success_multi = move_uploaded_file($_FILES['upload_files']['tmp_name'][$key], $dist);
      if (!$success_multi) {
        break;
      }
    }
  }
}

?>

<form name="upload" action="lesson_24_1.php" method="post" enctype="multipart/form-data">
  <h4>Загрузка одного файла</h4>
  <?php if ($success_one) { ?>
  <p style="color: green;">Файл успешно загружен</p>
  <?php } ?>
  <p>
    <input type="file" name="upload_file">
  </p>
  <p>
    <button type="submit">Загрузить файл</button>
  </p>
</form>

<form name="upload_multi" action="lesson_24_1.php" method="post" enctype="multipart/form-data">
  <h4>Загрузка нескольких файлов</h4>
  <?php if ($success_multi) { ?>
  <p style="color: green;">Файлы успешно загружены</p>
  <?php } ?>
  <p>
    <input type="file" name="upload_files[]">
  </p>
  <p>
    <input type="file" name="upload_files[]">
  </p>
  <p>
    <input type="file" name="upload_files[]">
  </p>
  <p>
    <button type="submit">Загрузить файлы</button>
  </p>
</form>