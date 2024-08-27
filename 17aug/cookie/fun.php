<?php

// declare (strict_type = 1);

function printEventNumber(int $limit){

    for($index = 0; $index <= $limit ; $index++){
        if($index % 2 == 0){
            echo "Even Number = $index" ."<br>"; 
        }
    }

}


// printEventNumber(20);
// printEventNumber("40");

function add($first, $second = 0) : int {
    $sum = $first + $second;
    return $sum;    
}

echo add(4,2);
// echo add(4);

?>