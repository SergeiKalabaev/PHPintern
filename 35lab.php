<?php

namespace HexletBasics\Loops\AgregationNumber;

// BEGIN (write your solution here)
function multiplyNumberFromRange($firstNumber,$secondNumber){
    $thirdNumber = $secondNumber;
    while($firstNumber < $secondNumber)
    {
        $thirdNumber = $firstNumber*$thirdNumber;
        $firstNumber= $firstNumber+1;
    }
    return($thirdNumber);
}
// END
