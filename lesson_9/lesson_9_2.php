<?php

$arr = array(3, 4, 3, 2, -7);
$arr = [3, 4, 3, 2, -7, true, 'Me String'];

echo $arr[2] . '<br>';

$arr[3] = 15;
echo $arr[3] . '<br>';

echo count($arr) . '<br>';

for ($i = 0; $i < count($arr); $i++) {
  echo $arr[$i] . ', ';
}
echo '<br>---------------------------------<br>';

$arr_2 = [
  'name' => 'Kostiantyn',
  'age' => 43,
];
echo $arr_2['name'] . '<br>';
echo $arr_2['age'] . '<br>';
echo '---------------------------------<br>';

$arr_3 = [
  [1, 2],
  [3, 4, 5],
];
echo $arr_3[0][1] . '<br>';
echo $arr_3[1][1] . '<br>';
echo $arr_3[1][0] . '<br>';
echo '---------------------------------<br>';

for ($i = 0; $i < count($arr_3); $i++) {
  for ($j = 0; $j < count($arr_3[$i]); $j++) {
    echo $arr_3[$i][$j] . ', ';
  }
  echo '<br>';
}
echo '---------------------------------<br>';

$staff = [
  [
    'name' => 'Kostiantyn',
    'age' => 43,
  ],
  [
    'name' => 'Igor',
    'age' => 35,
  ],
  [
    'name' => 'Alex',
    'age' => 58,
  ],
];

echo $staff[1]['age'] . '<br>';