<?php  

function isValidIP(string $str): bool
{
	if (strlen($str) != 0) {
		$numbers = explode('.', $str);		
	}else {
		return false;
	}

	if (count($numbers) > 4 || count($numbers) < 4) {
		return false;
	}

	if (preg_match('/^[0-9.]+$/i', $str))
	{
		foreach ($numbers as $key => $number) {
			if ($number > 255) {
				return false;
			}
		}
	}else{
		return false;
	}

	return true;
}

echo isValidIP('250.0.0.1');


?>