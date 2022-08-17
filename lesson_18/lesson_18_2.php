<?php

$time = time();
echo $time . '<br>';
echo 'Текущее время: ' . date('d.m.Y H:i:s') . '<br>';
echo 'Текущее время: ' . date('d.m.Y H:i:s', 0) . '<br>';

$time = mktime(3, 5, 35, 1, 23, 1979);
echo $time . '<br>';
echo date('d.m Y г.', $time) . '<br>';
echo '----------------------------------------<br>';

$d = 29;
$m = 2;
$y = 2023;
if (checkdate($m, $d, $y)) {
  echo 'Дата корректная.<br>';
} else {
  echo 'Дата не корректная<br>';
}
echo '----------------------------------------<br>';

function getGM($local)
{
  $offset = date('Z', $local);
  return $local - $offset;
}

function getLM($gm, $offset)
{
  return $gm + $offset;
}

echo date('d.m.Y H:i:s', getGM(time())) . '<br>';
echo date('d.m.Y H:i:s', getLM(getGM(time()), 3600 * 2)) . '<br>';
echo '----------------------------------------<br>';

$start = microtime(true);
echo $start . '<br>';

$s = 0;
$count = 10000000;
for ($i = 0; $i < $count; $i++) {
  $s += $i;
}
echo "Сумма от 1 до $count равна $s<br>";

$end = microtime(true);

echo 'Время работы: ' . $end - $start . '<br>';