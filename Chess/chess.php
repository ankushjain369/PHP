<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ChessBoard</title>
	<style>
		table{
			border-spacing: 0;
			border: 1px solid black;
		}
		td{
			padding: 20px;
			border: 1px solid black;
		}
		
		.bg-black{
			background-color: black;
		}

	</style>
</head>
<body>
	<form action="" method="POST">
	<input type="text" name="cb">
	<input type="submit" name="submit" value="Generate Board">
	</form>
	<br>
	<table>
		<?php

		if(isset($_POST['submit'])){
			$data = $_POST['cb'];

			for($row=1;$row<=$data;$row++){
				echo "<tr>";

				for($col=1;$col <$data;$col++){
					if(($row+$col)%2 == 0){
						echo "<td class='bg-black'> </td>";
					}else{
						echo "<td> </td>";

					}
				}

				echo "</tr>";
			}

		}



		?>
	</table>
</body>
</html>