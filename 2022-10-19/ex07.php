<?php
$password = '1qQ!ccc';

function array_some(array $arr, callable $func): bool
{
    foreach ($arr as $value) {
        if ($func($value)) {
            return true;
        }
    }
    return false;
}

function checkStrongPassword(string $str): bool
{
    $numbers = '1234567890';
    $alphabets = 'qwertyuiopasdfghjklzxcvbnm';
    $uppercaseAlphabets = mb_strtoupper($alphabets, 'UTF-8');
    $specialCharacters = '!@#$%^&*()-+';
    $arr = str_split($str);

    if (count($arr) < 6) {
        return false;
    }
    $hasNumber = array_some($arr, function ($value) use ($numbers) {
        return in_array($value, str_split($numbers));
    });
    $hasAlphabet = array_some($arr, function ($value) use ($alphabets) {
        return in_array($value, str_split($alphabets));
    });
    $hasUpperAlphabet = array_some($arr, function ($value) use ($uppercaseAlphabets) {
        return in_array($value, str_split($uppercaseAlphabets));
    });
    $hasSpecialCharacter = array_some($arr, function ($value) use ($specialCharacters) {
        return in_array($value, str_split($specialCharacters));
    });
    return $hasNumber && $hasAlphabet && $hasUpperAlphabet && $hasSpecialCharacter;
}

echo checkStrongPassword($password) ? 'Strong' : 'Weak';
