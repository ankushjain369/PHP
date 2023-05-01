<?php

$user = "root";
$password = "";
$server = "localhost";
$db = "crudop";

$conn = mysqli_connect($server,$user,$password,$db);

if($conn){
	//echo "Connection Successful";

?>

 <script>
 	alert("Connection Successful");
 </script>

<?php

}else{
	echo "No Connection";
}

?>