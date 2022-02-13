<?php

namespace HexletBasics\DeepIntoStrings\StartWith;

function startsWith($text, $substr)
{
    // BEGIN (write your solution here)
    if(mb_strpos($text,$substr)===0){
        return true;
    }
    return false;
    // END
}
