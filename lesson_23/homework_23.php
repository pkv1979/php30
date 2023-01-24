<?php
// Задание 3
$items = $_POST['items'] ?? [];

if (count($items)) {
  $numbers = [];
  foreach ($items as $item) {
    if (is_numeric($item)) {
      $numbers[] = +$item;
    }
  }
  if (count($numbers)) {
    $min = min($numbers);
    $max = max($numbers);
  }
}

if (isset($min) && isset($max)) {
  echo "<p>min = $min, max = $max</p>";
}

?>

<!-- Задание 1,2  -->
<form name="form_1" action="" method="post">
  <input name="items[]" type="text"><br><br>
  <input name="items[]" type="text"><br><br>
  <input name="items[]" type="text"><br><br>
  <input name="items[]" type="text"><br><br>
  <input name="items[]" type="text"><br><br>
  <button type="submit">Отправить</button>
</form>

<br>
<hr>
<br>



<!-- Задание 4 -->
<?php

// Задание 5
define('FILE_HOME', 'homework_23.txt');
if (isset($_POST['save'])) {
  $text = $_POST['text'] ?? '';
  $text = htmlspecialchars($text);

  if ($text) {
    file_put_contents(FILE_HOME, file_get_contents(FILE_HOME) . $text . "\r\n");
    echo '<p style="color: green;">Сохранение прошло успешно</p>';
  }
}

// Задание 6
if (isset($_POST['load'])) {
  if (file_exists(FILE_HOME)) {
    $text_out = file_get_contents(FILE_HOME);
  } else {
    echo '<p style="color:red;">Файл не существует</p>';
  }
}

// Задание 7
if (isset($_POST['delete'])) {
  if (file_exists(FILE_HOME)) {
    unlink(FILE_HOME);
  } else {
    echo '<p style="color:red;">Файл не существует</p>';
  }
}

?>
<form name="form_2" action="" method="post">
  <textarea name="text">
    <?php
    if (isset($text_out)) {
      print_r($text_out);
    }
    ?>
  </textarea>
  <br><br>
  <button type="submit" name="save">Сохранить</button>
  <button type="submit" name="load">Загрузить</button>
  <button type="submit" name="delete">Удалить</button>
</form>