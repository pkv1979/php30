<?php

// Задание 4
function arr_max($arr)
{
  $max = $arr[0];
  foreach ($arr as $item) {
    if ($item > $max) {
      $max = $item;
    }
  }

  return $max;
}

function arr_min($arr)
{
  $min = $arr[0];
  foreach ($arr as $item) {
    if ($item < $min) {
      $min = $item;
    }
  }

  return $min;
}

function arr_sum($arr)
{
  $sum = 0;
  foreach ($arr as $item) {
    $sum += $item;
  }

  return $sum;
}

function arr_avg($arr)
{
  return arr_sum($arr) / count($arr);
}