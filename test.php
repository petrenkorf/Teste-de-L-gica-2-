<?php

function alternateCase($string) : string
{
    $lastCheckedLetter = ord($string[0]) <=97; // É maiúsculo na tabela ASCII

    for ($i = 1; $i < strlen($string); $i++) {
        $lastCheckedLetter = !$lastCheckedLetter;

        $string[$i] = ($lastCheckedLetter)
            ? strtoupper($string[$i])
            : strtolower($string[$i]);
    }

    return $string;
}

$str1 = "Coblue";
$str2 = "coblue";

echo alternateCase($str2);
