<?php

foreach (range(0, 100) as $number_current) {
    $string_output = "";

    if ($number_current % 3 == 0) { // check if current number in the loop is divisibled by 3;
        $string_output .= "Hello\n";
    }

    if ($number_current % 5 == 0) { // check if current number in the loop is divisibled by 5;
        $string_output .= "World\n";
    }

    // print the values
    echo $string_output; 
}
