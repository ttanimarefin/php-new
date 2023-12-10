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
echo"\n";

//output print way

/* int, double/float, boolean, string, array, object, resource */

$name="bangla";
$name1="tasin";
$name2=2;
$name3=null;
$result=true;


var_dump($name,$name1,$name2,$name3,$result);
echo"\n";

echo 'we\'re talk '.$name;









?>