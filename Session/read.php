<?php
session_start();


if(isset($_SESSION['user'])){
	echo $_SESSION['user'] . "<br>";
	echo $_SESSION['age'];
}
else{
	echo "No user found";
}


?>