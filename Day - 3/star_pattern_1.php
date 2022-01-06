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
    <form action="pattern.php" method="post">

        <label for="number">Enter a row value: </label>
        <input type="text" name="row">

        <label for="number">Enter a col value: </label>
        <input type="text" name="col">

        <input type="submit" value="submit" id="btn" name="submit">
    </form>
    <br>
</body>
</html>



<?php

if (isset($_POST["submit"])) {

    $col = $_POST["col"];
    $row = $_POST["row"];

    for ($i = 1; $i <= $row; $i++) {

        for ($j = 1; $j <= $col; $j++) {
            if ($j <= $i && $j <= $row - $i) {
                echo "*";
            } else {
                echo '&nbsp;&nbsp;';
            }
        }

        echo "<br>";
    }

}

?>

