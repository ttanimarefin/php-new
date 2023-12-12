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

//number system

$d=12; //dec
$o=012; //oct
$h=0x2B;

printf("The Number is %d and %d %d",$d,$o,$h);
echo"\n";
printf("The binary of  is %b",$d); 
echo"\n";
printf("The hexadecimal of %d is %x",12,1245); 
echo"\n";
printf("The octal of %d is %o",12,12); 
echo"\n";
 

//printf fuction

$fname1="tasin";
$lname1="ahammed";
printf('His name is %2$s %1$s',$fname1,$lname1);
echo"\n";
//decimal to binary using prinf function
printf('the binary of %1$d to %1$b',12);
echo"\n";

//print after the decimal point
$p=2.1214;
printf("%.4f",$p);
echo"\n";

//before 0 print 
$n1=12;
$n2=1234;
$n3=123.456;
printf("%05d",$n1);
echo"\n";

//decimal
printf("%08.4f",$n3);
echo"\n";

//sprintf
$output = sprintf("the number is %d and %d",$n1,$n2);
echo $output;
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

$food= "apple";
if()
















?>