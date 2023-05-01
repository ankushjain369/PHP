<?php
$favColor = "black";


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST">
		Enter your fav color:<input type="text" name="favcolor">
		<input type="submit" name="submit" value="Check Now">
	</form>

	<p>
		<?php
			if(isset($_POST['submit'])){
				$favColor = $_POST['favcolor'];
				
	switch($favColor){
	case "blue":
		echo 'Your Fav color is Blue' ;
		break;
	case "red":
		echo 'Your Fav color is Red' ;
		break;
	case "black":
		echo 'Your Fav color is Black' ;
		break;
	case "yellow":
		echo 'Your Fav color is Yellow' ;
		break;
	default:
		echo "Sorry, I have no idea about your fav color";
		break;
}
			}

		?>
	</p>
</body>
</html>