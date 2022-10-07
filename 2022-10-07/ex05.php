<?php
const KILOMETERS = 10;

if (KILOMETERS <= 0) {
  echo "Invalid input";
  return;
}

$invoice = 0;

if (KILOMETERS < 1) {
  $invoice = 15_000;
} elseif (KILOMETERS >= 1 && KILOMETERS <= 5) {
  $invoice = KILOMETERS * 12_000;
} else {
  $invoice = KILOMETERS * 9_000;
}

if (KILOMETERS >= 140) {
  $invoice -= 12 * $invoice / 100;
}

echo $invoice;
