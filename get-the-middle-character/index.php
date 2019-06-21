<?php  


function getMiddle($text) {
  
  // მივიღოთ შუა ასო სტრინგიდან რომლის ასოთა ჯამი უდრის კენტ რიცვს
  function midOdd($text)
  {
    // გავიგოთ სტრინგის ასოების ჯამი
    $len = strlen($text);
    // გავყოთ 2ზე
    $divide = $len / 2;
    // დავაბრუნოთ სტრინგი $divideდან 1მდე
    echo substr($text, $divide, 1);
  }

  // მივიღოთ შუა ორი ასო სტრინგიდან რომლის ასოთა ჯამი უდრის ლუწ რიცხვს
  function midEven($text)
  {
  	$len = strlen($text);
  	$divide = $len / 2;
  	echo substr($text, $divide-1,2);
  }
  // თუ $text ცვლადში არსებული ასოთა ჯამი ლუწია:
  if(strlen($text) % 2 == 0) 
  {
	  midEven($text);    
  }
  // თუ კენტია
  else {
  	midOdd($text);
  }
}

getMiddle('a');




// თუ სიტყვა კენტია დაბრუნდეს შუა სიმბოლო
// თუ სიტყვა ლუწია დაბრუნდეს შუა ორი სიმბოლო
?>