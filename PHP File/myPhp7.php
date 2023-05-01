<?php
// Implode and Explode Functions
// Implode -- Array to String
$colors = array("black","red","orange","yellow");

print_r($colors);
echo "<br>";
$res=implode(",", $colors);
echo "My fav colors are ".$res;

// Explode -- String to Array
echo "<br>";
$bio = "My name is Ankush Jain Lunawath";

$result = explode(" ", $bio);
echo "<pre>";
print_r($result);
?>