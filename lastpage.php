<?php

include "conn.php";

$sql=mysql_query("SELECT * FROM image");
if(mysql_num_rows($sql)>=1){
while($row=mysql_fetch_array($sql))
{
    $pic1 = $row['livingroom_image'];
        $pic2 = $row['bedroom_image'];
        $pic3 = $row['building_image'];
}
}


$sql1 = "SELECT apartment.size, apartment.floor_no, apartment.property_type, apartment.property_price, apartment.num_of_bedroom, apartment.num_of_bathroom FROM apartment where apartment_id = '".$apartment_id."'";
$sql2 = "SELECT feature.service_charge, feature.garage, feature.lift, feature.description, feature.availability  FROM feature where apartment_id = '".apartment_id."'";
$sql3 = "SELECT address.holding_number, address.property_name, address.area, address.road_number, address.post_office, address.zip_code FROM address where apartment_id = '".apartment_id."'";
$sql4 = "SELECT review.rating, review.comment FROM review where apartment_id = '".$apartment_id."'";


$query1 = mysql_query($sql1) or die(mysql_error());
$query2 = mysql_query($sql2) or die(mysql_error());
$query3 = mysql_query($sql3) or die(mysql_error());
$query4 = mysql_query($sql4) or die(mysql_error());

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
     top:130%;
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
    #table{
      position:absolute;
    top:1%;
    left:68%;
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
    left:0%;
  }
  .form-group{
    position:absolute;
    top:78%;
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
      
    }
  #section{
      height: 410px;
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
      padding-bottom: 250px;
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
  <li><a class="w3-padding-hor-16" href="signin.php">Sign Up</a></li> 
<li><a class="w3-padding-hor-16" href="second last page.php">Sign In</a></li>
<li><a class="w3-dark-grey w3-padding-hor-16" href="signin.php">Adds</a></li>  
  <li><a class="w3-padding-hor-16" href="about us.php">About Us</a></li>
  </ul>


<div class="container-fluid bg-2 text-left">

<div class="container">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="<?php echo '$pic1' ?>" height="100" width="200" text="IMAGE" alt="Image">
          <div class="carousel-caption">
            <h3>Home Heaven</h3>
          </div>     
        </div>

        <div class="item">
          <img src="<?php echo '$pic2' ?>" height="100" width="200" text="Another Image Maybe" alt="Image">
          <div class="carousel-caption">
            <h3>Home Heaven</h3>
            
          </div>     
        </div>
    <div class="item active">
          <img src="<?php echo '$pic3' ?>" height="100" width="200" text="IMAGE" alt="Image">
          <div class="carousel-caption">
            <h3>Home Heaven</h3>
          </div>     
        </div>
    
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div id="table">
  <table style="width:120%">

	<?php while ($row = mysql_fetch_array($query3)) { ?>
  <tr>
    <td>Area:</td>
    <td> <?php echo $row['area']; ?> </td>
  </tr>
   <tr>
    <td>Address:</td>
    <td> <?php echo $row['property_name'], $row['holding_number'], $row['road_number'], $row['post_office'], $row['zip_code']; ?> </td>
  </tr>
  

  <?php } ?>

<?php while ($row = mysql_fetch_array($query1)) { ?>
<tr>
      <td>Property Type:</td>
      <td> <?php echo $row['property_type']; ?> </td>
  </tr>

  <tr>
      <td>Size:</td>
      <td> <?php echo $row['size']; ?> </td>
  </tr>

  <tr>
    <td>Number of Bedrooms:</td>
   <td> <?php echo $row['num_of_bedroom']; ?> </td>
  </tr>
  <tr>
    <td>Number of Bathrooms:</td>
    <td> <?php echo $row['num_of_bathroom']; ?> </td>
  </tr>
<tr>
 <td>Rent:</td>
 <td> <?php echo $row['property_price']; ?> </td>
</tr>
<tr>
<td>Floor No.:</td>
<td> <?php echo $row['floor_no']; ?> </td>
</tr>

 <?php } ?>

 <?php while ($row = mysql_fetch_array($query2)) { ?>

<tr>
  <td>Service Charge:</td>
<td> <?php echo $row['service_charge']; ?> </td>
</tr>
<tr>
<td>Garage Facility:</td>
<td> <?php echo $row['garage']; ?> </td>
</tr>
<tr>
 <td>Lift Facility:</td>
<td> <?php echo $row['lift']; ?> </td>
</tr>
<tr>
  <td>Availability:</td>
<td> <?php echo $row['availability']; ?> </td>
</tr>

<tr>
  <td>Description:</td>
<td> <?php echo $row['description']; ?> </td>
</tr>

<?php } ?>

</table>

</div>
</div>
</div>

     <div id="pd_rating_holder_8371897"></div>
    <script type="text/javascript">
      PDRTJS_settings_8371897 = {
      "id" : "8371897",
      "unique_id" : "default",
      "title" : "",
      "permalink" : ""
      };
      (function(d,c,j){if(!document.getElementById(j)){var pd=d.createElement(c),s;pd.id=j;pd.src=('https:'==document.location.protocol)?'https://polldaddy.com/js/rating/rating.js':'http://i0.poll.fm/js/rating/rating.js';s=document.getElementsByTagName(c)[0];s.parentNode.insertBefore(pd,s);}}(document,'script','pd-rating-js'));
    </script>

    
      <h4>Leave a Comment:</h4>
      <form role="form">
        <div class="form-group">
          <textarea class="form-control" rows="1" required></textarea>
          
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      </div>
       </div>
      <br><br>
     
      <br>
     
      <div class="row">
        
        <div class="col-sm-10 text-left">
          <h4>Anja <small style="color:black">Sep 29, 2015, 9:12 PM</small></h4>
          <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <br>
          
          <?php while ($row = mysql_fetch_array($query1)) { ?>

            <?php echo $row['rating']; ?>
            <p> <?php echo $row['comment']; ?> </p>

          <?php } ?>
        
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