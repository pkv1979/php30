<?php

$a = [4, 3, 2, 1,  4, 5, 9, 0, 1, 4];

print_r($a);
echo '<br>' . is_array($a) . '</br>';

$a = array_unique($a);
print_r($a);
echo '<br>-----------------<br>';

shuffle($a);
print_r($a);
echo '<br>';
print_r(array_reverse($a));
echo '<br>';
print_r(array_flip($a));
echo '<br>-----------------<br>';

$a = [
  'name' => 'Kostiantyn',
  'age' => 43,
];

print_r(array_values($a));
echo '<br>';
print_r(array_keys($a));
echo '<br>-----------------<br>';

$list_1 = [1, 2, 3];
$list_2 = [4, 5, 6, 7];
$all = $list_1 + $list_2;

print_r($all);
echo '<br>';

$all = array_merge($list_1, $list_2);
print_r($all);
echo '<br>-----------------<br>';

$list = range(1, 100);
print_r($list);
echo '<br>-----------------<br>';


for ($i = 0; $i < 10; $i++) {
  echo 'Hello';
}
echo '<br>';
foreach (range(1, 10) as $value) {
  echo 'Hello';
}
echo '<br>-----------------<br>';

$list = array_slice($list, 5, 50);
print_r($list);
echo '<br>';

shuffle($list);
print_r($list);
echo '<br>-----------------<br>';

sort($list);
print_r($list);
echo '<br>';

rsort($list);
print_r($list);
echo '<br>-----------------<br>';

$arr = [
  '1' => 5,
  '2' => 0,
  '4' => 10,
  'name' => 12,
];

asort($arr);
print_r($arr);
echo '<br>';

arsort($arr);
print_r($arr);
echo '<br>';

ksort($arr);
print_r($arr);
echo '<br>';

krsort($arr);
print_r($arr);
echo '<br>';

$list = [-30, 40, -25, 20, 12, 15, -50, 40, 0];
sort($list);
print_r($list);
echo '<br>';

function mySort($a, $b)
{
  return abs($a) <=> abs($b);
}

uasort($list, 'mySort');
print_r($list);
echo '<br>-----------------<br>';

$clients = [
  [
    'first_name' => 'Kostiantyn',
    'surname' => 'Panov',
  ],
  [
    'first_name' => 'Alex',
    'surname' => 'Ivanov',
  ],
  [
    'first_name' => 'Ivan',
    'surname' => 'Chmonya',
  ],
  [
    'first_name' => 'Petr',
    'surname' => 'Petrov',
  ],
];
print_r($clients);
echo '<br>';

function mySortForClients($client_1, $client_2)
{
  return $client_1['surname'] <=> $client_2['surname'];
}

usort($clients, 'mySortForClients');
print_r($clients);
