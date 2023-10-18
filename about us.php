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
 		 top:182%;
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
			height: 825px;
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
<li><a class="w3-padding-hor-16" href="signin.php">Sign In</a></li> 
<li><a class="w3-padding-hor-16" href="signup.php">Sign Up</a></li> 
<li><a class="w3-padding-hor-16" href="addpage.php">Adds</a></li> 
  <li><a class="w3-dark-grey w3-padding-hor-16" href="about us.php">About Us</a></li>
  </ul>


<div class="container-fluid bg-2 text-left">

<div class="container">
<div class="row">
 
	
	<div id="section">
	 <div class="thumbnail">
	  <img src="http://carneyteam.com/wp-content/uploads/2014/07/selling-your-home-cedar-shingle-home11.jpg" text="Another Image Maybe" alt="Image">
	  <h3 style="color:black"><i>Finding a good home is not easy. Home Heaven is here to help you find one. Just one click away from your dream home.</i></h3>
      </div>
	<legend>About Us</legend>
		<label style="color:grey">Home Heaven gives rent givers and rent takers all the tools and valuable information they need to be successful in the home search process. Through its innovative web products, Home Heaven provides insights about the house and the neighborhood. </label>
		<br><br>
	<legend>Contact</legend>
	<label style="color:grey"> e-mail: </label>
	<label style="color:grey">homeheaven@gmail.com</label>
	<br>
	<label style="color:grey"> phone number: </label>
	<label style="color:grey">+8801XXXXXXXXX</label>
	<br>
	<label style="color:grey"> facebook id: </label>
	<label style="color:grey">facebook/page/home heaven</label>
	<br>
	
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
                                <li><a href= "about us.php"><i class="fa fa-caret-right"></i>Contact us</a></li>
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