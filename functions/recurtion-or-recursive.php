<?php 
/*
* recursion function who calls himself
** this function has a lots of benifits/
*/
function printN($i){
    if($i>=10){ //declaring breaking condition first
        return;
    }
    echo $i. "\n";
    $i++;
    printN($i); //calling myself
}
//printN(0);

function printNumber($start1, $end1){
    if($start1>$end1){ //declaring breaking conditon
        return;
    }
    echo $start1 . "\n";
    $start1++;
    printNumber($start1, $end1); //calling myself
    
}
//printNumber(21,20);

//with stepping
function printNumberWithStepping($startStep, $endStep, $stepping){ //stepping default value 1
    if($startStep > $endStep){ //declaring breaking condition
        return;
    }
    echo $startStep . "\n";
    $startStep += $stepping;
    printNumber($startStep, $endStep, $stepping); //calling myself 
}
printNumberWithStepping(21,50,4);
