<?php

$handler = fopen('lesson_19_a.txt', 'r+');
$count = 1;
$str = '';

while (!feof($handler)) {
  $str .= fread($handler, $count);
}

echo '<pre>' . $str . '</pre>';
echo fread($handler, 15200000) . '<br>';

fseek($handler, 0);
echo '<pre>' . fread($handler, filesize('lesson_19_a.txt')) . '</pre>';

fseek($handler, 0);
// fwrite($handler, "Lorem ipsum....");

fclose($handler);

echo '<pre>' . file_get_contents('lesson_19_a.txt') . '</pre>';

//echo file_get_contents('https://google.com');

file_put_contents('lesson_19_a.txt', file_get_contents('lesson_19_a.txt') . "/nNeeew text into file!!!");

copy('lesson_19_a.txt', 'lesson_19_b.txt');
rename('lesson_19_b.txt', 'lesson_19_c.txt');
unlink('lesson_19_c.txt');

$handler = tmpfile();
fwrite($handler, 'Test temp file');
fseek($handler, 0);
echo '<pre>' . fread($handler, 10) . '</pre>';
fclose($handler);

$handler = fopen('lib/lesson_19.txt', 'a+');
fwrite($handler, 'Test file text');
fclose($handler);