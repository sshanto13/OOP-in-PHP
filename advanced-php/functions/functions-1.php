<?php
function multiply($variable){
          for( $start = 1; $start <= 10; $start ++){
              echo $variable .  ' x '  . $start . '=' . $variable*$start . '<br/>';
          }
}
function sum($number1,$number2){
    return $number1 + $number2;
}

$user_input = 'multiply';

if ( $user_input == 'multiply'){
    echo multiply(5);
} elseif($user_input == 'sum'){
     echo sum(10,30);
     echo "working";
}
