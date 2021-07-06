<?php
/*
** Funtion type hinting
** Funtion type checking 
*/
function sum( int $x, int $y, int $z):int{ // int is the return type of function, its also called type hinting
    return $x + $y +  $z;
}
echo sum(5,6,7);