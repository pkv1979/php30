<?php

$s_1 = 'First string';
$s_2 = 'Second string';
echo $s_1 . ' -  ' . $s_2;
$s = $s_1 . $s_2;
echo '<br>' . $s;
echo "<br>Символ с индексом 2 (позиция №3) в строке \"$s_1\": <b>" . $s_1[2] . "</b>";

echo '<br>Тут переменная $s_1 не подставится';
// echo "<br>Тут будет ошибка $s_1N";
echo "<br>Тут не будет ошибки {$s_1}N";
echo '<br>Выводим слеш /';
echo '<br>Выводим обратный слеш \\';
echo '<br> Выводим кавычку \'';

$res = `help`;
echo '<br>';
// echo $res;
echo iconv('CP866', 'UTF-8', $res);