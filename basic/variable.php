<?php
//variable
$country= "bangladesh" ;
$age= 24;
$myName= "Tanim";

echo 'hi i am' ." ".$myName.".". 'my age is'." ".$age;
echo"\n";

//variable value changeable 
$task='read';
echo $task;
echo"\n";
$task='write';
echo $task;
echo"\n";


//constant
define('PI',3.1416);
echo 'value '.PI;
echo"\n";

$constant='constant';
echo "value of pi ={$constant('PI')}";






?>