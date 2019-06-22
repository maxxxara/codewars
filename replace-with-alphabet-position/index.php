<?php  


function alphabet_position(string $s): string {
	$s = strtolower($s);
	$alp = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
	$result = [];

	for ($i=0; $i < strlen($s); $i++) {
		if ($s[$i] == " ") {
			continue; 	
		} 
		if(preg_match("/^[a-zA-Z]+$/", $s[$i]) != 1) {
			continue;
		}
		array_push($result, array_search($s[$i], $alp)+1);
		array_push($result, " ");
	}
	unset($result[count($result)-1]);
	return implode($result);

}

echo alphabet_position('The sunset sets at twelve o\' clock');
?>