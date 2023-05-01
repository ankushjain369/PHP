<?php

$names = array("ankush","jain","lunawath","yatree","kamareddy");
$names[5]="hyderabad";

echo "<pre>";
print_r($names);

$length = count($names);
echo "<ol>";
for($i=0;$i<$length;$i++){
	echo "<li>".$names[$i]."</li>";
}
echo "</ol>";

// ForEach function
$students = array("ram","ramesh","suresh","naresh","om");

sort($students); // Sorting in ascending order
rsort($students); // Sorting in descending order
echo "<ol>";
foreach($students as $name){
	echo "<li>".$name."</li>";
}
echo "</ol>";

// Array Functions pop,push,shift,unshift

$stud = array("ankush","jain","lunawath","canada");

echo "<pre>";
print_r($stud);

array_pop($stud); // POP - Removes last element

echo "<pre>";
print_r($stud);

array_push($stud, "kamareddy"); // PUSH - Adds an element to the last in an array

echo "<pre>";
print_r($stud);

array_shift($stud); // SHIFT - Removes first element

echo "<pre>";
print_r($stud);

array_unshift($stud, "Ankush"); // UNSHIFT - Adds an element to first in an array

echo "<pre>";
print_r($stud);
?>