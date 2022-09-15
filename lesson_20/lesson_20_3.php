<?php

$reg = '/a M/';
$str = '1a M 22';

echo preg_match($reg, $str, $matches) . '<br>';
print_r($matches);

$str = 'a M';
echo '<br>' . preg_match($reg, $str) . '<br>';

$reg = '#a \d b#';
$str = '213a 4 bdsdfasa 3 b;kpoi09';
echo preg_match($reg, $str, $matches) . '<br>';
print_r($matches);

$reg = '#a \D b#';
$str = '213a 4 bdsdfasa s b;kpoi09';
echo '<br>' . preg_match($reg, $str, $matches) . '<br>';
print_r($matches);

$reg = '#a \w b#';
$str = '213a 4 bdsdfasa s b;kpoi09';
echo '<br>' . preg_match($reg, $str, $matches) . '<br>';
print_r($matches);

$reg = '#a \W b#';
$str = '213a + bdsdfasa s b;kpoi09';
echo '<br>' . preg_match($reg, $str, $matches) . '<br>';
print_r($matches);

$reg = '#a \s b#';
$str = '213a   bdsdfasa s b;kpoi09';
echo '<br>' . preg_match($reg, $str, $matches) . '<br>';
print_r($matches);

$reg = '#a \S b#';
$str = '213a e bdsdfasa s b;kpoi09';
echo '<br>' . preg_match($reg, $str, $matches) . '<br>';
print_r($matches);

$reg = '#a \n b#';
$str = "213a 4 bdsdfasa \n b;kpoi09";
echo '<br>' . preg_match($reg, $str, $matches) . '<br>';
print_r($matches);