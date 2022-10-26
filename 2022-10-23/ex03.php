<?php
$str = 'After peeling the bagels, decorate peanuts, oysters and fish sauce with it in a bowl.';
$tableRows = '';
function countWord()
{
    global $str, $tableRows;
    $count = [];
    foreach (str_split($str) as $item) {
        if (!isset($count[$item])) {
            $count[$item] = 1;
        } else {
            $count[$item]++;
        }
    }
//    var_dump($count);
    foreach ($count as $key => $value) {
        $tableRows .= '<tr><td>' . $key . '</td><td>' . $value . '</td><tr/>';
//        var_dump($key);
    }
}
countWord();
echo '<table><tr><th>Key</th><th>Count</th></tr>' . $tableRows . '</table>';
