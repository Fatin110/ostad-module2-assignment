<?php 
//printing first 10 fibonacci numbers
function fibonacci($n)
 {
 
  $first = 0;
  $second = 1;
 
  echo $first.' '.$second.' ';
 
  for($i = 2; $i < $n; $i++){

    $third = $first + $second;

    if ($first > 100 || $second > 100 || $third > 100) {
        break;
    }
 
    echo $third.' ';
 
    $first = $second;
    $second = $third;
 
    }
}

fibonacci(10);