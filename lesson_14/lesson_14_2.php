<?php

$arr = [1, 3, 5, 7];

print_r($arr);
echo '<br>';

$arr = [
  [
    'key_1' => 1,
    'key_2' => 2,
  ],
  [
    'key_1' => 3,
    'key_2' => 4,
  ],
  [
    'key_1' => 5,
    'key_2' => 6,
  ],
];

echo '<pre>';
print_r($arr);
echo '</pre><br>';

$r = print_r($arr, true);
echo $r . '<br>';

var_dump($arr, 5, true);
echo '<br>';

var_export($arr);