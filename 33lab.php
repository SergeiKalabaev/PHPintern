<?php

namespace HexletBasics\Conditionals\Elvis;

// BEGIN (write your solution here)
function generateAmount($tovar,$audit){
    $price = $tovar ?: $audit * 3;
    return($price);
}
// END