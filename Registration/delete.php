<?php

include 'connection.php';

$id = $_GET['delid'];

$deletequery = " delete from jobregistration where Id={$id} ";

$deldata = mysqli_query($conn,$deletequery);

header('location:display.php');

?>