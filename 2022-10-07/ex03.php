<?php
const MIN_VALID_YEAR  = 1900;
$yob = 1997;
$isValidDob = is_int($yob) && $yob >= MIN_VALID_YEAR && $yob <= date('Y');
echo $isValidDob ? date('Y') - $yob : "Not a valid year";