<?php
// This is single line comment
# This is also a single line comment

/* This is 
multiple line
comment */

echo "Hello to the world of Programming <br>";
echo "Thank you for support and subscribe channel yatree";

// Assign values to variables
echo "<br>";
$num = 3;
echo $num;
echo "<br>";

$name = "ankush";
echo $name;
echo "<br>";

$floatNum = 1.092;
echo $floatNum;

// Expressions in PHP
echo "<br>";

$num1 = 5;
$num2 =10;

$sum = $num1 + $num2;
echo "The sum of numbers is $sum";

// Power of a Number
echo "<br>";
$base = 5;
$power = 3;

$powerNum = pow($base, $power);
echo "The power of number is $powerNum";

// Areas of circle,triangle,rectangle,square

echo "<br>";
$pi = 3.14;
$rad = 5;
$circleArea = $pi * $rad * $rad;
echo "Area of Circle is $circleArea";

echo "<br>";
$side = 4;
$squareArea = $side *$side;
echo "Area of Square is $squareArea";

echo "<br>";
$len = 4;
$wid = 8;
$rectArea = $len*$wid;
echo "Area of Rectangle is $rectArea";

echo "<br>";
$base = 5;
$height = 10;
$triangleArea = (1/2)*$base*$height;
echo "Area of Triangle is $triangleArea";

// Difference b/w Single('') vs Double("")
echo "<br>";
$name = "Ankush Jain Lunawath";
echo "My Name is $name";
echo "<br>";
echo "My Name is {$name}";
echo "<br>";
echo "My Name is ${name}";
echo "<br>";
echo 'My Name is $name';
echo "<br>";
echo "My Name is 'Ankush' ";
echo "<br>";
echo 'My name is "Ankush Jain" ';
echo "<br>";
echo "My name is \"Ankush Lunawath\" "; // use blacklash in double quotes/single quotes if you want it
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>This is from Html</h1>
</body>
</html>