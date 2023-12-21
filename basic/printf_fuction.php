<?php 
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