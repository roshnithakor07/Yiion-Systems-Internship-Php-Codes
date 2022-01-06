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
    <form action="odd_even_2.php" method="post">
        <label for="number">Enter a Number: </label>
        <input type="text" name="number">

        <input type="submit" value="submit" id="btn" name = "submit">
    </form>
</body>
</html>


<?php
// odd-even number using user input in php

if (isset($_POST["submit"])) {

    $number = $_POST["number"];

    if ($number % 2 == 0) {
        echo "<h3 style='color: rgb(113, 68, 197);'>$number is even number </h3>";
    } else {
        echo "<h3 style='color:green;'>$number is odd number </h3>";
    }
    

}

?>