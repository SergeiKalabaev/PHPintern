<?php

namespace HexletBasics\Logic\CombineExpressions;

// BEGIN (write your solution here)
function hasTargaryenReference($str)
{
    $isTargaryen = substr($str,0,9);
    return ($isTargaryen === "Targaryen");
}
// END
