<?php
/*
* php 7 new feature
* accept unlimited arugment/paramete
*/

function sum(int ...$numbers):int{ // taking unlimited parameter by "..." sign
    $result = 0;
    for($i=0; $i<count($numbers); $i++){
        $result +=$numbers[$i];
    }
    return $result;
}
echo sum(5,6,7,8,9);
