<?php

namespace HexletBasics\Loops\ForLoop;

// BEGIN (write your solution here)
function sumOfSeries($fn,$sn){
    $sum=0;
    for($i = $fn;$i<=$sn;$i++)
    {

        $sum=$sum+$i;
    }
    return $sum;
}
// END