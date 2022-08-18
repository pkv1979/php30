<?php

// Задание 1.
for ($i = 0; $i < 3; $i++) {
  $file = fopen('lib/file' . $i . '.txt', 'a');
  for ($j = 0; $j < mt_rand(1, 5); $j++) {
    fwrite($file, mt_rand(0, 100) . "\n");
  }
  fclose($file);
}

// Задание 2
for ($i = 0; $i < 3; $i++) {
  $sum = 0;
  $file = fopen('lib/file' . $i . '.txt', 'r');

  while (!feof($file)) {
    $sum += fgets($file);
  }
  echo $sum . '<br>';

  fclose($file);
}


// Задание 3.
unlink('lib/file0.txt');
unlink('lib/file1.txt');
unlink('lib/file2.txt');