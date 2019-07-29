<?php
    echo "Hello-World<br>";
    //create an array 
    $list = array(2, 1, 3, 4, 5, 7, 6, 8, 9, 11);
    //create a random element
    $assignRandom = array_rand($list);
    //output
    echo "<br>$list[$assignRandom]<br>";
    //JSON output
    $phpToJson = array_values($list);
    echo "<br>This is a JSON output generated from PHP array with Random function:<br>","<br>".json_encode($phpToJson);
?>