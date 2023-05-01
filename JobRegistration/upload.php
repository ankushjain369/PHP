<?php

include 'connection.php';

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$degree=$_POST['degree'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$lang=$_POST['lang'];
	$file=$_FILES['pic'];

	$filename = $file['name'];
	$filepath = $file['tmp_name'];
	$fileerror = $file['error'];

	$file_ext = explode('.', $filename);

	$file_ext_check = strtolower(end($file_ext));

	$valid_ext_check = array('png','jpg','jpeg');


	if($fileerror == 0){
		if(in_array($file_ext_check, $valid_ext_check)){
			$destfile = 'upload/'.$filename;
		move_uploaded_file($filepath, $destfile);

		$insertquery =" insert into users(name,degree,mobile,email,lang,pic) values('$name','$degree','$mobile','$email','$lang','$destfile')";
		$insertdata = mysqli_query($conn,$insertquery);

		if($insertdata){
			echo "Data Inserted";
		} else{
			echo "No Data Inserted";
		}
	header('location:registration.php');
	}else{
		?>
		<script type="text/javascript">
			alert("Not Valid Ext");
			window.location = "registration.php"
		</script>
		<?php
	}
}		

}else{
	echo "No button has been clicked";
}

?>