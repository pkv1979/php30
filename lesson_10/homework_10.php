<?php

// Задание 1
$staff = [
  [
    'name' => 'Kostiantyn',
    'age' => 43,
  ],
  [
    'name' => 'Oleg',
    'age' => 55,
  ],
  [
    'name' => 'Igor',
    'age' => 21,
  ]
];

// Задание 2
$avr_age = 0;

foreach ($staff as $item) {
  $avr_age += $item['age'];
}
$avr_age /= count($staff);
echo "Средний возраст сотрудников: $avr_age<br>";

// Задание 3
$arr_1 = [1, 2, 3, 4];
$arr_2 = [1, 2, 3, 4, 5, 6, 7, 8];

// Задание 4
foreach ($arr_2 as $item) {
  $arr_1[] = $item;
}

// Завдание 5
foreach ($arr_1 as $item) {
  if ($item % 2 > 0) {
    echo $item . ', ';
  }
}