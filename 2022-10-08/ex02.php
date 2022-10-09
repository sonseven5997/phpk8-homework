<?php
const WHITE = '<div style="width: 100px; height: 100px; background-color:white"> </div>';
const BLACK = '<div style="width: 100px; height: 100px; background-color:black"> </div>';

$content = '';

for ($i = 1; $i <= 8; $i++) {
  $row = '';
  for ($j = 1; $j <= 8; $j++) {
    if (($i + $j) % 2 === 0) {
      $row .= WHITE;
    } else {
      $row .= BLACK;
    }
    $row = '<div style="display:inline-flex; flex-direction:row">'.$row.'</div>';
    // if ($j === 8) {
    //   $row .= '<div style="flex:1"></div>';
    // }
  }
  $content .= $row;
}

$content = '<div style="border: 1px solid; width: min-content">'.$content.'</div>';

echo $content;
