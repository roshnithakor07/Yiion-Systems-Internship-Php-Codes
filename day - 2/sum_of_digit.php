<?php

$sum = 0;
$number = 123;
while($number !=0){
    $t = $number%10; 
    $sum = $sum + $t;
    $number = (int)($number/10);

}

echo $sum;

?>