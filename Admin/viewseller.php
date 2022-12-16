
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
	<a href="#" class="panel-title" >  &nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-briefcase"></span> View Seller</a>

</div>
<div  style="overflow-x:auto;"   class="panel-body">
<input class="form-control" id="myInput" type="text" placeholder="Search..">
<br />

<table class="table table-bordered table-hover table-responsive table-condensed table-striped">
<thead>
<tr>
<th>Seller Id:</th>
<th>Seller Name:</th>
<th>Delete Seller</th>
<th>Edit Seller</th>
</tr>
</thead>
<tbody  id="myTable">
<?php
require_once('connection.php');

$sql="select * from seller";

$result=$conn -> query ($sql);
while ($row = $result -> fetch_assoc())
{
	$id=$row['ID'];
	$name=$row['Name'];

	

?>

<tr>
<td><?php echo $id?></td>
<td><?php echo $name?></td>

<td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
<td><a href="#"><span class="glyphicon glyphicon-pencil"></span></a></td>
</tr>
<?php }?>




</tbody>
</table>


</div>
</div>


</body>

</html>
<?php }?>