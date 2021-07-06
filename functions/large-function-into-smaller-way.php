<?php
/*
** how to pices a large function into small pices thats a good coding practice
*/
function doTaskA(){ // step 1
    echo "Step 1 done\n";
}
function doTaskB(){ // step 2 
    echo "Step 2 done\n";
}
function doTaskC(){ // step 3
    echo "Step 3 done\n";
}
function doTaskD(){ // step 4
    echo "Step 4 done\n";
}
function doTaskE(){ // step 5
    echo "Step 5 done\n";
}
function doTheLargerTask(){ // 
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
    doTaskE();
}
doTheLargerTask(); //calling the function