
<?php

if(!isset($_SESSION['email']))
{
	echo "<script>alert('Please login first')</script>";
	echo "<script>window.location.href='index.php'</script>";
}
else
{
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$number=$_SESSION['number'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CreateEzze Admin Panel</title>
<link href="bootstrap1/css/bootstrap.css" rel="stylesheet" type="text/css" />
<script src="bootstrap1/js/bootstrap.js" ></script>
<script src="bootstrap1/js/jquery-3.2.0.js" ></script>
</head>

<body>
<script src="bootstrap1/js/bootstrap.js" ></script>
<script src="bootstrap1/js/jquery-3.2.0.js" ></script>

  <div class="panel panel-default">

<div class="panel-heading">
	<a href="#" class="panel-title" >&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-gift"></span> View Customers</a>

</div>
<div  style="overflow-y:auto; height:542px;"   class="panel-body">
<input class="form-control" id="myInput" type="text" placeholder="Search..">
<br />
<table class="table table-bordered table-hover table-responsive table-condensed table-striped ">
<thead>
<tr>
<th>Customer Id:</th>
<th>Customer Name:</th>
<th>Customer Email:</th>
<th>Customer Image:</th>
<th>Customer Country:</th>
<th>Customer City:</th>
<th>Customer Phone Number:</th>
<th>Customer Delete</th>
</tr>
</thead>
<tbody id="myTable">
<?php
require_once('connection.php');

$sql="select * from customer";

$result=$conn -> query ($sql);
while ($row = $result -> fetch_assoc())
{
	$id=$row['ID'];
	$name=$row['Name'];
	$email=$row['Email'];
	$image=$row['Profile_Pic'];
	$country=$row['Country'];
	$city=$row['City'];
	$contact=$row['Contact'];
	
	

?>

<tr>
<td><?php echo $id?></td>
<td><?php echo $name?></td>
<td><?php echo $email?></td>

<td><img src="../Customer/customerpic/<?php echo $image?>" height="100" width="100"/></td>
<td><?php echo $country?></td>
<td><?php echo $city?></td>
<td><?php echo $contact?></td>

<td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
</tr>
<?php }?>


</tbody>
</table>
</div>

</div>


<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


</body>

</html>
<?php }?>