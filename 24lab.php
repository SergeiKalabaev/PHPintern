<?php

namespace HexletBasics\Logic\LogicalNegation;

use function HexletBasics\Functions\isLannisterSoldier;

// BEGIN (write your solution here)
function isNotLannisterSoldier($color,$shield)
{
    return(!isLannisterSoldier($color,$shield));
}
// END
