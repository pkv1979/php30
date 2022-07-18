<?php

$x = -5;

switch (gettype($x)) {
  case 'string':
    $result = 'x - это строка';
    break;
  case 'integer':
    $result = 'x - это целое число';
    break;
  case 'boolean':
    $result = 'x - это boolean';
    break;
  default:
    $result = 'x - это неизвестный тип';
    break;
}
echo "$result<br>";

$x = false;
$result = match (gettype($x)) {
  'string' => 'x - это строка',
  'integer' => 'x - это целое число',
  'boolean' => 'x - это boolean',
  default => 'x - это неизвестный тип',
};
echo "$result<br>";

switch ('1') {
  case 1:
    echo '1<br>';
    break;
  default:
    echo '0<br>';
    break;
}

echo match ('1') {
  1 => '1<br>',
  default => '0<br>',
};