<?php

$r = 5;
for ($i = 1; $i <= 9; $i++) {
    $k = $i < 5 ? $i : $r--;
    for ($j = 1; $j <= 5; $j++) {

        if ($j <= 6 - $k) {
            echo "*";

        } else {
            echo '&nbsp;&nbsp;';
        }

    }
    echo "<br>";

}
