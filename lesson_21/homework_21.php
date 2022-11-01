<?php

// Задание 1.
$date = date('H:i:s d.m.Y');

// Задание 2.
$reg = '/(\d{1,2}):(\d{1,2}):(\d{1,2}) (\d{1,2}).(\d{1,2}).(\d{1,4})/';
preg_match($reg, $date, $matches);

// Задание 3
print_r($matches);