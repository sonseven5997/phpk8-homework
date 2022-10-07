<?php
$number = 10;

if (!is_int($number)) {
  echo "Wrong input";
  return;
}

echo $number % 2 === 0 ? "Even" : "Odd";
