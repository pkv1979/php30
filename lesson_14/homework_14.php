<?php

// Задание 1
$avg = function ($arr) {
  $result = 0;
  foreach($arr as $item) {
    $result += $item;
  } 
  return $result / count($arr);
};

// Задание 2
function getAvg($arr, $callback){
  foreach ($arr as $item) {
    yield $callback($item);
  }
}

// Задание 3
$arr = [
  [1, 4, 5, 6, 15],
  [4, 18, 2, 65, 11, 57],
];

// Задание 4
$generator = getAvg($arr, $avg);
foreach($generator as $item) {
  echo "avg = $item<br>";
}

// Задание 5
$triple_arr = [
  [
    [
      'name' => 'Kostiantyn',
      'age' => 43,
    ],
    [
      'name' => 'Valentyn',
      'age' => 20,
    ],
  ],
  [
    [
      'name' => 'Alex',
      'age' => 23,
    ],
    [
      'name' => 'Tom',
      'age' => 15,
    ],
  ],
];

// Задание 6
print_r($triple_arr);
echo '<br>';

// Задание 7.
function pre_print($data) {
  echo '<pre>';
  print_r($data);
  echo '</pre>';
}

// Задание 8
pre_print($triple_arr);