<?php

include "conn.php";
$id = $_GET['id'];
if(isset($_POST['sub_btn']))
{
	$size=$_POST['size'];
	$floor=$_POST['floor'];
	$p_type=$_POST['property_type'];
	$p_price=$_POST['rent'];
	$bed_no=$_POST['bedrooms'];
	$bath_no=$_POST['bathroom'];
    $ser_chrg=$_POST['service_charge'];
	$garage=$_POST['garage_facility'];
	$lift=$_POST['lift_facility'];
	$des=$_POST['description'];
	$availability=$_POST['availability'];
	//$liv_img=$_POST['pic1'];
	//$bed_img=$_POST['pic2'];
	//$building_img=$_POST['pic3'];
	//$dis=$_POST['district'];
	//$city=$_POST['city'];
	//$area=$_POST['area'];
	$holding=$_POST['holding_no'];
	$road=$_POST['road_no'];
	$p_name=$_POST['name'];
	$p_off=$_POST['post_office'];
	$zip=$_POST['zip_code'];
	$flat=$_POST['flat_no'];
	
	
	
	
$sql="UPDATE apartment(size, floor_no, property_type,property_price,no_of_bedroom, no_of_bathroom) 
VALUES('".$size."', '".$floor."', '".$p_type."', '".$p_price."','".$bed_no."','".$bath_no."')";
$sql1="INSERT INTO feature(service_charge, garage, lift, description, availability) 
VALUES('".$ser_chrg."', '".$garage."', '".$lift."', '".$des."','".$availability."')";
//$sql2="INSERT INTO image(livingroom_image, bedroom_image, building_image) 
//VALUES('".$pic1."', '".$pic2."', '".$pic3."')";
//$sql3="INSERT INTO address(district, city, area, holding_number,road_number, property_name, post_office,zip_code,flat_number) 
//VALUES('".$dis."', '".$city."', '".$area."', '".$holding."','".$road."','".$p_name."','".$p_off."','".$zip."','".$flat."')";

if($conn->query($sql)=== TRUE){
	echo "Succesful";
}
else{
	echo "fail";
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
     <title>Home Heaven</title>
	 <style>
		.footer1{
  		position:absolute;
 		 top:260%;
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
			height: 1410px;
			width:1000px;
			padding-left:150px;
			padding-top:25px;
			padding-right:165px;
			background-color:#FAFAFA;
		}
.bg-2 { 
      background-color:#ECEAF3;
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
		<legend>Information</legend>
		<label style="color:black;"> Address </label>
		<div id="address">
		<label style="color:black;"> Property Name </label>
		<br>
		<input type=" property name" class="form-control" name="name" placeholder="property name" style="color:black" required>
		<br>
		<label style="color:black;"> Post Office </label>
		<br>
		<input type="post office" class="form-control" name="post_office" placeholder="post office" style="color:black" required>
		<br>
		<label style="color:black;"> Holding No. </label>
		<br>
		<input type="holding no." class="form-control" name="holding_no" placeholder="holding no." style="color:black" required>
		<br>
		<label style="color:black;"> Road No. </label>
		<br>
		<input type="road no." class="form-control" name="road_no" placeholder="road no." style="color:black" required>
		<br>
		<label style="color:black;"> ZIP Code </label>
		<br>
		<input type="zip code" class="form-control" name="zip_code" placeholder="zip code" style="color:black" required>
		<br>
		<label style="color:black;"> Flat No. </label>
		<br>
		<input type="flat no." class="form-control" name="flat_no" placeholder="flat no." style="color:black" required>
		<br>
		</div>
		
		<label style="color:black;"> Property type: </label>
		<input type="property type" class="form-control" name="property_type" placeholder="property type" style="color:black" required>
		<br>
		<label style="color:black;"> Floor No.: </label>
		<input type="number" name="floor" min="0" max="20" step="1" style="color:black" required>
		<br><br>
		<label style="color:black"> Size of the apartment: </label>
		<input type="number" name="size" min="500" max="2000" step="1" style="color:black" required>
		<label style="color:black;"> sqrft </label>
		<br><br>
		<label style="color:black;"> Number of bedrooms: </label>
		<input type="number" name="bedrooms" min="1" max="10" step="1" style="color:black" required>
		<br><br>
		<label style="color:black;"> Number of bathrooms: </label>
		<input type="number" name="bathroom" min="1" max="5" step="1" style="color:black" required >
		<br><br>
		<label style="color:black"> Rent: </label>
		<input type="number" name="rent" min="5000" max="50000" step="10" style="color:black" required>
		<label style="color:black;"> Taka </label>
		<br><br>
		<label style="color:black"> Service Charge: </label>
		<input type="number" name="service_charge" min="0" max="10000" step="10"  style="color:black" required>
		<label style="color:black;"> Taka </label>
		<br><br>
		<label style="color:black"> Garage Facility: </label>
		<select id="Garage Facility" name="garage_facility">
		  <option value="yes" style="color:black;" >Yes</option>
		  <option value="no" style="color:black;" >No</option>
		</select>
		<br><br>
		<label style="color:black"> Lift facility: </label>
		<select id="Lift Facility" name="lift facility">
		  <option value="yes" style="color:black;">Yes</option>
		  <option value="no" style="color:black;">No</option>
		</select>
		<br><br>
		<label style="color:black"> Availablity: </label>
		<input type="date" name="availability" value="2016-02-09" style="color:black">
		<br><br>
		<label style="color:black"> Image: </label>
		<br>
		<input style="color:black;" type="file" name="pic1" accept="image/*">
		<br>
		<input style="color:black;" type="file" name="pic2" accept="image/*">
		<br>
		<input style="color:black;" type="file" name="pic3" accept="image/*">
		<br>
		<label style="color:black;"> Description: </label>
		<br>
		<input type="description" class="form-control" name="description" style="color:black;" required>
		<br><br>
		<input type="submit"  name="edit_btn" value="Update Info" style="color:black;">
		<input type="submit" name="del_btn" value="Delete Ad" style="color:black;">
		<input href="dashboard.php" type="submit" name="cancel_btn" value="Cancel" style="color:black;">
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