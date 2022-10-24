<?php
$fullName = "Nguyen Thanh Quynh Chi";
$fullNameArr = explode(" ",$fullName);
$lastName = array_pop($fullNameArr);
$others = implode(" ",$fullNameArr);
echo 'Last name = '.$lastName.'<br/>';
echo 'First name = '.$others;
