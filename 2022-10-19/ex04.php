<?php
$str = 'When cooking roasted bagels, be sure they are room temperature.';
$strArr = explode(" ", $str);
$first = $strArr[0];
$last = $strArr[count($strArr) - 1];

echo 'Before' . '<br/>' . $first . '<br/>' . $last . '<br/>';
echo '<hr/>';

[$first, $last] = [$last, $first];
echo 'After' . '<br/>' . $first . '<br/>' . $last . '<br/>';
