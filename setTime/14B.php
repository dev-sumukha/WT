<?php
    echo "To find factorial of number <br>";
    $num = 5;
    $fact=1;
    for($i=$num; $i>0; $i--){
        $fact = $fact*$i;
    }
    echo "Factorial of number $num is : $fact";
?>
