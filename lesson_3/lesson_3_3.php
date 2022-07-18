<?php

define('COLOR', '#a0a');

echo COLOR;
echo '<br>';
echo defined('COLOR');
echo '<br>';

// Встроенные константы
echo __FILE__;
echo '<br>';
echo PHP_VERSION;
echo '<br>';
echo DIRECTORY_SEPARATOR;
echo '<br>';

define('FONT_SIZE', '24px');

?>

<p style="color: <?= COLOR; ?>; font-size: <?= FONT_SIZE; ?>">
  Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Большого сих меня на берегу
  большой подзаголовок однажды продолжил все взобравшись путь единственное маленькая несколько, свое своих, предупреждал
  его раз пояс.
</p>