
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
	<a href="#" class="panel-title" > &nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-th"></span> View product</a>

</div>
<div  style="overflow-y:auto; height:540px"   class="panel-body">
 <input class="form-control" id="myInput" type="text" placeholder="Search..">
 <br />

<table class="table table-bordered table-hover table-responsive table-condensed table-striped">
<thead> 
<tr>
<th>Product_ID</th>
<th>Product_Title</th>
<th>Product_Image1</th>
<th>Product_Image2</th>
<th>Product_Price</th>
<th>Product_Sale_Price</th>
<th>Label</th>
<th>Product_Edit</th>
<th>Product_Delete</th>
</tr>
</thead>
<tbody id="myTable">
<?php
require_once('connection.php');

$sql="select * from product";

$result=$conn -> query ($sql);
while ($row = $result -> fetch_assoc())
{
	$id=$row['ID'];
	$title=$row['Pr_name'];

	$manu=$row['Manufacturer'];
	
	$cate=$row['Category'];
	$pic1=$row['Image1'];
    $pic2=$row['Image2'];
	
	$price=$row['Price'];
	$sprice=$row['Sale_Price'];
	
	$desc=$row['Description'];
	
	$label=$row['Label'];
	

?>

<tr>
<td><?php echo $id?> </td>
<td><?php echo $title?></td>
<td><img src="products/<?php echo $pic1?>" width="100" height="100"/></td>
<td><img src="products/<?php echo $pic2?>" width="100" height="100"/></td>
<td><?php echo $price?></td>
<td><?php echo $sprice?></td>
<td><?php echo $label?></td>
<td><a href="#"></span></a></td>
<td><a href="#"></span></a></td>
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