<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'css/login.php'; ?>
	<?php include 'links/links.php'; ?>
	<title>Login</title>
</head>
<body>
<?php

include 'conn.php';

if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=$_POST['password'];

	$email_search="select * from users where email='$email'";
	$email_query=mysqli_query($conn,$email_search);

	$email_count=mysqli_num_rows($email_query);

	if($email_count){
		$email_pass = mysqli_fetch_assoc($email_query);
		$db_pass=$email_pass['password'];
		$_SESSION['user']=$email_pass['fullname'];
		$pass_decode=password_verify($password, $db_pass);

		if($pass_decode){
		?>
			<script>
			alert("Login Successful");
			</script>
		<?php
			header('location:homepage.php');
			}else{
		?>
			<script>
			alert("Login Unsuccessful");
			</script>
		<?php
		}
	}else{
		?>
			<script>
			alert("Invalid Email Details");
			</script>
		<?php
	}
}

?>
	<div class="main-div">
		<h1>Login Form</h1>
			<div class="center-div">
			<main>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
					<button class="gmail-style"  type="submit" name="gmail">Login via Gmail<i class="fa-brands fa-google"></i></button>
					<button class="fb-style" type="submit" name="facebook">Login via FaceBook<i class="fa-brands fa-facebook-f"></i></button>
					<label>Email Id: <input type="email" name="email" required></label>
					<label>Password: <input type="password" name="password" required></label>
					<input type="submit" name="submit" value="Login Now">
				</form>
				<p>Don't Have an account <a href="signup.php" target="_blank">SignUp Here</a></p>
			</main>
		</div>
	</div>
</body>
</html>