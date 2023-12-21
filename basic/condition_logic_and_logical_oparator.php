<?php
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