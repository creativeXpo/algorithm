<?php

// Write a program to print all prime numbers between 1 and 20.

for($num = 2; $num <= 20; $num++){
	
    $isPrime = true;
    
    for($i = 2; $i <= sqrt($num); $i++){
    
    	if($num % $i === 0){
        	$isPrime = false;
            break;
        }
    }
    
    if($isPrime){
    	echo $num . " ";
    }
    
}

// 


