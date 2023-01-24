<?php

// Проверка на корректность e-mail
$reg = '/^[a-z0-9_]+(\.[a-z0-9_-]+)*@([a-z0-9]+\.)+[a-z]{2,5}$/i';

$email_1 = 'test@test.com';
$email_2 = 'test2@test.com';
$email_3 = 'test3@test.com';

$email_4 = 'mail';
$email_5 = 'alex@mail';
$email_6 = 'alex@mail.';
$email_7 = '123 alex@mail.com 456';

echo 'email_1 - ' . preg_match($reg, $email_1) . '<br>';
echo 'email_2 - ' . preg_match($reg, $email_2) . '<br>';
echo 'email_3 - ' . preg_match($reg, $email_3) . '<br>';
echo 'email_4 - ' . preg_match($reg, $email_4) . '<br>';
echo 'email_5 - ' . preg_match($reg, $email_5) . '<br>';
echo 'email_6 - ' . preg_match($reg, $email_6) . '<br>';
echo 'email_7 - ' . preg_match($reg, $email_7) . '<br>';

$reg = '/[a-z0-9_]+(\.[a-z0-9_-]+)*@([a-z0-9]+\.)+[a-z]{2,5}/i';
$str = 'Я спамер и оказываю услуги по спаму, пишите мне на abc@abc.abc.ru. Повторяю, пишите сюда: abc@abc.abc.ru';

echo $str . '<br>';
echo preg_replace($reg, 'SPAM', $str) . '<br>';

$date = '25.05.2025';
$reg = '#(\d{2})\.(\d{2})\.(\d{4})#';
// preg_match($reg, $date, $matches);
// print_r($matches);
echo preg_replace($reg, '$2.$1 $3 г.', $date) . '<br>';