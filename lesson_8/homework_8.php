<?php

// Задание 1
$summa = 0;
$i = 1;
while ($i <= 10) {
  if ($i % 2 === 0) {
    $summa += $i;
  }
  $i++;
}
echo "Сумма четных чисел от 1 до 10 равна $summa<br>";

$fact = 1;
$i = 1;
while ($i <= 10) {
  $fact *= $i;
  $i++;
}
echo "Факториал числа 10 равен $fact<br>";

// Задание 2
$summa = 0;
$start = 10;
$end = 40;

while ($start <= $end) {
  if ($start % 2 !== 0) {
    $summa += $start;
  }
  $start++;
}
echo "Сумма нечетных чисел от 10 до $end равна $summa<br>";

// Задание 3
$num = $_GET['num'] ?? -1;

// Задание 4
switch ($num) {
  case 0:
    echo 'нуль';
    break;
  case 1:
    echo 'один';
    break;
  case 2:
    echo 'два';
    break;
  case 3:
    echo 'три';
    break;
  case 4:
    echo 'четыре';
    break;
  case 5:
    echo 'пять';
    break;
    // Задание 5 
  default:
    echo 'Нет представления этого числа в виде строки';
    break;
}