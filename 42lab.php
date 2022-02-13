<?php

namespace HexletBasics\Loops\Mutators;

// BEGIN
function filterString($str, $char)
{
    $i = 0;
    $length = strlen($str);
    $result = '';
    while ($i < $length) {
        $currentChar = $str[$i];
        if ($currentChar !== $char) {
            $result = "{$result}{$currentChar}";
        }
        $i++;
    }

    return $result;
}
// END