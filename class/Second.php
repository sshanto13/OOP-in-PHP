<?php

class Second{
    var $name = "Shantonu suman";
    var $age = "30" ;
     
    
    function showName(){
        echo "I am from method name \n";
        echo $this->name."\n";
    }
    
    function showAge(){
        echo "I am from method age \n";
        echo $this->age ."\n";

    }


    function showEverything(){
        echo "here showEverythingMethod is calling \n";
        $this->showName() . "\n";
        $this->showAge() . "\n";
    }
}
$suman = new Second;
echo $suman->name = "Shantonu suman \n";
echo $suman->age . "\n";
echo $suman->showName();


$third = new Second;

echo $third->showEverything();


