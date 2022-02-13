<?php

namespace HexletBasics\Conditionals\ElseIfStatement;

// BEGIN (write your solution here)
function whoIsThisHouseToStarks($str){
    if($str === 'Karstark' || $str === 'Tully'){
        return('friend');
    }
    if($str === 'Lannister' || $str === 'Frey'){
        return('enemy');
    }
    else {
        return('neutral');
    }
}
// END
