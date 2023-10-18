<?php

include "conn.php";

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
 		 top:152%;
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
		top:35%;
		left:2%;
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
		top: 6%;
		left:5%;
	}
	.form-group{
		position:absolute;
		top:80%;
		}
		
	.carousel-inner{
		position:absolute;
		top:20%;
		left:3%;
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
      
    }
	
.bg-2 { 
      background-color:#ECEAF3;
      color: #ffffff;
}

#nav{
			
			line-height:30px;
			background-color: #D7E2E5;
			height: 650px;
			width:200px;
			float:left;
			padding:25px;
		}
#section{
			float: center;
			height: 650px;
			width: 1050px;
			padding-left:10px;
			padding-right:185px;
			padding-top:10px;
			background-color:#FAFAFA;
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
  <li><a class="w3-padding-hor-16" href="dashboard.php">Manage Account</a></li> 
  <li><a class="w3-padding-hor-16" href="second last page.php">Apartment Information</a></li> 
  <li><a class="w3-dark-grey w3-padding-hor-16" href="home.php">Adds</a></li> 
  <li><a class="w3-padding-hor-16" href="about us.php">About Us</a></li>
  <a class="glyphicon glyphicon-log-in" class="w3-padding-hor-16"style="position:absolute; top:5%; left:92%; color:white;" href="frontpage.php"> LogOut</a></li>
  </ul>

<ul class="w3-navbar w3-black">

<li class="w3-dropdown-hover">
    <a class="w3-padding-hor-16" href="javascript:void(0)">Dhaka <i class="fa fa-caret-down"></i></a>
    <div class="w3-dropdown-content w3-card-4">
      <a class="w3-padding-hor-16" href="javascript:void(0)">Banani</a>
      <a class="w3-padding-hor-16" href="javascript:void(0)">Mirpur</a>
      <a class="w3-padding-hor-16" href="javascript:void(0)">Gulshan</a>
    </div>
 </li>
 <li class="w3-dropdown-hover">
    <a class="w3-padding-hor-16" href="javascript:void(0)">Chittagong<i class="fa fa-caret-down"></i></a>
    <div class="w3-dropdown-content w3-card-4">
      <a class="w3-padding-hor-16" href="javascript:void(0)">Khulshi</a>
      <a class="w3-padding-hor-16" href="javascript:void(0)">Dampara</a>
      <a class="w3-padding-hor-16" href="javascript:void(0)">Halishahar</a>
    </div>
    </li>
  <li class="w3-dropdown-hover">
    <a class="w3-padding-hor-16" href="javascript:void(0)">Comilla<i class="fa fa-caret-down"></i></a>
    <div class="w3-dropdown-content w3-card-4">
      <a class="w3-padding-hor-16" href="javascript:void(0)">Khulshi</a>
      <a class="w3-padding-hor-16" href="javascript:void(0)">Dampara</a>
      <a class="w3-padding-hor-16" href="javascript:void(0)">Halishahar</a>
    </div>
    </li>
    <li class="w3-dropdown-hover">
    <a class="w3-padding-hor-16" href="javascript:void(0)">Khulna<i class="fa fa-caret-down"></i></a>
    <div class="w3-dropdown-content w3-card-4">
      <a class="w3-padding-hor-16" href="javascript:void(0)">Khulshi</a>
      <a class="w3-padding-hor-16" href="javascript:void(0)">Dampara</a>
      <a class="w3-padding-hor-16" href="javascript:void(0)">Halishahar</a>
    </div>
    </li>
    <li class="w3-dropdown-hover">
    <a class="w3-padding-hor-16" href="javascript:void(0)">Rajshahi<i class="fa fa-caret-down"></i></a>
    <div class="w3-dropdown-content w3-card-4">
      <a class="w3-padding-hor-16" href="javascript:void(0)">Khulshi</a>
      <a class="w3-padding-hor-16" href="javascript:void(0)">Dampara</a>
      <a class="w3-padding-hor-16" href="javascript:void(0)">Halishahar</a>
    </div>
    </li>
    <li class="w3-dropdown-hover">
    <a class="w3-padding-hor-16" href="javascript:void(0)">Sylhet<i class="fa fa-caret-down"></i></a>
    <div class="w3-dropdown-content w3-card-4">
      <a class="w3-padding-hor-16" href="javascript:void(0)">Khulshi</a>
      <a class="w3-padding-hor-16" href="javascript:void(0)">Dampara</a>
      <a class="w3-padding-hor-16" href="javascript:void(0)">Halishahar</a>
    </div>
    </li>
</ul>

<div class="container">
<div class="row">
 
	<div id="nav">
	<p align="center"><font face="arial" size=+2 style="color:black"><b><u>Filtered by</b></u></font></p>
	<div class="checkbox">
          <h5 style="color:black"><strong>Size</strong></h5>
		  <label style="color:black">
		  <input type="checkbox"> 500 - 700 sqft</label>
		  <label style="color:black">
		  <input type="checkbox"> 701 - 1000 sqft</label>
		  <label style="color:black">
		  <input type="checkbox"> 1001 - 1200 sqft</label>
		  <label style="color:black">
		  <input type="checkbox"> 1201 - 1500 sqft</label>
		  
		  <h5 style="color:black"><strong>Rent</strong></h5>
		  <label style="color:black">
		  <input type="checkbox"> 5,000 - 10,000 Tk</label>
		  <label style="color:black">
		  <input type="checkbox"> 11,000 - 15,000 Tk</label>
		  <label style="color:black">
		  <input type="checkbox"> 16,000 - 20,000 Tk</label>
		  <label style="color:black">
		  <input type="checkbox"> 21,000 - 25,000 Tk</label>
		  
		  <h5 style="color:black"><strong>Number of Bedrooms</strong></h5>
		  <label style="color:black">
		  <input type="checkbox"> 1-3</label>
		  <br>
		  <label style="color:black">
		  <input type="checkbox"> 4-5</label>
		  <br>
		  <label style="color:black">
		  <input type="checkbox"> 6 or more</label>
		  
		  <h5 style="color:black"><strong>Property Type</strong></h5>
		  <label style="color:black">
		  <input type="checkbox"> family</label>
		  <br>
		  <label style="color:black">
		  <input type="checkbox"> single </label>
		  <br>
		  <input type="submit" value="Filter" style="color:black">
        </div>
	</div>
	<div id="section">
<!-- Container (Portfolio Section) -->

    <div class="col-sm-4">
      <div class="thumbnail">
	  <img src="http://carneyteam.com/wp-content/uploads/2014/07/selling-your-home-cedar-shingle-home11.jpg" text="Another Image Maybe" alt="Image">
	  <br>
     <p style="color:black"><strong>Halishahar
		<br>
		1200 sqft
		<br>
		<a href="last page for owner.php">Details</a>
		</strong>
		</p>
		
      </div>
    </div>
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