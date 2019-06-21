<?php  


function likes( $names ) {

	if (empty($names)) {
		return "no one likes this";
	}
	else {
		if (count($names) == 1) {
			return $names[0] . " likes this";
		}
		elseif(count($names) == 2) {
			return $names[0] . " and " . $names[1] . " like this";
		}
		elseif(count($names) == 3) {
			return $names[0]. ", " . $names[1] . " and ". $names[2] . " like this";
		}else {
			$l = count($names) - 2;
			return $names[0] . ", " . $names[1] . " and " . $l . " others like this";
		}
	}


}

echo likes(['peter', 'john', 'ben', 'messi']);


?>