<?php

$s_1 = 'Hello World!';
$s_2 = 'Привет, мир!';

echo "s_1 = $s_1<br>  s_2 = $s_2<br>";
echo $s_1[1] . '<br>';
echo $s_2[1] . '<br>';

echo strlen($s_1) . '<br>';
echo strlen($s_2) . '<br>';

echo mb_strlen($s_1) . '<br>';
echo mb_strlen($s_2) . '<br>';
echo '----------------------------------------------------------------<br>';

echo strpos($s_1, 'or') . '<br>';
echo strpos($s_1, 'not found') . '<br>';

if (strpos($s_1, 'Hello') !== false) {
  echo 'Подстрока найдена.<br>';
} else {
  echo 'Подстрока не найдена.<br>';
}
echo '----------------------------------------------------------------<br>';

echo str_contains($s_1, 'Hello') . '<br>';

if (str_contains($s_1, 'Hello')) {
  echo 'Подстрока найдена.<br>';
} else {
  echo 'Подстрока не найдена.<br>';
}

echo str_starts_with($s_1, 'Hello') . '<br>';
echo str_starts_with($s_1, 'World') . '<br>';

echo str_ends_with($s_1, '!') . '<br>';
echo '----------------------------------------------------------------<br>';

echo substr($s_1, 3, 2) . '<br>';
echo substr($s_1, 3) . '<br>';
echo substr($s_1, -3) . '<br>';
echo substr($s_1, 0, -2) . '<br>';
echo substr($s_2, 3, -2) . '<br>';
echo mb_substr($s_2, 3, -2) . '<br>';
echo '----------------------------------------------------------------<br>';

echo str_replace('и', 'е', $s_2) . '<br>';
echo str_replace('и', 'е', $s_2, $count) . '<br>';
echo $count . '<br>';

$text = 'Здравстуйте, %name%. У Вас новое сообщение на сайте %site%.<br>';
echo str_replace(['%name%', '%site%'], ['Kostiantyn', 'fm.com.ua'], $text) . '<br>';
echo '----------------------------------------------------------------<br>';

echo strtoupper($s_1) . '<br>';
echo strtoupper($s_2) . '<br>';
echo mb_strtoupper($s_2) . '<br>';

echo strtolower($s_1) . '<br>';
echo strtolower($s_2) . '<br>';
echo mb_strtolower($s_2) . '<br>';
echo '----------------------------------------------------------------<br>';

$email = '        mail@mymail.com       ';
echo '<pre>' . $email . '</pre><br>';
echo
'<pre>' . trim($email) . '</pre><br>';
echo '----------------------------------------------------------------<br>';

echo '<a href="lesson_17_1.php?a=1 2 3 (4, 5, 6)">Ссылка</a><br>';
echo '<a href="lesson_17_1.php?a=' . urlencode('1 2 3 (4, 5, 6)') . '">Ссылка</a><br>';
echo urldecode('1+2+3+%284%2C+5%2C+6%29') . '<br>';
echo '----------------------------------------------------------------<br>';

$s_3 = '<a href="http://php30.local">Ссылка</a><img>"\' &';
echo $s_3 . '<br>';
echo htmlspecialchars($s_3) . '<br>';
echo strip_tags($s_3) . '<br>';
echo strip_tags($s_3, '<img><a>') . '<br>';
echo '----------------------------------------------------------------<br>';

echo md5($s_3) . '<br>';
echo md5($s_3) . '<br>';
echo md5($s_2) . '<br>';
echo md5($s_1) . '<br>';
echo '----------------------------------------------------------------<br>';

echo uniqid() . '<br>';
echo '----------------------------------------------------------------<br>';

$text = 'Это очень большой текст, который неплохо было бы разбить на несколько строк.';
echo $text . '<br>';
echo wordwrap($text, 30, '<br>');
echo '<br>';
echo wordwrap($text, 30);
echo '<br>';

echo nl2br(wordwrap($text, 30)) . '<br>';
echo '----------------------------------------------------------------<br>';

$m_1 = '53';
$m_2 = '75.49';

echo sprintf('%.2f и еще %b', $m_1, $m_2) . '<br>';