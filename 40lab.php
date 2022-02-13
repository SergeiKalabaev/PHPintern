<?php

namespace HexletBasics\Loops\EdgeCases;

// BEGIN (write your solution here)
function isArgumentsForSubstrCorrect($str,$index,$length){
    if(($length<0)||($index<0)||($index>strlen($str)-1)||(($index+$length)>strlen($str)))
    {
        return false;
    }
    return true;
}
// END
