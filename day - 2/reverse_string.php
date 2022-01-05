<?php


$rev = 0;
$number = 123;
while($number !=0){
    $t = $number%10; 
    $rev = $rev*10 + $t;
    $number = (int)($number/10);

}

echo $rev;

?>
