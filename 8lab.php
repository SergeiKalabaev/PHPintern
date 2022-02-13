<?php

use function HexletBasics\Functions\getParentFor;

// BEGIN (write your solution here)
$mother = getParentFor('Joffrey Baratheon');
$grandpa = getParentFor($mother,'father');
print_r($grandpa);
// END
