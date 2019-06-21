<?php  

function duplicate_encode($word){
	// გადაკონვერტირება პატარა ასოებში
	$word = strtolower($word);
	// სტრინგის მასივად გადაქცევა
	$arr = str_split($word);
	// მასივი უკვე გადაკონვერტირებული სტრინგის შესანახად
	$w = [];
	for($i = 0; $i < count($arr); $i++) {
		// თუ ასო ($word[$i]) სტრიქონში გამოყენებულია ერთზე მეტჯერ მასივში დაამატოს ')'
		if(substr_count($word, $word[$i]) > 1) {
			array_push($w, ')');
		}
		// თუ გამოყენებულია ერთზე ნაკლებჯერ დაამატოს '('
		else{
			array_push($w, '(');
		}
	}
	// გადააკონვერტიროს მასივი სტრინგად და დააბრუნოს
	return implode($w);
}
echo duplicate_encode('test');


?>