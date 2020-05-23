<?php

class Second{
    var $name = "Shantonu suman";
    var $age = "30" ;

    function showAge(){
        echo "I am from method age";

    }

    function showName(){
        echo "I am from method name \n";
        echo $this->name;
    }
}
$suman = new Second;
echo $suman->name = "Shantonu suman \n";
echo $suman->age . "\n";
echo $suman->showName();


