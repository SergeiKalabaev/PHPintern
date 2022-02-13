<?php

namespace HexletBasics\Logic\TernaryOperator;

// BEGIN (write your solution here)
function convertText($str){
    return $str[0] === strtoupper($str)[0] ? $str : strrev($str);
}
// END
