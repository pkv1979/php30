<?php

$x = 5;
$y = 0;
$b_1 = $x > 5;
$b_2 = $y == 0;
echo "x > 5 = $b_1, y == 0 = $b_2<br>";
echo ($x < $y) . '<br>';
echo ($x > $y) . '<br>';
echo ($x <= $y) . '<br>';
echo ($x >= $y) . '<br>';
echo ($x == $y) . '<br>';
echo ($x != $y) . '<br>';
echo ($x == 3) . '<br>';
echo ($x >= 5) . '<br>';
echo ($x <= 5) . '<br>';
echo ($x < 5) . '<br>';

$n1 = 7 <=> 5;
$n2 = 5 <=> 7;
$n3 = 5 <=> 5;
echo "n1 = $n1, n2 = $n2, n3 = $n3<br>";

$x = 3;
$y = '3';
echo 'Результат проверки на равенство x и y ' . ($x == $y) . '<br>';
echo 'Результат проверки на эквивалентность x и y ' . ($x === $y) . '<br>';
echo 'Результат проверки на НЕ эквивалентность x и y ' . ($x !== $y) . '<br>';
echo (($x == 5) === '') . '<br>';
echo (($x == 5) === false) . '<br>';
echo ('' == false) . '<br>';
echo ('' === false) . '<br>';
echo ('' == 0) . '<br>';
echo (false == 0) . '<br>';