<?php

// Задание 1.
$arr = [18, 21, 3, 15, 478, -5];

// Задание 2.
echo $arr[mt_rand(0, count($arr) - 1)] . '<br>';

// Задание 3.
shuffle($arr);
echo $arr[mt_rand(0, count($arr) - 1)] . '<br>';

// Задание 4.
$workers = [
  [
    'name' => 'Kostiantyn',
    'age' => 43,
  ],
  [
    'name' => 'Vadym',
    'age' => 21,
  ],
  [
    'name' => 'Alex',
    'age' => 50,
  ],
  [
    'name' => 'Ivan',
    'age' => 35,
  ],
];

// Задание 5.
function sortAge($item1, $item2)
{
  return $item1['age'] <=> $item2['age'];
}
uasort($workers, 'sortAge');
print_r($workers);
echo '<br>';

// Задание 6.
$start = microtime(true);
for ($i = 0; $i < 10 ** 7; $i++);
$end = microtime(true);
echo 'Время выполнения скрипта: ' . $end - $start . ' сек.<br>';

// Задание 7.
$time = time() + mt_rand(1, 10) * 1000;

// Задание 8.
echo 'Текущая дата ' . date('d.m.Y H:i:s') . '<br>';
echo 'Дата из 7 задания ' . date('d.m.Y H:i:s', $time) . '<br>';

// Задание 9.
function getDateDiff($seconds)
{
  $hour = floor($seconds / 3600);
  $minutes = floor(($seconds - $hour * 3600) / 60);
  $sec = ($seconds - $hour * 3600) - $minutes * 60;
  return $hour . ':' . $minutes . ':' . $sec;
}

echo 'Разница между датами ' . getDateDiff($time - time()) . '<br>';

// Задание 10
$birthdate = date_create('2023-01-23');
$now = date_create(date('Y-m-d'));

$interval = date_diff($now, $birthdate);

echo 'Осталось до ДР: ' . $interval->format('%r%a дней') . '<br>';