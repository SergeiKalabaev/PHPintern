<?php

namespace HexletBasics\Loops\IterationOverString;

// BEGIN (write your solution here)
function printReversedNameBySymbol($name){
    $revName = strrev($name);
    $i=0;
    while ($i <strlen($revName)){
        print_r("$revName[$i]\n");
        $i++;
    }
}
// END
