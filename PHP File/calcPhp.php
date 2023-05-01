<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculator</title>
</head>
<body>
	<form method="POST">
		Enter number1:<input type="text" name="num1">
		<br>
		<br>
		Enter number2:<input type="text" name="num2">
		<br>
		<br>
		<select name="operation">
			<option value="">Select One</option>
			<option value="add">Add</option>
			<option value="sub">Sub</option>
			<option value="mul">Mul</option>
			<option value="div">Div</option>
		</select>
		<br>
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<p>
		<?php
			if(isset($_POST['submit'])){
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				$operation = $_POST['operation'];

				switch($operation){
					case "add": $sum = $num1 + $num2;
					echo "The addition of {$num1} and {$num2} is {$sum} ";
					break;
					case "sub":$sub = $num1 - $num2;
					echo "The subtraction of {$num1} and {$num2} is {$sub}";
					break;
					case "mul":$mul = $num1 * $num2;
					echo "The multiplication of {$num1} and {$num2} is {$mul} ";
					break;
					case "div":$div = $num1 / $num2;
					echo "The division of {$num1} and {$num2} is {$div}";
					break;
					default:
					echo "Insufficient Data";
				}
			}
		?>
	</p>
</body>
</html>