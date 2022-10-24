<?php
$str = 'Lentils can be jumbled with niffy ginger, also try rinseing the kebab with gravy.';
$strArray = explode(" ",$str);
array_shift($strArray);
echo (implode(" ",$strArray));

