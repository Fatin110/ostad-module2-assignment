<?php 
//even numbers 1-20 with for loop
function evenNumbers($start, $end, $step) {
    $start = ($start % 2 !== 0) ? $start + 1 : $start;
    echo "****** Printing even numbers using for loop ******\n";

    for ($i=$start; $i<=$end; $i=$i+$step) {
        if ($i % 2 == 0){
            echo $i . "\n";
        }
    }
}

evenNumbers(1,20,2);

//even numbers 1-20 with while loop
function evenNumbers2($start, $end, $step) {
    $start = ($start % 2 !== 0) ? $start + 1 : $start;
    echo "****** Printing even numbers using while loop ******\n";

    while ($start <= $end) {
        echo $start . "\n";
        $start += $step;
    }
}

evenNumbers2(1,20,2);

//even numbers 1-20 with do-while loop
function evenNumbers3($start, $end, $step) {
    $start = ($start % 2 !== 0) ? $start + 1 : $start;

    echo "****** Printing even numbers using do-while loop ******\n";
    do {
        echo $start . "\n";
        $start += $step;
    } while ($start<= $end);
}

evenNumbers3(1,20,2);