<?php

$x = 5;

if ($x < 15) {
  echo 'x меньше 15<br>';
} else {
  echo 'x больше 15<br>';
}

if ($x < 5) {
  echo 'x меньше 5<br>';
} elseif ($x === 5) {
  echo 'x равно 5<br>';
} else {
  echo 'x больше 5<br>';
}

$a = 4;
$b = 1;
if ($a > $b or $b === 3) {
  echo 'Истина<br>';
} else {
  echo 'Ложь<br>';
}

// $op = 'mult';

// if (isset($_GET['op'])) {
//   $op = $_GET['op'];
// } else {
//   $op = false;
// }

// $op = isset($_GET['op']) ? $_GET['op'] : false;

$op = $_GET['op'] ?? false;

if ($op === 'add') {
  $summa = $a + $b;
  echo "$a + $b = $summa<br>";
} elseif ($op === 'mult') {
  $mult = $a * $b;
  echo "$a * $b = $mult<br>";
} elseif ($op) {
  echo 'Неизвестная операция<br>';
} else {
  echo 'Операция не задана<br>';
}

$z = 5;

?>

<?php if (!$op) { ?>
<div>
  <a href="?op=add">Сложить</a>
  <a href="?op=mult">Перемножить</a>
</div>
<?php } else { ?>
<p>Спасибо!</p>
<?php } ?>

<?php if ($z > 0) : ?>
<p>z</p>
<p>больше 0</p>
<?php elseif ($z < 0) : ?>
<p>z</p>
<p>меньше 0</p>
<?php else : ?>
<p>z</p>
<p>равен 0</p>
<?php endif; ?>
<p>Конец условий</p>