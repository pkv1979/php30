<?php

for ($i = 0; $i < 3; $i++) {
  echo 'Hello ';
}
echo '<br>';

for ($i = 10; $i >= 0; $i -= 2) {
  echo "$i, ";
}
echo '<br>';

for (; $i < 10;) {
  echo $i;
  if ($i < 9) {
    echo ', ';
  }
  $i++;
}
echo '<br>';

for ($i = 0, $j = 1; $i * $j < 1000; $i++, $j *= 2) {
  echo "$i, $j<br>";
}

for ($i = 0; $i < 10; $i++) {
  if ($i === 3) {
    continue;
  }
  echo "$i<br>";
  if ($i === 7) {
    break;
  }
}
echo '---------------------------------------------------------<br>';

$summa = 0;
$n = 10;
for ($i = 1; $i <= $n; $i++) {
  $summa += $i;
  echo "$summa<br>";
}

echo "Сумма чисел от 1 до $n равна $summa";

?>

<?php for ($i = 0; $i < 10; $i++) { ?>
<p>Hello <?= $i + 1; ?>!</p>
<?php } ?>