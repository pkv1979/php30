<?php

function generator1()
{
  echo 1;
  yield 'a';

  echo 2;
  yield 'b';

  echo 3;
  yield 'c';
}

foreach (generator1() as $value) {
  echo " - $value<br>";
}

function generator2($from, $to)
{
  for ($i = $from; $i < $to; $i++) {
    echo "$i -  ";
    yield $i;
  }
}

foreach (generator2(1, 10) as $value) {
  echo 'Возведем в квадрат ' . ($value ** 2) . '<br>';
}

function getGenerator($arr, $callback)
{
  foreach ($arr as $value) {
    yield $callback($value);
  }
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$generator = getGenerator($arr, function ($item) {
  return $item * 2;
});

echo gettype($generator) . '<br>'; // $generator - это НЕ массив!!!

foreach ($generator as $value) {
  echo "$value ";
}
echo '<br>';

$generator = getGenerator($arr, fn ($item) => 2 ** $item);

foreach ($generator as $value) {
  echo "$value ";
}
echo '<br>';

function generator3($arr, $callback)
{
  foreach ($arr as $key => $value) {
    yield $key => $callback($value);
  }
}

$arr = ['Alex' => 35, 'Ihor' => 20];

$generator = generator3($arr, fn ($age) => ($age < 23) ? 'student' : 'worker');
foreach ($generator as $key => $value) {
  echo "$key - $value<br>";
}

// Генераторы - отличная возможность сэкономить память
$count = 10000000;
$arr = [];

for ($i = 0; $i < $count; $i++) {
  $arr[] = $i;
}

$sum = 0;
foreach($arr as $item) {
  $sum += $item;
} 

echo "Сумма элементов массива: $sum<br>";
echo memory_get_usage() . '<br>';

unset($arr);
echo memory_get_usage() . '<br>';

function generator4($count) {
  for ($i = 0; $i < $count; $i++) {
    yield $i;
  }
}

$sum = 0;
foreach(generator4($count) as $value) {
  $sum += $value;
}
echo "Сумма элементов массива: $sum<br>";
echo memory_get_usage() . '<br>';