<?php

$reg = '/a . b/';
$str = 'a . b';
echo preg_match($reg, $str) . '<br>';
$str = 'a a b';
echo preg_match($reg, $str) . '<br>';
$str = "a \n b";
echo preg_match($reg, $str) . '<br>';
echo '---------------------------------------------<br>';

$reg = '/^ab/';
$str = 'abyuiyw7w';
echo preg_match($reg, $str) . '<br>';
$str = 'asd ab ddd';
echo preg_match($reg, $str) . '<br>';
echo '---------------------------------------------<br>';

$reg = '/ab$/';
$str = 'abyuiyw7wab';
echo preg_match($reg, $str) . '<br>';
$str = 'abyuiyw7w';
echo preg_match($reg, $str) . '<br>';
echo '---------------------------------------------<br>';

$reg = '/a [a-z][0-3] b$/';
$str = 'sagjasa w2 b';
echo preg_match($reg, $str) . '<br>';
echo '---------------------------------------------<br>';

$reg = '/a [^a-z] b$/';
$str = 'sagjasa W b';
echo preg_match($reg, $str) . '<br>';
$str = 'sagjasa w b';
echo preg_match($reg, $str) . '<br>';
echo '---------------------------------------------<br>';

$reg = '/a ([a-z]b\d) (b)$/';
$str = '123a ab5 b';
echo preg_match($reg, $str, $matches) . '<br>';
print_r($matches);
echo '<br>---------------------------------------------<br>';

$reg = '/a ([a-z]a)* b/';
$str = 'a  b';
echo preg_match($reg, $str) . '<br>';
$str = 'a aa b';
echo preg_match($reg, $str) . '<br>';
echo '---------------------------------------------<br>';

$reg = '/a q+ b/';
$str = 'a qq b';
echo preg_match($reg, $str) . '<br>';
$str = 'a  b';
echo preg_match($reg, $str) . '<br>';
echo '---------------------------------------------<br>';

$reg = '/a [a-z]? b/';
$str = 'a m b';
echo preg_match($reg, $str) . '<br>';
$str = 'a md b';
echo preg_match($reg, $str) . '<br>';
echo '---------------------------------------------<br>';

$reg = '/a \d{2} b/';
$str = 'a 45 b';
echo preg_match($reg, $str) . '<br>';

$reg = '/a \d{3,} b/';
$str = 'a 4532 b';
echo preg_match($reg, $str) . '<br>';

$reg = '/a \d{3,5} b/';
$str = 'a 45323 b';
echo preg_match($reg, $str) . '<br>';
$str = 'a 45 b';
echo preg_match($reg, $str) . '<br>';
$str = 'a 4533223 b';
echo preg_match($reg, $str) . '<br>';
echo '---------------------------------------------<br>';

$reg = '/a \d b/i';
$str = 'A 4 b';
echo preg_match($reg, $str) . '<br>';
echo '---------------------------------------------<br>';

$reg = '/a\s\d b/ix';
$str = 'A 4b';
echo preg_match($reg, $str) . '<br>';
$str = 'A 4 b';
echo preg_match($reg, $str) . '<br>';
echo '---------------------------------------------<br>';

$reg = '/ab$/m';
$str = "ab\nddd";
echo preg_match($reg, $str) . '<br>';
echo '---------------------------------------------<br>';

$reg = '/\//';
$str = '/';
echo preg_match($reg, $str) . '<br>';
echo '---------------------------------------------<br>';

$reg = '/a\.b/';
$str = 'a.b';
echo preg_match($reg, $str) . '<br>';
echo '---------------------------------------------<br>';

$reg = '/\\\/';
$str = '\\';
echo preg_match($reg, $str) . '<br>';
echo '---------------------------------------------<br>';

$reg = '/"(.+?)"/';
$str = 'Текст "нужно" еще что-то "и это тоже нужно"';
echo preg_match_all($reg, $str, $matches) . '<br>';
print_r($matches);
echo '<br>';
foreach ($matches[1] as $item) {
  echo $item . '<br>';
}