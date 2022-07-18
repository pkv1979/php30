<?php

// Жесткие ссылки
$a = 4;
$b = &$a;
$a = 6;
echo $b;
echo '<br>';
$b = 15;
echo $a;
echo '<br>';
unset($a);
echo $b;
echo '<br>';

// Символические ссылки
$a = 2;
$b = 'a';
echo $$b;
echo '<br>';
$$b = 123;
echo $a;
echo '<br>';

// Ссылки на объекты будут рассмотрены позже