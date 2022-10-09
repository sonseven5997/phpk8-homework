<?php
$n = 5;
$star = '*';

for ($i = 1; $i <= 2 * $n; $i++) {
  if ($i <= $n) {
    echo $star.'<br/>';
    $star .= '*';
  } else {
    $star = substr($star, 0, -1);
    echo $star.'<br/>';
  }
}
