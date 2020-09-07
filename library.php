<?php
function cube($n)
{
    return $n*$n*$n;
}
function isLeap($year)
{
    return (date('L',mktime(0,0,0,1,1,$year))==1);
}
function areasquare($side)
{
    $area=$side*$side;
    return $area;
}
function isevenodd($num)
{
    if($num%2==0)
    return 1;
    else
    return 0;
}
function primeCheck($number){ 
    if ($number == 1) 
    return 0; 
    for ($i = 2; $i <= $number/2; $i++){ 
        if ($number % $i == 0) 
            return 0; 
    } 
    return 1; 
} 
?>