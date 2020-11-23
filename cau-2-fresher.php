<?php
function sort($array) {
	
    $arrayLength = count($array);
    
    for($i= 0; $i < $arrayLength - 1; $i++) {
    	$min = $i;
    	for($j= $i + 1; $j < $arrayLength ; $j++) {
        	if($array[$j] < $array[$min]) {
            	$max = $j;
            }
        }
        
        $pos = $array[$i];
        $array[$i] = $array[$min];
        $array[$min] = $pos;
    }
    
    $result = array(array($array[$i] , $array[$j] ));
    return $result;
}
	var_dump(sort([1,2,4,6,234,6]));
?>  