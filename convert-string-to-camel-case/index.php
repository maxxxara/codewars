<?php  


function toCamelCase($str){
	$str = str_replace('-', '_', $str);
	$str = str_replace('/', '_', $str);
	$words = explode('_', $str);
	$result = [];
	foreach($words as $value => $word) {
		if ($value >= 1) {
			array_push($result, ucfirst($word));
		}else{
			array_push($result, $word);			
		}
	}
	return implode($result);
}	

echo toCamelCase('the-first-second')
?>