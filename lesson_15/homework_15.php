<?php

// Задание 1
echo 'Ваш IP-адрес: ' . $_SERVER['REMOTE_ADDR'] . '<br />Ваш браузер: ' . $_SERVER['HTTP_USER_AGENT'] . '<br>';

// Задание 2
phpinfo();

// Задание 3
// function arr_max($arr)
// {
//   $max = $arr[0];
//   foreach ($arr as $item) {
//     if ($item > $max) {
//       $max = $item;
//     }
//   }

//   return $max;
// }

// function arr_min($arr)
// {
//   $min = $arr[0];
//   foreach ($arr as $item) {
//     if ($item < $min) {
//       $min = $item;
//     }
//   }

//   return $min;
// }

// function arr_sum($arr)
// {
//   $sum = 0;
//   foreach ($arr as $item) {
//     $sum += $item;
//   }

//   return $sum;
// }

// function arr_avg($arr)
// {
//   return arr_sum($arr) / count($arr);
// }

// Задание 5, 6
require_once 'lib/functions_arr.php';

$arr = [1, 5, 12, 3, -5, 182, 32, -18, 25];

echo arr_max($arr) . '<br>';
echo arr_min($arr) . '<br>';
echo arr_sum($arr) . '<br>';
echo arr_avg($arr) . '<br>';