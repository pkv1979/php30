<?php

$arr = [3, 4, 3, 2, -7, true, 'My string'];
foreach ($arr as $value) {
  echo $value . '<br>';
}
echo '------------------------------<br>';

$arr_1 = [
  [
    'name' => 'Kostiantyn',
    'age' => 43,
  ],
  [
    'name' => 'Andrii',
    'age' => 35,
  ],
  [
    'name' => 'Alex',
    'age' => 31,
  ],
];
foreach ($arr_1 as $key => $value) {
  echo $key . ' - ';
  echo '<br>';
  foreach ($value as $k => $v) {
    echo $k . ' => ' . $v . '<br>';
  }
}
echo '------------------------------<br>';

$arr = [];
for ($i = 0; $i < 10; $i++) {
  $arr[] = $i * 5;
}
foreach ($arr as $item) {
  echo $item . ', ';
}
echo '<br>';
echo '------------------------------<br>';

foreach ($arr as $key => $value) {
  $arr[$key] = $value * 2;
}
foreach ($arr as $value) {
  echo $value . ', ';
}
echo '<br>';
echo '------------------------------<br>';

foreach ($arr as &$value) {
  $value *= 2;
}
foreach ($arr as $value) {
  echo $value . ', ';
}
echo '<br>';
echo '------------------------------<br>';

$arr = ['Ivan', 'Ivanov', 35];
$first_name = $arr[0];
$surname = $arr[1];
$age = $arr[2];
echo "$first_name, $surname, $age<br>";

list($first_name, $surname, $age) = $arr;
echo "$first_name, $surname, $age<br>";

list(, $surname, $age) = $arr;
echo "$surname, $age<br>";
echo '------------------------------<br>';

$arr_1 = [
  '1' => 'Kostiantyn',
  '2' => 'Igor',
];
$arr_2 = [
  '3' => 'Alex',
  '4' => 'Homer',
];
$arr = $arr_1 + $arr_2;
foreach ($arr as $key => $value) {
  echo "$key => $value<br>";
}
echo '------------------------------<br>';

$arr_1 = [
  '1' => 'Kostiantyn',
  '2' => 'Igor',
];
$arr_2 = [
  '1' => 'Alex',
  '2' => 'Homer',
  '3' => 'John',
];
$arr = $arr_1 + $arr_2;
foreach ($arr as $key => $value) {
  echo "$key => $value<br>";
}
echo '------------------------------<br>';

$arr_1 = [1, 2, 3];
$arr_2 = [4, 5, 6, 7];
$arr = $arr_1 + $arr_2;
foreach ($arr as $value) {
  echo $value . ', ';
}
echo '<br>';
echo '------------------------------<br>';

foreach ($arr_2 as $value) {
  $arr_1[] = $value;
}
foreach ($arr_1 as $value) {
  echo $value . ', ';
}
echo '</br>';
echo '------------------------------<br>';

echo "Вывод элемента массива: $arr_1[1]<br>";
$arr = [
  'name' => 'Oleg',
  'age' => 40,
];
echo "Вывод элемента массива: $arr[name]";