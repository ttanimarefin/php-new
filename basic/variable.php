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


//condition logic and logical oparator

$n4=10;
if($n4%2==0){
    echo "$n4 is even";
}else{
    echo "odd";
}
echo"\n";

/*
== eual
!= not eual
> grater
< smaller
*/



$n5=20;
$n6=12;
if ($n5!=$n6){
    echo "n5 is eual o n6";
}else{
    echo "nothing";
}
echo"\n";
if($n5 >= $n6){
    echo "$n5 has same amount or more amount of $n6";
}
elseif($n5 == $n6){
    echo "$n5 has same amount of $n6";
}elseif($n5>$n6){
    echo "$n5 has more amount of $n6";
}elseif($n5<$n6){
    echo "$n5 has lass than amount of $n6";
}else{
    echo "no money";
}
echo"\n";

$age= 20;
if($age>=13 && $age <= 19){
    echo "this person is teenager";
}else{
    echo "no teenager";
}
echo"\n";

//leap year

$year = 1996;

if($year % 4==0 && $year % 100 == 0 && $year % 400 == 0){
    echo "$year is leap year";
}else if($year % 4==0 && $year % 100 == 0){
    echo "$year is not leap year";
}else if($year % 4==0){
    echo "$year is leap year"; 
}else{
    echo " $year is not leap year ";
}
echo"\n";
//nested loop

$condition1=false;
$condition2=false;
$condition3=false;

if($condition1){
    if($condition2){
        if($condition3){
            echo "hello";
        }else{
            echo "no 1";

        }
    }else{
        echo "no 2";
    }
}else{
    echo "no 3";
}

//2nd way nested if else

if($condition1 && $condition2 && $condition3){
    echo "hello";
}elseif($condition2 && $condition3){
     echo"no 1";
}elseif($condition2){
    echo"no 2";
}else{
    echo "no 3";
}

















?>