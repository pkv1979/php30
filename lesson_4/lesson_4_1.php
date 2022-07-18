<?php

$x = 5;
$y = 3;
$z = $x + $y;

echo "x = $x, y = $y<br>";
echo "Сумма x и y равна $z<br>";

echo 'Разность x и y равна ';
echo $x - $y;
echo '<br>';

echo 'Произведение x и y равно ' . $x * $y . '<br>';
echo 'Результат деления x на y равен ' . $x / $y . '<br>';
echo 'Остаток от деления x на y равен ' . $x % $y . '<br>';
echo 'x в степени y ' . $x ** $y . '<br>';
echo 'Квадратный корень из x равен ' . $x ** (1 / 2) . '<br>';

$x = $x + 1;
echo "x = $x<br>";

$y = $y - 1;
echo "y = $y <br>";

$x++; // $x = $x + 1;
echo "x = $x<br>";

$y--; // $y = $y - 1;
echo "y = $y <br>";

$y += 10; // $y = $y + 10;
echo "y = $y <br>";

$y *= 3; // $y = $y * 3;
echo "y = $y <br>";

$y = 5;
$a = $x + $x * $y;
echo "a = $a <br>";
$a = ($x + $x) * $y;
echo "a = $a <br>";