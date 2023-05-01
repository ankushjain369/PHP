<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'css/style.php' ?>
	<title>SignUp</title>
</head>
<body>
<?php

include 'conn.php';

if(isset($_POST['submit'])){
	$name=mysqli_real_escape_string($conn,$_POST['fullname']);
	$mobile=mysqli_real_escape_string($conn,$_POST['mobile']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$dob=mysqli_real_escape_string($conn,$_POST['dob']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	$cpassword=mysqli_real_escape_string($conn,$_POST['cpassword']);

	$pass = password_hash($password, PASSWORD_BCRYPT);
	$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

	$emailquery = "select * from users where email='$email'";
	$query = mysqli_query($conn,$emailquery);

	$emailcount = mysqli_num_rows($query);

	if($emailcount>0){
		?>
	<script>
		alert("Email Already Exists");
	</script>
	<?php
	}else{
		if($password === $cpassword){

			$insertquery = " insert into users(fullname,mobile,email,dob,password,cpassword) values('$name','$mobile','$email','$dob','$pass','$cpass') ";

			$insertdata = mysqli_query($conn,$insertquery);

			if($insertdata){
			?>
				<script>
				alert("Registered Successfully");
				</script>
			<?php
			header('location:login.php');
				}else{
			?>
				<script>
				alert("Not Registered");
				</script>
			<?php

			}

		}else{
			?>
				<script>
				alert("Passwords does not match");
				</script>
			<?php

		}
	}

}

?>
	
	<div class="main-div">
		<h1>Registration/SignUp Form</h1>
		<div class="center-div">
			<main>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
					<label>Full Name: <input type="text" name="fullname" required></label>
					<label>Mobile: <input type="text" name="mobile" required></label>
					<label>Email Id: <input type="email" name="email" required></label>
					<label>Date Of Birth: <input type="text" name="dob" placeholder="yyyy-mm-dd"></label>
					<label>Password: <input type="password" name="password" required></label>
					<label>Confirm Password: <input type="password" name="cpassword" required></label>
					<input type="submit" name="submit" value="Create account">
				</form>
				<p>Have an account <a href="">Login</a> here</p>
			</main>
		</div>
	</div>
</body>
</html>

