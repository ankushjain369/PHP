<?php

$user = 'root';
$pass = '';
$server = 'localhost';
$db = 'signup';

$conn = mysqli_connect($server,$user,$pass,$db);

if($conn){
	?>
	<script>
		alert("Connection Successful");
	</script>
	<?php
}else{
	?>
	<script>
		alert("No Connection");
	</script>
	<?php
}

?>