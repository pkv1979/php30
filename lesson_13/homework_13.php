<?php

// Задание 1
$mult = function ($x, $y) {
  return $x * $y;
};

// Задание 2
echo $mult(5, 7) . '<br>';

// Задание 3
function task_3($arr, $func)
{
  if (count($arr) % 2 !== 0) {
    echo '<strong style="color: red;">Количество элементов в массиве должно быть четным!!</strong><br>';
    return;
  }

  foreach ($arr as $value) {
    if (!is_numeric($value)) {
      echo '<strong style="color: red;">Элементы в массиве должны быть числами!!</strong><br>';
      return;
    }
  }

  // Задание 4
  for ($i = 0; $i < count($arr); $i += 2) {
    echo $func($arr[$i], $arr[$i + 1]) . '<br>';
  }
}

// Задание 5
task_3([1, 2, 3, 4], $mult);

// Задание 6
$num_1 = 12;
$num_2 = 21;

// Задание 7
$task_7 = function () use ($num_1, $num_2) {
  return $num_1 + $num_2;
};

// Задание 8
echo $task_7() . '<br>';

// Задание 9
function task_9($arr, $func)
{
  if (count($arr) % 2 !== 0) {
    echo '<strong style="color: red;">Количество элементов в массиве должно быть четным!!</strong><br>';
    return;
  }

  // Задание 10
  $arr_result = [];
  foreach ($arr as $value) {
    $arr_result[] = $func($value);
  }
  return $arr_result;
}

// Задание 11
$arr = task_9([2, 15, 21, 4, 57, 18], fn ($item) => $item * 2);

// Задание 12
foreach ($arr as $value) {
  echo $value . ' ';
}