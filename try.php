<?php

include "conn.php";

if(isset($_POST['submit']))
{

$sql = "SELECT * FROM feature where size = '".$sizeFilter."',  property_price = '".$rentFilter."', number_of_bedroom = '".$bedroomFilter."', property_type = '".$propertyFilter."'";

print_r($sql);
die();
$query = mysql_query($sql) or die(mysql_error());

} 

?>

<?php

$sizeFilter = $_GET['size[]'];
$filteredResponse = array ();
foreach($sizeFilter as $range)
{
    if($range == 500700)
    {
        $query = "select * from apartment where rent >= 500 AND rent <=700";
        $sql = mysql_query($query);

        array_push($filteredResponse, $sql);
    }

    if($range == 7011000)
    {
        $query = "select * from apartment where size >= 701 AND size <=1000";
        $sql = mysql_query($query);

        array_push($filteredResponse, $sql);
    }

    if($range == 10011200)
    {
        $query = "select * from apartment where size >= 1001 AND size <=1200";
        $sql = mysql_query($query);

        array_push($filteredResponse, $sql);
    }
   if($range == 12011500)
    {
        $query = "select * from apartment where size >= 1201 AND size <=1500";
        $sql = mysql_query($query);

        array_push($filteredResponse, $sql);
    }
}
 ?>

<?php

$rentFilter = $_GET['property_price[]'];
$filteredResponse = array ();
foreach($rentFilter as $range)
{

    if($range == 500010000)
    {
        $query = "select * from apartment where property_price >= 5000 AND property_price <=10000";
        $sql = mysql_query($query);

        array_push($filteredResponse, $sql);
    }

    if($range == 1000015000)
    {
        $query = "select * from apartment where property_price >= 10000 AND property_price <=15000";
        $sql = mysql_query($query);

        array_push($filteredResponse, $sql);
    }
   if($range == 1500020000)
    {
        $query = "select * from apartment where property_price >= 15000 AND property_price <=20000";
        $sql = mysql_query($query);

        array_push($filteredResponse, $sql);
    }
  if($range == 2000025000)
    {
        $query = "select * from apartment where property_price >= 20000 AND property_price <=25000";
        $sql = mysql_query($query);

        array_push($filteredResponse, $sql);
    }
}
 ?>

<?php

$bedroomFilter = $_GET['number_of_bedroom[]'];
$filteredResponse = array ();
foreach($bedroomFilter as $range)
{

    if($range == 13)
    {
        $query = "select * from apartment where number_of_bedroom <=3";
        $sql = mysql_query($query);

        array_push($filteredResponse, $sql);
    }

    if($range == 45)
    {
        $query = "select * from apartment where number_of_bedroom >= 4 AND number_of_bedroom <=5";
        $sql = mysql_query($query);

        array_push($filteredResponse, $sql);
    }
   if($range == 610)
    {
        $query = "select * from apartment where number_of_bedroom >= 6 AND number_of_bedroom <=10";
        $sql = mysql_query($query);

        array_push($filteredResponse, $sql);
    }
}
 ?>

<?php

$bedroomFilter = $_GET['property_type[]'];
$filteredResponse = array ();
foreach($bedroomFilter as $range)
{

 $query = "select * from apartment where property_type = 'family' ";
 $query = "select * from apartment where property_type = 'single' ";
        $sql = mysql_query($query);

}
 ?>
