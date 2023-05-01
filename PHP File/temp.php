<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST">
		Enter the temperature:<input type="text" name="temp">
		<br>
		<br>
		<select name="conversion">
			<option value="centigrade">to C</option>
			<option value="fahrenhit">to F</option>
		</select>
		<br>
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<p>
		<?php
			if(isset($_POST['submit'])){
				$temp = $_POST['temp'];
				$conv = $_POST['conversion'];

				if($conv == "fahrenhit"){
					$res1 = $temp * 9/5 + 32;
					echo "The conversion of temperature from centigrade to fahrenhit is {$res1}";
				}
				else{
					$res2 = ($temp-32) * 5/9 ;
					echo "The conversion of temperature from fahrenhit to centigrade is {$res2}";

				}
			}

		?>
	</p>
</body>
</html>