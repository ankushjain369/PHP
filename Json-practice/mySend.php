<?php

if(isset($_GET['values']) && !empty($_GET['values'])){

	$showData = json_decode($_GET['values']);

	echo $showData -> lname;
}

?>