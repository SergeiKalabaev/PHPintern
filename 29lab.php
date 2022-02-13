<?php

namespace HexletBasics\Conditionals\IfElse;

// BEGIN (write your solution here)
function normalizeUrl($str){
    $newstr;
    if( (strpos($str,'http://')) === 0)
    {

        $newstr = str_replace('http://','https://',$str);

    }
    else{
        $newstr = 'https://' . $str;
    }
    return($newstr);
}
// END
