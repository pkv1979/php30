<?php

print_r($_POST);
echo '<br>';
$mailings = $_POST['mailings'] ?? [];
foreach ($mailings as $item) {
  echo $item . '<br>';
}

$user = $_POST['user'] ?? [];

foreach ($user as $item) {
  echo $item . '<br>';
}

$colors = $_POST['colors'] ?? [];
foreach ($colors as $item) {
  echo $item . '<br>';
}

?>

<form action="" name="form_1" method="post">
  <h4>Напишите рассылки, которые Вы хотели бы видеть на нашем сайте:</h4>
  <label>Рассылка 1:</label>
  <input type="text" name="mailings[]">
  <br>
  <label>Рассылка 2:</label>
  <input type="text" name="mailings[]">
  <br>
  <label>Рассылка 3:</label>
  <input type="text" name="mailings[]">
  <br>
  <button type="submit">Отправить</button>
</form>

<form action="" name="form_2" method="post">
  <h4>Укажите Ваши данные:</h4>
  <label>
    Имя:
    <input type="text" name="user[name]">
  </label>
  <br>
  <label>
    Возраст:
    <input type="number" name="user[age]">
  </label>
  <br>
  <button type="submit">Отправить</button>
</form>

<form action="" name="form_3" method="post">
  <label>Выберите Ваши любимые цвета:</label>
  <select name="colors[]" multiple>
    <option value="red">Красный</option>
    <option value="green">Зеленый</option>
    <option value="blue">Синий</option>
  </select>
  <br>
  <button type="submit">Отправить</button>
</form>