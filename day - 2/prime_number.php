<?php

$number = 7;

for ($i=2; $i <$number; $i++) { 
     if($number%$i == 0){
            break;
     }
}

if($i == $number){
   echo "prime number";
}
else{
    echo "not prime number";
}


?>