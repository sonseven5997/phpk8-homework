<?php
$tableContent = '';

$table = '';

for ($i = 1; $i <= 9; $i++) {
  $tr = '';
  $trContent = '';
  for ($j = 1; $j <= 9; $j++) {
    $td = '<td style="border: 1px solid black">' . "$i * $j = " . ($i * $j) . '</td>';
    $trContent .= $td;
  }
  $tr = '<tr>'.$trContent.'</tr>';
  $tableContent .= $tr;
}

$table .= "<table>$tableContent</table>";

echo $table;
