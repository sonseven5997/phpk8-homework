<?php
$a = 5;
$b = 10;

echo "Before<br/>";
echo 'a = ' . $a . '<br/>';
echo 'b = ' . $b . '<br/>';

echo '<hr/>';

[$a, $b] = [$b, $a];

echo "After<br/>";
echo 'a = ' . $a . '<br/>';
echo 'b = ' . $b . '<br/>';
