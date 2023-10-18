<?php
include "conn.php";
session_start();
$id=$_SESSION['name'];
ob_start();

?>

<!DOCTYPE html>
<html>
<head>
<title>Home Heaven</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
div.w3-center{
position:absolute;
top:80%;
left:40%;
color:blue;
}
.menu1{
       background-color: teal;
       padding: 1%;
       top:2%;
      
   }

div.heading{
position:absolute;
top:2%;
left:13%;
width:30%;
font-style: comic;
color: white;
text-align: left;
}
div.name{
position:absolute;
top:4%;
left:80%;
font-style: comic;
color: white;	
}
</style>
<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="menu1">
        <img src="Capture56.png" alt="HomeHeaven.com" width="150" height="75">
    </div>
        <div class="heading">
          <h2>HOME HEAVEN</h2>
          <h5>One Click Away From your Dream Home...........</h5>
        </div>
		
		<div class="name">
		<h4>sabrina</h4></div>
		
		<!--
<header class="w3-container w3-teal" style="height:30%;">
<img src="Capture5.png" alt="HomeHeaven.com" width="150" height="80">
      <div class="heading">
          <h2>HOME HEAVEN</h2>
          <h5>One Click Away From your Dream Home...........</h5>

      </div>
</header>
-->
<ul class="w3-navbar w3-black">
  <li><a class="w3-dark-grey w3-padding-hor-16" href="javascript:void(0)">Dashboard</a></li>
<li class="w3-dropdown-hover">
    <a class="w3-padding-hor-16" href="javascript:void(0)">Advertisement <i class="fa fa-caret-down"></i></a>
    <div class="w3-dropdown-content w3-card-4">
      <a class="w3-padding-hor-16" href="home.php">Post an Ad</a>
      <a class="w3-padding-hor-16" href="signup_edit.php">Edit my info</a>
    </div></li>
  <li><a class="w3-padding-hor-16" href="javascript:void(0)">News</a></li>
  <li><a class="w3-padding-hor-16" href="javascript:void(0)">Account Details</a></li>
 
  
<li><a class="w3-padding-hor-16" href="about us.php">About Us</a></li>

  <li><a class="glyphicon glyphicon-log-in" class="w3-padding-hor-16"style="position:absolute; top:5%; left:92%; color:white;"href="frontpage.php"> LogOut</a></li>
  </ul>
<div class="container-fluid text-center bg-grey">
 <div class="row text-center" style="position:absolute; left:20%;">
  <br>
  <?php
  $sql=mysql_query("SELECT * FROM apartment where user_id='$id'");
if(mysql_num_rows($sql)>=1){
while($row=mysql_fetch_assoc($sql))
{
	$p_price=$row['property_price'];
	$size= $row['size'];
	$apt=$row['apartment_id'];
	$_SESSION['apt_id']=$apt;
	$apt=$_SESSION['apt_id'];
	?>

   <table style="height:200%; width:500%;"><td><div class="col-sm-4">    
   <div class="thumbnail" style="width:100%; height:50%;">
      <?php
$sql1=mysql_query("SELECT * FROM image where apartment_id='$apt'");
if(mysql_num_rows($sql1)>=1){
?>
<?php
	// echo "<table>";
	// echo "<td>";
while($row=mysql_fetch_array($sql1))
{
    //echo "<tr>";
    //echo "<td>" ; ?>  <img src="photos/<?php echo $row['building_image']; ?>" height="200%;" width="200%" alt="Image"> 
    <?php //echo "</td>";?>
     <br>
	  <h4>Price: <?php echo "$p_price";?></h4>
		<h4>Size: <?php echo "$size";?></h4>
		
<?php
   // echo "</tr>";
} 
//echo "</td>";
    //echo "</table>";      
}
?>	  
	 
		<h4><a href="last page for owner.php?id=<?php echo $apt; ?>">Details</a></h4>
		
      </div>
    </div></td></table><?php
}
}?>
   </div>
  </div>
<!--
<div class="w3-center">
 
  <ul class="w3-pagination w3-padding-hor-32" style="top:90%">
    <li><a href="javascript:void(0)">«</a></li>
    <li><a class="w3-theme" href="javascript:void(0)">1</a></li>
    <li><a href="javascript:void(0)">2</a></li>
    <li><a href="javascript:void(0)">3</a></li>
    <li><a href="javascript:void(0)">4</a></li>
    <li><a href="javascript:void(0)">5</a></li>
    <li><a href="javascript:void(0)">»</a></li>
  </ul>
</div>
-->
</body>
</html> 
