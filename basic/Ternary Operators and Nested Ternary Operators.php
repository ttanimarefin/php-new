<?php
$n=12;
if(12==$n){
    echo "Twelve";
}elseif(10==$n){
   echo "Ten";
}else{
    echo "Number";
}
echo "\n";

$numinword= (10==$n)? "twelve" : "other number";
echo $numinword;
echo "\n";
//even odd check

$result = ($n % 2 == 0) ? "even" : "odd";
echo $result;
echo "\n";
//new chech 
$m= 13;

$r= ($m %2 ==0 ) ? "even" : (( $m==13)? "B":"c");
echo $r;