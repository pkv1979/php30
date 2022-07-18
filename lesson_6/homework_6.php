<?php

// Задание 1.
$age = 43;

// Задание 2.
if ($age < 40) {
  echo 'Вам меньше 40 лет<br>';
} elseif ($age === 40) {
  echo 'Вам 40 лет<br>';
} else {
  echo 'Вам больше 40 лет<br>';
}

// Задание 4, 6
$a = $_GET['a'] ?? false;
$b = $_GET['b'] ?? false;

if ($a && $b) {
  if (is_numeric($a) && is_numeric($b)) {
    echo 'Сумма a и b равна ' . $a + $b . '<br>';
  } else {
    echo 'Ожидались числа, а получены строки!<br>';
  }
}

?>

<!-- Задание 3 -->
<div>
  <a href="?a=17&b=23">Сумма a и b</a>
</div>

<!-- Задание 5 -->
<div>
  <a href="?a=str&b=str2">Сумма a и b</a>
</div>