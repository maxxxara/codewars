<?php  

function dont_give_me_five($start, $end) {

	$result = [];

	for ($i=$start; $i < $end+1; $i++) {
		if ($i == 5) {
		 	continue;
		 } 
		if ( strpos( (string)$i, '5' ) ) {
			continue;
		}
		if (substr( (string)$i, 0, 1 ) === "5") {
			continue;
		}
		echo $i . "<br>";
		array_push($result, $i);
	}

	return count($result);

}

echo dont_give_me_five(1,72);

?>