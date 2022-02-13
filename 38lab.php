<?php

function countChars($str, $char)
{
    $i = 0;
    $count = 0;
    $str=mb_strtolower($str);
    $char=mb_strtolower($char);
    while ($i < strlen($str)) {
        if ($str[$i] === $char) {
            $count = $count + 1;
        }
        $i = $i + 1;
    }

    return $count;
}