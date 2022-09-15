<?php

if (!file_exists('New Directory')) {
  mkdir('New Directory');
  rmdir('New Directory'); // Удаляет только пустую директорию
}

$arr = glob('*.php');
print_r($arr);
echo '<br>';
$arr = glob('../lesson_19/*.*');
print_r($arr);
echo '<br>-------------------------------<br>';

$count_lines = 0;

function printDir($folder, $space = '')
{
  global $count_lines;

  $files = scandir($folder);

  foreach ($files as $file) {
    if ($file === '.' || $file === '..' || $file === '.git') {
      continue;
    }
    $f = $folder . DIRECTORY_SEPARATOR . $file;
    echo $space . $file . '<br>';
    if (is_dir($f)) {
      printDir($f, $space . '&nbsp&nbsp&nbsp&nbsp');
    } else {
      $count_lines += getCountLines($f);
    }
  }
}

function getCountLines($file)
{
  $str = file_get_contents($file);
  $arr = explode("\n", $str);

  return count($arr);
}

echo 'Дерево директории:<br>';
printDir('..');
echo "Общее количество строк кода: $count_lines<br>";