<?php
session_start();
ob_start();
$servername="localhost";
$username="root";
$password="";

$dbhandle = mysql_connect($servername, $username, $password) or die("Could not connect");

$selected = mysql_select_db("project", $dbhandle);

if(isset($_POST['signin'])){
	$email = stripslashes($_POST['email']);
    $pass = stripslashes($_POST['pwd']);
	$rmb=htmlentities($_POST['rmb']);
	$query="SELECT * FROM user WHERE email='$email' and password='$pass' ";
	if($query_run = mysql_query($query))
      {
	if(mysql_num_rows($query_run)!=NULL)
	{
	while($query_row=mysql_fetch_assoc($query_run))
	{
	   $id=$query_row['user_id'];
		$_SESSION['name']=$id;
		echo $id;
		if($rmb!=NULL)
		{setcookie('name',"$id",time()+3600);
	echo "hoice";}
	header('Location: dashboard.php');
		
	}
}
else
{
	header('Location: signin.php');
}
}
else
		{
		echo mysql_error();
		}
}

else
{
	
header('Location: signin.php');	
}  
	
?>