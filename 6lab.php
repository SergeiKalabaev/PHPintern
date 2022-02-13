<?php

use function HexletBasics\Functions\calculateDistance;
$routeLength;
// BEGIN (write your solution here)
$routeLength = calculateDistance("Winterfell", "The Twins") + calculateDistance("The Twins", "The Eyrie");
print_r($routeLength);
// END
