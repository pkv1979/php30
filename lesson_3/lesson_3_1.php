<?php

$A = 3;
$b = 6;

echo isset($a);
echo '<br>';
echo isset($b);
echo '<br>';


$x = 12;
echo gettype($x);
echo '<br>';

$x = (float)$x;
echo gettype($x);
echo '<br>';

$str = 'lorem';
echo 'Переменная str - это string? :';
echo is_string($str);
echo is_string($x);
echo '<br>';

echo ((int) $str);
echo '<br>';

$str_num = '111';
echo ((int) $str_num);
echo '<br>';
echo gettype($str_num);
echo '<br>';
echo is_numeric($str_num);
echo '<br>';

echo isset($x);
echo '<br>';
unset($x);
echo 'Переменная существует? : ';
echo isset($x);
echo '<br>';
echo gettype($x);
echo '<br>';