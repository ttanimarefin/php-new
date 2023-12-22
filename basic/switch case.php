<?php 
$age= 20;
switch($age){
    case '18':
        echo "i am now in 18";
        break;
    case '20':
        echo "i am now in 20";
        break;
    case '21':
        echo "i am now in 21";
        break;
    default:
        echo"this is ok";
}
echo "\n";
//2
$string = "6number";
switch($string){
    case "7number":
        echo " seven number";
        break;
    case 6:
        echo "6";
        break;
    case "6number":
        echo "six number";
        break;
    case "8number":
        echo "eight number";
        break;
    default:
        echo "ok";
}