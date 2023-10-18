<?php

include "conn1.php";
if(isset($_POST['name'])&&!empty($_POST['name'])
	&& isset($_POST['address'])&&!empty($_POST['address'])
    && isset($_POST['password'])&&!empty($_POST['password'])
	&& isset($_POST['email'])&&!empty($_POST['email'])
	&& isset($_POST['national_id'])&&!empty($_POST['national_id'])
	&& isset($_POST['phone_number'])&&!empty($_POST['phone_number'])
	)
{
	$name=$_POST['name'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$phone=$_POST['phone_number'];
	$nid=$_POST['national_id'];
	$add=$_POST['address'];
	

$sql="INSERT INTO user(user_name, password, email, phone_number, national_id, address) VALUES('$name', '$password', '$email', '$phone','$nid','$add')";
$result=$conn->query($sql);
if($result){
	
header("Location: signin.php");
}
else{
	header("Location: signup.php");
} 
}
?>
