
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
     #btn{
         border: none;
         outline: none;
         background-color: blue;
         padding: 0.5rem 1rem;
         border-radius: 10px;
         color: #fff;
     }
     #btn:hover{
          background-color: hsl(240, 79%, 37%);
     }
     
  </style>
</head>
<body>
    <form action="skip_number.php" method="post">
        <label for="number">Enter a Number: </label>
        <input type="text" name="number">
      
        <input type="submit" value="submit" id="btn" name = "submit">
    </form>
</body>
</html>

<?php

if(isset($_POST["submit"]))
{
    $number = $_POST['number'];
    $skip_number = array();
    echo "<h2>skip every $number  number: </h2>";
    for ($i=1; $i <=100 ; $i++) { 
        if($i%$number !=0){
            echo "$i  ";
        }
        else {
            array_push($skip_number,$i);
        }
        
    }
    echo "<br>";
    echo "<br>";
    
    echo "<h2>skip numbers are: </h2>";
    foreach($skip_number as $i){
        echo "<span style='color:pink;'>$i</span>  ";
    }
    


}



?>