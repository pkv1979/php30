<?php

// Задание 1.
$num = $_GET['num'] ?? -1;

$result = match ($num) {
  '0' => 'нуль',
  '1' => 'один',
  '2' => 'два',
  '3' => 'три',
  '4' => 'четыре',
  '5' => 'пять',
  default => 'Нет представления этого числа в виде строки'
};

echo $result . '<br>';

// Задание 2
$arr = [1, 23, 21, 15, 54, 3, 78, 44, 123, 256];

// Задание 3
$summ = 0;
for ($i = 0; $i < count($arr); $i++) {
  $summ += $arr[$i];
}
echo "Сумма элементов массива - $summ<br>";

// Задание 4
$mult = 1;
$count = 0;
while ($count < count($arr)) {
  if ($count % 2 > 0) {
    $mult *= $arr[$count];
  }
  $count++;
}
echo "Произведение элементов, стоящих на четных местах - $mult<br>";