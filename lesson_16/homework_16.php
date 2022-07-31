<?php

// Задание 1.
$prices = [10.55, 120.20, 10.55, 5.43, 250];

// Задание 2, 3.
$discount = [];
foreach ($prices as $price) {
  $discount[] = round($price - ($price * 25 / 100), 2);
}

// Задание 4
echo '<pre>';
print_r($discount);
echo '</pre>';

// Задание 5.
$rand_num = [];
for ($i = 0; $i < 10; $i++) {
  $rand_num[] = rand(0, 100);
}

// Задание 6.
foreach ($rand_num as $item) {
  echo base_convert($item, 10, 2) . '<br>';
}