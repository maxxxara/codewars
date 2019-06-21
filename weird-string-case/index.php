<?php  


function toWeirdCase($string) {

	$string = strtolower($string);
	$result = [];

	$words = explode(" ", $string);
	$count = count($words);
	$j = 0;
	foreach($words as $word) {
		for ($i=0; $i < strlen($word); $i++) { 
			if ($i % 2 == 0) { // ლუწია
				array_push($result, strtoupper($word[$i]));
			}else {
				array_push($result, $word[$i]);
			}
		}
		if (++$j != $count) {
			array_push($result, " ");
		}
	}
	$result = implode($result);
	return $result;
}
toWeirdCase('Weird string case');

?>