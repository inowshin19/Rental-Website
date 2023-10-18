<?php

include "conn.php";
session_start();
ob_start();
	$id=$_SESSION['name'];
if(isset($_POST['edit_btn']))
{  

	echo $id;
	$name=$_POST['name'];
	$password=$_POST['pwd'];
	$phone=$_POST['phone_number'];
	$add=$_POST['add'];
	echo $name;
	echo $password;
	echo $phone;
	echo $add;
$query=" UPDATE `user` SET `user_name`='$name',`password`='$password',
`phone_number`='$phone',`address`='$add' WHERE user_id= '$id'";
if($query_run = mysql_query($query)) 
{
	echo "successfull";
	header('Location: dashboard.php');
}
else
	{
		echo mysql_error();
		}
}
?>