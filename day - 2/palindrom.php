<?php


 $txt = "121";
 $low = 0 ;
 $high = strlen($txt)-1;
 $isPalindrom = true;
 

  while($low < $high){
      if($txt[$low] != $txt[$high]){
          $isPalindrom = false;
          break;
      }
      $low--;
      $high++;
  }

  if($isPalindrom){
      echo "$txt is palindrom";
  }
  else{
    echo "$txt is not palindrom";
  }

  




?>


