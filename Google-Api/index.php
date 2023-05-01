<?php

include 'config.php';

$login_button = '';

if(isset($_GET['code'])){
	$token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
	if(!isset($token['error'])){
	$google_client->setAccessToken($token['access_token']);
	$_SESSION['access_token']=$token['access_token'];
	$google_service = new Google_Service_Oauth2($google_client);
	$data = $google_service->userinfo->get();
	if(!empty($data['given_name'])){
		$_SESSION['user_first_name']=$data['given_name'];
	}
	if(!empty($data['family_name'])){
		$_SESSION['user_last_name']=$data['family_name'];
	}
	if(!empty($data['email'])){
		$_SESSION['user_email']=$data['email'];
	}
	}
}

if(!isset($_SESSION['access_token'])){
	$login_button='<a href="'.$google_client->createAuthUrl().'"style="background:#dd4b39; border-radius:5px; color:white; display:block; font-weight:bold; padding: 20px; text-align:center; text-decoration:none; width:200px;" >Login With Google </a>';
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>PHP login using Google Account</h1>

	<?php
	if($login_button == ''){
		echo '<div><h2>Welcome User<h2></div>';
		echo "<br>";
		echo '<br><p><b>Name:</b>'.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</p>';
		echo '<p><b>Email:</b>'.$_SESSION['user_email'];
		echo "<br>";
		echo '<p><a href="logout.php">Logout</a><p>';
	}else{
		echo $login_button;
	}
	?>

</body>
</html>