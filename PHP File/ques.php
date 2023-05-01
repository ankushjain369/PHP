<?php

function arrayUnion($arr1,$arr2){
	$merge = array_merge($arr1,$arr2);
	echo "<pre>";
	print_r($merge);

	$res = array_unique($merge);
	echo "<pre>";
	print_r($res);
}

$arr1 = array("red","yellow","black","orange");
$arr2 = array("red","black","blue","green","orange");

arrayUnion($arr1,$arr2);

// Date Function

echo date('d l M')."<br>";
echo date("h:i:sA")."<br>";

$timezone = date_default_timezone_get();
echo "The current server timezone is ".$timezone."<br>";

date_default_timezone_set('Asia/Kolkata');
echo date('d l M')."<br>";
echo date("h:i:sA")."<br>";

?>