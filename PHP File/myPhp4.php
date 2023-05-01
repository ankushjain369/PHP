<?php
// While Loop 
echo "While Loop";
echo "<br>";

$i = 2;
$j = 1;
while($i<=20){
	echo " 2 * {$j} = {$i}";
	echo "<br>";
	$i +=2 ;
	$j++;
}

// Do-While Loop
echo "Do-While Loop";
echo "<br>";

$k = 0;
do{
	echo $k;
	echo "<br>";
	$k++;
}while($k<=10);

// For Loop
echo "<br>";
echo "For-Loop";
for($l=1;$l<=10;$l++){
	echo $l;
}

// Random Numbers
$random = rand(0,100);
echo "<br>";
echo $random;

?>