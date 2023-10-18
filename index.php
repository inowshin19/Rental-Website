<?php

require('conn.php');
session_start();
ob_start();

$rmb= $_COOKIE['name'];
if(isset($rmb)!=NULL)
{
	  header('Location: dashboard.php');
}
else
{
	header('Location: frontpage.php');
	}
?>