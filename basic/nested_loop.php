<?php
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
