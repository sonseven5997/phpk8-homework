<?php
$n = 5;

$sum = 0;

$product = 1;

for ($i = 1; $i <= $n; $i++) {
  $product *= $i;
  $sum += $product;
}

echo $sum;
