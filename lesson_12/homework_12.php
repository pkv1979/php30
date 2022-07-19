<?php

// Задание 1
$a = 21;

// Задание 2
function multVar()
{
  global $a;

  $a *= 10;

  echo $a . '<br>';
}

// Задание 3
multVar();

// Задание 4
function powNum(int $num, int $degree)
{
  if ($degree === 0) {
    return 1;
  }

  return $num * powNum($num, $degree - 1);
}

// Задание 5
echo powNum(2, 2) . '<br>';
echo powNum(2, 3) . '<br>';
echo powNum(2, 4) . '<br>';
echo powNum(5, 5) . '<br>';