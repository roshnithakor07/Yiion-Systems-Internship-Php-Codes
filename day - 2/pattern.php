<?php


   for ($i=1; $i <=6 ; $i++) { 
          for ($j=1; $j <=11; $j++) { 
            
            if ($j >=$i && $j<=12-$i){
                echo "*";
            }
            else{
               echo "&nbsp";
            }
          }
      echo nl2br("\n");
          
      }

  
?>