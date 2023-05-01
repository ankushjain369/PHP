<?php

try{

$user = 'root';
$pass = '';
$server = 'localhost';
$db = 'phppdo';

$con = new PDO("mysql:host=$server; dbname=$db",$user,$pass);

$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

if($con){
	echo "Connection Successful";
}else{
	echo "No Connection";
}

$insertquery = " insert into students(name,age,class,gender) values('lunawath',26,10,'male') ";

//$con->query($insertquery);
$con->exec($insertquery);

$selectquery = " select * from students where id=1 ";

$stmt = $con->query($selectquery);
$result = $stmt->fetch();

echo "<pre>";
print_r($result);

// Prepared Name Parameter with bound variables

$idnum = 2;
$selectquery1 =" select * from students where id=:idnum ";
$stmt1 = $con->prepare($selectquery1);
$stmt1->bindparam(':idnum',$idnum);
$stmt1->execute();

$res1=$stmt1->fetch();

echo "<pre>";
print_r($res1);

// //Prepared statement with Positional Parameter

$id = 13;
$name = 'lunawath';
$selectquery2 =" select * from students where id=? && name=?";
$stmt2 = $con->prepare($selectquery2);
$stmt2->execute([$id,$name]);

$res2=$stmt2->fetch();

echo "<pre>";
print_r($res2);

// Prepared statement with Named Parameter

$id = 1;
$name = 'ankush';
$selectquery3 =" select * from students where id=:id && name=:name";
$stmt3 = $con->prepare($selectquery3);
$stmt3->execute(['id'=>$id,'name'=>$name]);

echo $stmt3->rowCount();

$res3=$stmt3->fetch();

echo "<pre>";
print_r($res3);

// Insert data using parameters

$insertquery1 = " insert into students(name,age,class,gender) values(:name,:age,:class,:gender)";

$stmt4 = $con->prepare($insertquery1);

$stmt4->bindparam(':name',$name);
$stmt4->bindparam(':age',$age);
$stmt4->bindparam(':class',$class);
$stmt4->bindparam(':gender',$gender);

$name='yatree';
$age=22;
$class=9;
$gender='male';

$stmt4->execute();
// $stmt4->execute(['name'=>$name,'age'=>$age,'class'=>$class,'gender'=>$gender]); 


}catch(PDOException $e){
	echo "Error is: ".$e->getMessage();
}



?>