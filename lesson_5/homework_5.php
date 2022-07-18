<?php

// Задание 1
$var_1 = 15;
$var_2 = 21;

// Задание 2
echo 'var_2 > var_2: ' . ($var_1 > $var_2) . '<br>';
echo 'var_2 < var_2: ' . ($var_1 < $var_2) . '<br>';
echo 'var_2 >= var_2: ' . ($var_1 >= $var_2) . '<br>';
echo 'var_2 <= var_2: ' . ($var_1 <= $var_2) . '<br>';
echo 'var_2 == var_2: ' . ($var_1 == $var_2) . '<br>';
echo 'var_2 === var_2: ' . ($var_1 === $var_2) . '<br>';
echo 'var_2 <=> var_2: ' . ($var_1 <=> $var_2) . '<br>';

// Задание 3
$res = ((!($var_1 > $var_2) || ($var_1 === $var_1)) xor (($var_1 !== $var_2) && ($var_1 <= $var_2)));

// Задание 4

// Задание 5
echo 'Результат: ' . $res;