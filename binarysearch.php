<?php

$listOfNumber = $_POST['numlist'];
$numlist = $_POST['numfind'];


$arraylist = explode(',',$listOfNumber);




function binarySearch(Array $arr,$num){

    if (count($arr) === 0){
        return false;
    }

    $low = 0;
    $high = count($arr) -1;

    while ($low <= $high){

        $mid = floor(($low + $high) / 2);

        if ($num == $arr[$mid]){
            return true;
        }

        if ($num < $arr[$mid]){

            $high = $mid-1 ;

        }else{
            $low = $mid + 1;
        }
    }
    return false;
}


if (binarySearch($arraylist,$numlist)){
    echo "Number :$numlist is in the list";
}else{
    echo "Number :$numlist does`nt in the list";
}