<?php
$n = 100;

$primeNumbers = [];

for ($i = 2; $i <= $n; $i++) {
  $isPrime = true;
  for ($j = 2; $j <= (int)($i / 2); $j++) {
    if ($i % $j == 0) {
      $isPrime = false;
      break;
    }
  }
  if ($isPrime) {
    array_push($primeNumbers, $i);
  }
}

echo implode(", ",$primeNumbers);