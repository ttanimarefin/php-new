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

//uppercase
$uname=strtoupper($name);
echo "we are talk with {$uname}";
echo"\n";


//using prinf

printf("we are talk with %s", $name);
echo"\n";

$fname="tasin";
$mname="ahammed";
$kname=
printf("his %s name is %s %s", "full",$fname,$mname);
echo"\n";

//multiple line print

echo "my 
name
is
{$fname}";
echo"\n";

$planet1="mercury";
$planet2="jupiter";

echo "The smallest planet is ".$planet1."and the biggest is ".$planet2. "\n";
echo "The smallest planet is {$planet1} and the biggest is {$planet2} ";
echo"\n";

//sum and subtraction

$num=10+1;
$num1=$num+1;
$num1 += 1;
echo $num1;
//multiplication
echo"\n";
$num3=(5+1) * 5 -3;
echo $num3;
echo"\n";













?>