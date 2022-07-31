<?php

echo M_PI . '<br>';
echo M_E . '<br>';
echo '--------------------------<br>';

echo rad2deg(1) . '<br>';
echo deg2rad(30) . '<br>';
echo '--------------------------<br>';

$x = 0.7;
echo sin($x) . '<br>';
echo sin(deg2rad(30)) . '<br>';
echo cos($x) . '<br>';
echo tan($x) . '<br>';
echo (1 / tan($x)) . '<br>';
echo '--------------------------<br>';

echo asin($x) . '<br>';
echo acos($x) . '<br>';
echo atan($x) . '<br>';
echo (M_PI / 2 - atan($x)) . '<br>';
echo '--------------------------<br>';

$x = -5;
echo abs($x) . '<br>';
echo '--------------------------<br>';

$x = 72.23554682;
echo round($x) . '<br>';
echo round($x, 2) . '<br>';
echo round($x, -1) . '<br>';
echo round($x, -2) . '<br>';
echo round($x, -3) . '<br>';

echo floor(5.9) . '<br>';
echo ceil(5.1) . '<br>';
echo '--------------------------<br>';

echo mt_rand(0, 100) . '<br>';

$arr = [];
for ($i = 0; $i < 10; $i++) {
  $arr[] = mt_rand(0, 100);
}
print_r($arr);
echo '<br>';
echo '--------------------------<br>';

echo min(1, 23, 65, 33, 0, -22. - 4, 12, -123, 156) . '<br>';
echo max(1, 23, 65, 33, 0, -22. - 4, 12, -123, 156) . '<br>';
echo min($arr) . '<br>';
echo max($arr) . '<br>';
echo '--------------------------<br>';

echo base_convert('111', 2, 10) . '<br>';
echo base_convert('111', 10, 2) . '<br>';
echo base_convert('255', 10, 16) . '<br>';
