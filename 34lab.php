<?php

function printNumbers($lastNumber)
{
    $i = 1;
    while ($i <= $lastNumber) {
        print_r($lastNumber );
        print_r("\n");
        $lastNumber = $lastNumber-1;

    }
    print_r('finished!');
}