<?php

$arr = parse_ini_file('lesson_19.ini', true);

echo gettype($arr['Test']['v']) . '<br>';

print_r($arr);
echo '<br>';
echo $arr['Config']['site'] . '<br>';

$arr = parse_ini_file('lesson_19.ini');

print_r($arr);
echo '<br>';

$arr = parse_ini_file('lesson_19.ini', true, INI_SCANNER_TYPED);
print_r($arr);
echo '<br>';
echo gettype($arr['Test']['v']) . '<br>';
echo gettype($arr['Config']['v']) . '<br>';
echo gettype($arr['Test']['b']) . '<br>';
echo gettype($arr['Test']['bool']) . '<br>';
