<?php

// Задание 1
$x = 23;

// Задание 2
echo isset($x);
echo '<br>';
echo isset($y);
echo '<br>';

// Задание 3
//  is_numeric

// Задание 4
$num = 321;
echo is_numeric($num);
echo '<br>';

// Задание 5
$a = 15;
$b = &$a;

// Задание 6
$b = 17;
echo "a = $a, b = $b<br>";

// Задание 7
$sym = 'a';

// Задание 8
echo $$sym;
echo '<br>';

// Задание 9
define('WIDTH', '150px');
define('HEIGHT', '250px');

// Задание 10

?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Домашнее задание 3</title>

  <!-- Задание 12 -->
  <style>
  div {
    width: <?=WIDTH;
    ?>;
    height: <?=HEIGHT;
    ?>;
  }
  </style>
</head>

<body>

  <!-- Задание 11 -->
  <div>
    <p>
      Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.
    </p>
    <p>
      Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Дороге решила живет даже
      диких моей его по всей, что предупреждал послушавшись рукописи текстами? Обеспечивает, сих!
    </p>
  </div>

</body>

</html>