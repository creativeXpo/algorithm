<?php

function quicksort( array $arr ) : array {
	
    if( count($arr) < 2 ) {
    	return $arr;
    }
    
    $pivot = array_pop($arr);
    $left = $right = [];
    
    foreach($arr as $element){
    	if($element < $pivot){
        	$left[] = $element;
        } else {
        	$right[] = $element;
        }
    }
    
    return array_merge( quicksort($left), [$pivot], quicksort($right) );
  
}

$num = [10, 40, 20, 15, 60];

$sorted = quicksort($num);

echo implode(', ', $sorted);

?>
