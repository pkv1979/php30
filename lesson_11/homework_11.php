<?php

// Задание 1.
function add($numbers)
{
  if (!is_array($numbers) or count($numbers) === 0) {
    return false;
  }

  $result = 0;
  foreach ($numbers as $item) {
    if (!is_numeric($item)) {
      return false;
    }

    $result += $item;
  }

  return $result;
}

// Задание 2.
$arr_1 = [1, 3, 12, 156];
$arr_2 = [1, '3', 122, 156];
$arr_3 = [1, 3, 'asd', 12, 156, 122];

// Задание 3
$adding = add($arr_1);
if ($adding) {
  echo "Сумма элементов массива равна $adding";
} else {
  echo 'Некорректный массив';
}
echo '<br>';

$adding = add($arr_2);
if ($adding) {
  echo "Сумма элементов массива равна $adding";
} else {
  echo 'Некорректный массив';
}
echo '<br>';

$adding = add($arr_3);
if ($adding) {
  echo "Сумма элементов массива равна $adding";
} else {
  echo 'Некорректный массив';
}
echo '<br>';

// Задание 4.
function fact($n)
{
  // Задание 5.
  if (!is_int($n)) {
    echo 'Необходимо передать целое число';
    return;
  }

  $result = 1;
  for ($i = 1; $i <= $n; $i++) {
    $result *= $i;
  }

  return $result;
}

// Задание 6.
echo fact(3) . '<br>';
echo fact(3.4) . '<br>';
echo fact('13') . '<br>';
echo fact('aasa') . '<br>';