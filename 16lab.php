<?php

namespace HexletBasics\DefineFunctions\DefaultArguments;

use function HexletBasics\Functions\getParentFor;

// BEGIN (write your solution here)
function getCustomParentFor($childName , $parent = 'father')
{
    return(getParentFor($childName,$parent));
}
// END
