<?php

function serve($foodType = "meat", $numberOfItems = "1 Piece"){
    echo "{$numberOfItems} of {$foodType} has/have been served";
}

$ft = "Meat";
$ni = "4 Pices";

serve($ft); // defualt 1 Piece
echo "\n";
serve($ft, $ni); // when parameter has a fixed value
echo "\n";
serve(); // all default value or optional parameter