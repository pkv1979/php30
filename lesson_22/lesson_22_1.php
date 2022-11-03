<?php

print_r($_GET);

// $a = $_GET['a']; // Может быть ошибка
if (isset($_GET['a'])) {
  $a = $_GET['a'];
} else {
  $a = false;
}

$b = isset($_GET['b']) ? $_GET['b'] : false;
$op = $_GET['op'] ?? false;

if (is_numeric($a) && is_numeric($b) && $op !== false) {
  switch ($op) {
    case 'add':
      $result = $a + $b;
      break;
    case 'mult':
      $result = $a * $b;
      break;
    default:
      $result = 'Неизвестная операция';
      break;
  }
}

?>
<p>Примеры операций:</p>
<ul>
  <li>
    <a href="?a=3&amp;b=7&amp;op=add">Сложение</a>
  </li>
  <li>
    <a href="?a=3&amp;b=0&amp;op=mult">Умножение</a>
  </li>
  <li>
    <a href="?a=3&amp;b=7&amp;op=123">Непонятно</a>
  </li>
</ul>

<?php if (isset($result)) { ?>
  <p>Результат: <?= $result; ?></p>
<?php } ?>