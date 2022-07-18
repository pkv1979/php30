<?php

$x = 3.4;

if (gettype($x) === 'string') {
  echo 'x - это строка';
} elseif (gettype($x) === 'integer') {
  echo 'x - это число';
} elseif (gettype($x) === 'boolean') {
  echo 'x - это booleaan';
} else {
  echo 'x - это неизвестный тип';
}
echo '<br>';

switch (gettype($x)) {
  case 'string':
    echo 'x - это строка';
    break;
  case 'integer':
    echo 'x - это число';
    break;
  case 'boolean':
    echo 'x - это boolean';
    break;
  default:
    echo 'x - это неизвестный тип';
}
echo '<br>';

switch (gettype($x)):
  case 'string':
    echo 'x - это строка';
    break;
  case 'integer':
    echo 'x - это число';
    break;
  case 'boolean':
    echo 'x - это boolean';
    break;
  default:
    echo 'x - это неизвестный тип';
endswitch;
echo '<br>';

$a = 7;
$b = 6;
switch ($a <=> $b) {
  case -1:
    echo "$a < $b";
    break;
  case 0:
    echo "$a = $b";
    break;
  case 1:
    echo "$a > $b";
    break;
}