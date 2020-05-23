<?php
class Constructor{
    var $name;
    var $age;
     
    function __construct($name, $age){
        echo "I'm constructing the constuctor $name and $age \n";
        $this->name = $name;
        $this->age = $age;
    }
    function showName(){
        echo "I am from method name \n";
        echo $this->name ."\n";
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
$obj = new Constructor('1st object' , '10');

$obj->showEverything();



