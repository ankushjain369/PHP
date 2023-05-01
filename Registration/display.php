

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
						<th>Email</th>
						<th>Mobile</th>
						<th>Refer</th>
						<th>Post</th>
						<th colspan="2">Operation</th>
					</tr>
				</thead>
				<tbody>
					<?php

                     include 'connection.php';

					$selectQuery = " select * from jobregistration ";

					$query = mysqli_query($conn,$selectQuery);

					while($res = mysqli_fetch_array($query)){
					
					?>

					<tr>
						<td><?php echo $res['Id'];?></td>
						<td><?php echo $res['Name'];?></td>
						<td><?php echo $res['Degree'];?></td>
						<td><span class="email-style"><?php echo $res['Email'];?></span></td>
						<td><?php echo $res['Refer'];?></td>
						<td><?php echo $res['Post'];?></td>
						<td><?php echo $res['Mobile'];?></td>
						<td><a href="update.php?id=<?php echo $res['Id'];?>" data-bs-toggle="tooltip" data-bs-placement="top" title="UPDATE"><i class="fa-solid fa-pen-to-square"></i></td></a>
						<td><a href="delete.php?delid=<?php echo $res['Id'];?>" data-bs-toggle="tooltip" data-bs-placement="top" title="DELETE"><i class="fa-solid fa-trash-can"></i></td></a>
						
					</tr>

					<?php 

					}

					?>
					
				</tbody>
			</table>
			
		</div>
	</div>

<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
</body>
</html>