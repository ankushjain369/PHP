<?php

$heads=0;
$tails=0;

for($i = 1;$i<=100;$i++){
	$random = rand(1,2);
if($random == 1){
	$heads++;
	// echo "Heads, I Win";
}else{
	$tails++;
	// echo "Tails, You Win";
}
}


echo "There were {$heads} heads and {$tails} tails ";
echo "<br>";
if($heads > $tails){
	echo "Heads, I Win";
}elseif($heads < $tails){
	echo "Tails, You Win";
}else{
	echo "Match Tied";
}

// Length of the string

echo "<br>";
$data = "Hi, my name is Ankush Jain Lunawath and Greetings of the Day. How are you ?";
$length = strlen($data);
$words = str_word_count($data);
echo "Length of the string is ".$length." and the count of words is ".$words;

// Replace a string in Data
echo "<br>";
echo str_replace("Ankush", "Jain" , "Welcome Ankush, Have a nice day.");
echo "<br>";
echo str_ireplace("Nice","good","Welcome Ankush, Have a nice day.");
echo "<br>";

$names = "Ankush|Jain|Lunawath|Kamareddy|Welcome";
echo str_replace("|",", ",$names)
?>