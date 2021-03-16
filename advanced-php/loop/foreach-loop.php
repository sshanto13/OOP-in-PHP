<?php
// $array = ['suman', 40, 'shantonu', 50, 70];

$employee_profile = array(
   'First Name ' => 'Shantonu',
   'Last Name ' => 'Suman',
   'Age' => 30,
   'Profession ' => 'Software Engineering'
);
foreach($employee_profile as $value){
          echo $value . ' <br>' ;
}