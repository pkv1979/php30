<?php

print_r($_POST);
// print_r($_REQUEST);

$name = $_POST['name'] ?? '';
$mood = $_POST['mood'] ?? 50;
$text = $_POST['text'] ?? '';
$source = $_POST['source'] ?? '';
$news = isset($_POST['news']) ? true : false;

?>

<form action="" name="myform" method="post">
  <label>
    Имя:
    <input type="text" name="name" value="<?= $name; ?>">
    <?php if (!$name) { ?>
    <span style="color: red; font-weight: bold;">Введите имя</span>
    <?php } ?>
  </label>
  <br>
  <label>
    Ваше настроение:
    <input type="range" name="mood" min="0" max="100" step="10" value="<?= $mood; ?>">
  </label>
  <br>
  <label>
    Ваш комментарий:
    <br>
    <textarea name="text"><?= $text; ?></textarea>
  </label>
  <br>
  <label>
    Как вы нас нашли?
    <br>
    <input type="radio" name="source" value="search_system" <?php if ($source == 'search_system') { ?> checked
      <?php } ?>> Поисковая система
    <input type="radio" name="source" value="friends" <?php if ($source == 'friends') { ?> checked <?php } ?>> Друзья
    <br>
    <label>
      Подписаться на наши новости:
      <input type="checkbox" name="news" <?php if ($news) { ?> checked <?php } ?>>
    </label>
    <br>
    <button type="submit">Отправить</button>
  </label>
</form>