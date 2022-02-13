<?php

namespace HexletBasics\Loops\ReverseString;

// BEGIN (write your solution here)
function mysubstr($str,$length){
    $i=0;
    $newStr='';
    while($i<$length){
        $newStr[$i] = $str[$i];
        $i++;
    }
    return($newStr);

}
// END
