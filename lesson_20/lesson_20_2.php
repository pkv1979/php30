<?php

$str = `dir`;
echo iconv('CP866', 'UTF-8', $str) . '<br><br>';

// system('dir');

$last_line = exec('dir');
echo iconv('CP866', 'UTF-8', $last_line) . '<br><br>';

exec('dir', $output);

foreach ($output as $line) {
  echo iconv('CP866', 'UTF-8', $line) . '<br>';
}
// print_r($output);

exec('calc.exe');