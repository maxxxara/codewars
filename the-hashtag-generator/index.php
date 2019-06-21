<?php  

function generateHashtag($str) {
	$str = str_replace('   ', '', $str);
	$str = str_replace('#', '', $str);
 	if (strlen($str) == 0 || strlen($str) >= 140) {
 		return false;
 	}

 	$count = 0;
 	for ($i=0; $i < strlen($str); $i++) { 
 		if ($str[$i] == " ") {
 			$count = $count + 1;
 		}
 		if ($str[$i] == "#") {
 			return false;
 		}
 	}
 	if ($count == strlen($str)) {
 		return false;
 	}
 	$array = explode(' ',$str);
 	$result = ['#'];
 	foreach ($array as $key => $word) {
		array_push($result, ucfirst($word));
 	}
	return implode($result);
}

echo generateHashtag('Code wars sadsad xsaxas   ');
?>