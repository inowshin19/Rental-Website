<?php
require('conn.php');
session_start();
ob_start();
$id=$_SESSION['name'];
$apt=$_SESSION['apt_id'];
$sql = mysql_query("SELECT * FROM apartment WHERE apartment_id = '$apt'") or die(mysql_error());
$sql1 = mysql_query("SELECT * FROM address WHERE apartment_id = '$apt'") or die(mysql_error());
$sql2 = mysql_query("SELECT * FROM feature WHERE apartment_id = '$apt'") or die(mysql_error());
if(mysql_num_rows($sql)>=1){
    while($row = mysql_fetch_array($sql)) {
        $floor = $row['floor_no'];
        $property_type = $row['property_type'];
		$rent=$row['property_price'];
    }
	}
	if(mysql_num_rows($sql1)>=1){
    while($row = mysql_fetch_array($sql1)) {
        $flat_no = $row['flat_number'];        
    }
	}
	if(mysql_num_rows($sql2)>=1){
    while($row = mysql_fetch_array($sql2)) {
        $service_charge = $row['service_charge'];
        $garage_facility = $row['garage'];
		$lift_facility=$row['lift'];
		$availability=$row['availability'];
    }
	}
if(isset($_POST['update']))
{

	$floor=$_POST['floor'];
	$p_type=$_POST['property_type'];
	$flat=$_POST['flat_no'];
	$rent=$_POST['rent'];
	$service=$_POST['service_charge'];
	$garage=$_POST['garage_facility'];
	$lift=$_POST['lift_facility'];
	$availability=$_POST['availability'];

			$query="UPDATE apartment SET floor_no = '$floor', property_type = '$p_type', property_price = '$rent'
            WHERE apartment_id = '$apt'";
			$query1="UPDATE address SET flat_number = '$flat'
            WHERE apartment_id = '$apt'";
			$query2="UPDATE feature SET service_charge = '$service', garage = '$garage', lift = '$lift', availability='$availability'
            WHERE apartment_id = '$apt'";
			
			mysql_query($query)or die(mysql_error());
			mysql_query($query1)or die(mysql_error());
			mysql_query($query2)or die(mysql_error());
if(mysql_affected_rows()>=1){
  
	header("Location: lastpage.php");
}else{
    echo "<p> Not Updated<p>";
}
}
if(isset($_POST['del_btn']))
{
	//$aa=$apt;

//DELETE FROM `address` WHERE `apartment_id`='6' 
$del1="DELETE FROM address WHERE apartment_id='".$apt."'";
$del2="DELETE FROM feature WHERE apartment_id='".$apt."'";
$del3="DELETE FROM image WHERE apartment_id='".$apt."'";
$del="DELETE FROM apartment WHERE apartment_id='".$apt."'";
//$del4="DELETE * FROM filter WHERE apartment_id='6'";
mysql_query($del1)or die(mysql_error());
mysql_query($del2)or die(mysql_error());
mysql_query($del3)or die(mysql_error());
//mysql_query($del4)or die(mysql_error());
mysql_query($del)or die(mysql_error());
if(mysql_affected_rows()>=1){
  
	header("Location: dashboard.php");
}else{
    echo "<p> Not deleted<p>";
}
}

?>



<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="design.css">
			<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
     <title>Home Heaven</title>
	 <style>
		.footer1{
  		position:absolute;
 		 top:154%;
  		width:100%;
  
   		background-color: black;
    		color: #f5f5f5;
    		padding: 0%;
		}

		footer a {
    		color: #f5f5f5;
    		left: ;
		}
	
		footer a:hover {
    		color: #777;
    		text-decoration: none;
    
		}
		.container{
		position:absolute;
		top:50%;
		left:1%;
		}
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
		
	.col-sm-4{
		top: 80%;
		left:10%;
	}
	.form-group{
		position:absolute;
		top:80%;
		}
		
	.carousel-inner{
		position:absolute;
		top:20%;
		left:2%;
		}
		
    .carousel-inner img {
		  width: 100%; /* Set width to 100% */
		  max-height: 250px;
		}

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 100px) {
      .carousel-caption {
        display: none;
      }
    }
/* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
    }
	#section{
			height: 630px;
			width:1000px;
			padding-left:150px;
			padding-top:25px;
			padding-right:165px;
			background-color:#FAFAFA;
		}
.bg-2 { 
      
      color: #ffffff;
}
.container-fluid {
      padding-top: 80px;
      padding-bottom: 700px;
      width:100%
  }

</style>
<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

</head>

<body>
<div class="menu1">
        <img src="Capture56.png" alt="HomeHeaven.com" width="150" height="75">
    </div>
        <div class="heading">
          <h2>HOME HEAVEN</h2>
          <h5>One Click Away From your Dream Home...........</h5>
        </div>
		
<ul class="w3-navbar w3-black">
<li><a class="w3-padding-hor-16" href="frontpage.php">Home</a></li> 
  <li><a class="w3-dark-grey w3-padding-hor-16" href="home.php">Apartment Information</a></li> 
   <li><a class="w3-padding-hor-16" href="dashboard.php">Manage Account</a></li> 
<li><a class="w3-padding-hor-16" href="second last page.php">Adds</a></li> 
  <li><a class="w3-padding-hor-16" href="about us.php">About Us</a></li>
  <a class="glyphicon glyphicon-log-in" class="w3-padding-hor-16"style="position:absolute; top:5%; left:92%; color:white;" href="frontpage.php"> LogOut</a></li>
  </ul>


<div class="container-fluid bg-2 text-left">

<div class="container">
<div class="row">
 
	
	<div id="section">

		<form action="" method="POST">
		<fieldset id="login info">
		<legend> Apartment Information</legend>
		<br> 
		<label style="color:black"> Flat No. </label>
		<br>
		<input type="flat no." class="form-control" name="flat_no" value="<?php echo "$flat_no" ?>" placeholder="flat no." style="color:black" required>
		<br>
		
		<label style="color:black"> Property type: </label>
		<select id="property type" name="property_type" style="color:black;" value="<?php echo "$property_type" ?>">
		  <option value="family" style="color:black">family</option>
		  <option value="single" style="color:black">single</option>
		</select>
		<br><br>
		<label style="color:black"> Floor No.: </label>
		<input type="number" name="floor" value="<?php echo "$floor" ?>" min="0" max="20" step="1" style="color:black" required>
		<br><br>
		<label style="color:black"> Rent: </label>
		<input type="number" name="rent" value="<?php echo "$rent" ?>" min="5000" max="50000" step="10" style="color:black" required>
		<label style="color:black"> Taka </label>
		<br><br>
		<label style="color:black"> Service Charge: </label>
		<input type="number" name="service_charge" value="<?php echo "$service_charge" ?>" min="0" max="10000" step="10"  style="color:black" required>
		<label style="color:black"> Taka </label>
		<br><br>
		<label style="color:black"> Garage Facility: </label>
		<select  name="garage_facility" style="color:black;" value="<?php echo "$garage_facility" ?>">
		  <option value="yes" style="color:black">Yes</option>
		  <option value="no" style="color:black">No</option>
		</select>
		<br><br>
		<label style="color:black"> Lift facility: </label>
		<select  name="lift_facility" style="color:black;" value="<?php echo "$lift_facility" ?>">
		  <option value="yes" style="color:black">Yes</option>
		  <option value="no" style="color:black">No</option>
		</select>
		<br><br>
		<label style="color:black"> Availablity: </label>
		<input type="date" name="availability" value="<?php echo "$availability" ?>" style="color:black">
		<br><br>
		<input type="submit" name="update" value="Update" style="color:black">
		<input type="submit" name="del_btn" value="Delete Ad" style="color:black">
		</fieldset>	 			 
		</form>
	</div>

	</div>
	</div>
	</div>

<!-- Footer -->

<footer class="footer1">
             <div class="footer-col links col-md-2 col-sm-4 col-xs-12">
                        <div class="footer-col-inner">
                            <h3 class="title">Company</h3>
                            <ul class="list-unstyled">
                                <li><a href= "about us.php" ><i class="fa fa-caret-right"></i>About us</a></li>                                
                                <li><a href=   ><i class="fa fa-caret-right"></i>Blog</a></li>                                
                                <li><a href=   ><i class="fa fa-caret-right"></i>Contact us</a></li>
                                <li><a href=   ><i class="fa fa-caret-right"></i>Partners</a></li>
                                <li><a href=   ><i class="fa fa-caret-right"></i>Affiliates</a></li>
                            </ul>
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->   
                    <div class="footer-col links col-md-2 col-sm-4 col-xs-12">
                        <div class="footer-col-inner">
                            <h3 class="title">Product</h3>
                            <ul class="list-unstyled">
                                <li><a href=   ><i class="fa fa-caret-right"></i>Pricing</a></li>
                                <li><a href=   ><i class="fa fa-caret-right"></i>Examples</a></li>
                                <li><a href=   ><i class="fa fa-caret-right"></i>Features</a></li>
                                <li><a href=    ><i class="fa fa-caret-right"></i>Testimonials</a></li>
                <li><a href=       ><i class="fa fa-caret-right"></i>FAQs</a></li>
                            </ul>
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col--> 
                    <div class="footer-col links col-md-2 col-sm-4 col-xs-12 sm-break">
                        <div class="footer-col-inner">
                            <h3 class="title">Support</h3>
                            <ul class="list-unstyled">
                                <li><a href=                  ><i class="fa fa-caret-right"></i>Help</a></li>                                
                                <li><a href=                             ><i class="fa fa-caret-right"></i>Terms of services</a></li>
                                <li><a href=               ><i class="fa fa-caret-right"></i>Privacy</a></li>
                            </ul>
                            </div>
                        </div><!--//footer-col-inner-->  

<footer class="w3-container w3-padding-hor-32 w3-theme-d1 w3-right">
  <h4>Follow Us</h4>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-btn-floating w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  

  

<h4>Get tips for renting your house online sent straight to your inbox</h4>
        <a class="up-arrow" href="frontpage.php" data-toggle="tooltip" title="TO TOP">
        <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>
        <p style="text-align:center">Copyright &#169 Home Heaven</p>
        
      </footer1>

</body>
</html>