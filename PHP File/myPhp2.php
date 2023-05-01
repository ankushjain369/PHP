<?php

echo "<br>";
echo "Hello \"Ankush Jain Lunawath\" ";

// if else statement
echo "<br>";
$day = "friday";
if($day == "sunday"){
	echo "Today is Holiday";
}else{
	echo "Today is Working Day";
}

// if elseif else statement
echo "<br>";
$num = 63;
if($num % 2 == 0){
	echo "Multiple of 2";
}elseif($num%3 == 0){
	echo "Multiple of 3";
}elseif($num%4 == 0){
	echo "Multiple of 4";
}else{
	echo "Not a Multiple of 2,3 and 4";
}

// Concatenation Operator (.)
echo "<br>";
$name = "Ankush Jain";
$age = 27;
echo "My name is ${name} and I am {$age} years old";
echo "<br>";
echo 'My name is '.$name.' and I am '.$age.' years old';

echo "<br>";
$name = 'Ankush ';
$name .= "Lunawath";
echo $name;

// Ternary Operator
echo "<br>";
$a = 7;
echo ($a==5)?"Yes it is equal to {$a}":"No, it is not equal to ${a}";

// Increment and Decrement Operator
echo "<br>";
$a = 2;
//$b = 2;

//echo $c = ++$a + $b++;
echo "<br>";
echo $d = $a++ + $a++ + ++$a;


?>