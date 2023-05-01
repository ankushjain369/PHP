

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CHECK FORM</title>
	<?php include 'links.php' ?>
	<?php include 'table.css' ?>
	<?php include 'scripts.php' ?>
</head>
<body>
	<div class="main-div">
		<h1>Registered Candidates List</h1>
		<div class="center-div">

			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Degree</th>
						<th>Mobile</th>
						<th>Email</th>
						<th>Lang</th>
						<th>Picture</th>
					</tr>
				</thead>
				<tbody>
					<?php

          include 'connection.php';

					$selectQuery = " select * from users ";

					$query = mysqli_query($conn,$selectQuery);

					

					while($res = mysqli_fetch_array($query)){
					
					?>

					<tr>
						<td><?php echo $res['id'];?></td>
						<td><?php echo $res['name'];?></td>
						<td><?php echo $res['degree'];?></td>
						<td><?php echo $res['mobile'];?></td>
						<td><span class="email-style"><?php echo $res['email'];?></span></td>
						<td><?php echo $res['lang'];?></td>
						<td><img src=" <?php echo $res['pic'];?> " width="100" height="100"></td>
					</tr>

					<?php 

					}

					?>
					
				</tbody>
			</table>
			
		</div>
	</div>

</body>
</html>