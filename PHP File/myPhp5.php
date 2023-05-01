<?php
// Defining a function
function sayName($name,$a,$b){
	echo "My name is {$name}";
	echo "<br>";
	$sum = $a + $b;
	echo "The sum of two numbers is ".$sum;
}

sayName("ankush",7,5);

// Default Function Parameters
function mul($a,$b=5){
	$res = $a*$b;
	echo "<br>";
	echo $res;
}

mul(2,8);
mul(12,8);
mul(6,4);
mul(7);

// Returning Function value
function add($a,$b=8){
	$res = $a+$b;
	$res1 = $a*$b;
	return "{$res} and Multiplication - {$res1}";
}

$output = add(4,9);
$output2 = add(9);
$output3 = add(4);



echo "<br>";
echo "The addition of two no's is ".$output;
echo "<br>";
echo "The addition of two no's is ".$output2;
echo "<br>";
echo "The addition of two no's is ".$output3;

?>