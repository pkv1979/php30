<?php

// int
$x = 11;

echo $x;
echo '<br>';
echo PHP_INT_MAX;
echo '<br>';

$y = $x;
$x = 15;

echo 'x = ' . $x . '<br> y = ' . $y;
echo '<br>';

$x = 0b101;
echo $x;
echo '<br>';

$z;
// echo $z; // Ошибка
$z = 21;
echo $z;
echo '<br>';
$z = 17;
echo $z;
echo '<br>';

// float double
$d_1 = 1.7;
$d_2 = 3.5e5;
$d_3 = 3.5e-5;
echo "d_1 = $d_1, d_2 = $d_2, d_3 = $d_3 <br>";

// string
$s = 'lorem ipsum dolor sit am';
$z = 'new string';
echo "s = $s, z = $z <br>";

// boolean
$b_0 = false;
$b_1 = true;
echo "b_0 = $b_0, b_1 = $b_1 <br>";

// null
$obj = null;
echo "obj = $obj <br>";

// Array, Object, Resource, Calllable будут расмотрены позже