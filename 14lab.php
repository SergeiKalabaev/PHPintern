<?php

namespace HexletBasics\DefineFunctions\ReturnInstruction;

use function HexletBasics\Functions\getParentFor;

// BEGIN (write your solution here)
function getParentNamesTotalLength($name)
{

    $fatherNameLength = strlen(getParentFor($name,'father'));
    $motherNameLength = strlen(getParentFor($name,'mother'));
    $totalLength =$fatherNameLength+$motherNameLength;
    return($totalLength);

}
// END