<?php
function sum($array) {
	
    $arrayLength = count($array);
    
    for($i= 0; $i < $arrayLength - 1; $i++) {
    	$max = $i;
    	for($j= $i + 1; $j < $arrayLength ; $j++) {
        	if($array[$j] > $array[$max]) {
            	$max = $j;
            }
        }
        
        $pos = $array[$i];
        $array[$i] = $array[$max];
        $array[$max] = $pos;
    }
    
    $sum = $array[0] + $array[1];
    return $sum;
}
echo sum([100,2,-2,143]);
?>  