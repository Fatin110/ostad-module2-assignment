<?php
//printing first 15 fibonacci numbers
function fibonacci($n)
 {
 
  $first = 0;
  $second = 1;
 
  echo $first.' '.$second.' ';
 
  for($i = 2; $i < $n; $i++){
 
    $third = $first + $second;
 
    echo $third.' ';
 
    $first = $second;
    $second = $third;
 
    }
}

fibonacci(15);