
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


<div style="width:100%;">

<div  class="panel panel-default"  style="height:650px; overflow-y:scroll;">
<div class="panel-heading">
	<a href="#" class="panel-title" ><span class="glyphicon glyphicon-th"></span> Insert product</a>
</div>
<div class="panel-body">
<form method="post"  enctype="multipart/form-data">



	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><label class="pull-right">Product Title:</label></div> <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"> <input type="text" class="form-control"  name="title"/><br /></div>
     
  <div class="col-lg-2"></div> <div class="col-lg-10"> <select class="form-control"  name="manufacturer">
      <option selected="selected" disabled="disabled">
      Select A Seller
      </option>

      <option>
     CreateEzze
      </option>
       <option>
     Random
      </option>

      </select><br /></div>
 
      
   <div class="col-lg-2"></div>   <div class="col-lg-10"><select class="form-control" name="category" >
      <option value="">
      Select A Category
      </option>
      <option >
      Mens
      </option>
      <option>
     Womens
      </option>
      <option>
      Kids
      </option>
      <option>
      Gym
      </option>
      </select><br /></div>
      
    <div class="col-lg-2">  <label class="pull-right">Product image 1 </label></div> <div class="col-lg-10"><input type="file" class="form-control"  name="pic1"/> <br /></div>
    <div class="col-lg-2">  <label class="pull-right">Product image 2 </label></div> <div class="col-lg-10"><input type="file" class="form-control"  name="pic2"/> <br /></div>
   
   
     <div class="col-lg-2"> <label class="pull-right">Product Price</label></div>  <div class="col-lg-10">  <input type="number" class="form-control" name="prprice" /> <br /></div>
   <div class="col-lg-2"> <label class="pull-right">Product sale Price</label></div>  <div class="col-lg-10">      <input type="number" class="form-control" name="saprice" /> <br /></div>
 
<div class="col-lg-2"> </div><div class="col-lg-10"><ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#product"> Product Description</a></li>


</ul>


<div class="tab-content" ><div id="product" class="tab-pane fade in active"><textarea class="form-control" name="product" rows="15" cols="50"></textarea></div>
</div>

<br /> 
 <div class="col-lg-2"><label class="pull-right">Product Label</label></div>
 <div class="col-lg-10">
 <select class="form-control"  name="cat">
      <option value="">
      Select A Label
      </option>
      <option value="Available">
      Available
      </option>
      <option value="Not Available">
      Not Available
      </option>

      </select><br /></div>
<div class="col-lg-2"></div><div class="col-lg-10"><input type="submit" class="btn btn-primary form-control" value="Insert Product" name="insert" /></div>

      

</form>
</div>
   
</div>
</div>
</div>


</body>

</html>
<?php
require_once('connection.php');
if(isset ($_POST['insert']))
{
	$title=$_POST['title'];
	
	$seller=$_POST['manufacturer'];
	
	$category=$_POST['category'];
	
	$pic1=$_FILES['pic1']['name'];
	$temp=$_FILES['pic1']['tmp_name'];
	move_uploaded_file($temp,"products/".$pic1);
	
	$pic2=$_FILES['pic2']['name'];
	$temp=$_FILES['pic2']['tmp_name'];
	move_uploaded_file($temp,"products/".$pic2);
	
	
	$prprice=$_POST['prprice'];
	$saprice=$_POST['saprice'];
	
	$product=$_POST['product'];

 
	$prlabel=$_POST['cat'];
	$sql= "insert into product(Pr_name,Manufacturer,Category,Image1,Image2,Price,Sale_Price,Description,Label) values('$title','$seller','$category','$pic1','$pic2','$prprice','$saprice','$product','$prlabel')";
	
	if($conn -> query($sql))
	{
		echo "<script> alert ('Product is saved!!') </script>";
		/*echo "<script> window.open ('Showdata1.php','_self') </script>";*/
	}
	
	else{
		echo $conn -> error;
		echo $sql -> error;
	}
}
} 
?>