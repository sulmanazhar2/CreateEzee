<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form</title>
<link href="bootstrap1/css/bootstrap.css" rel="stylesheet" type="text/css"  />
</head>

<body style="background:linear-gradient(to bottom right, purple 50%,blue); background-repeat:no-repeat; height:722px;">
<div class="container-fluid">
	<br />
    <br />
	<div style="margin-top:3px;" class="row">
    <div class="col-lg-4">
    </div>
    
    	<div style=" border-radius:10px; box-shadow: 7px 7px 30px #333;" class="col-lg-4 jumbotron">
       <center> <h3><span class="glyphicon glyphicon-user"></span> Create Account</h3> 
       </center>
        
        <form method="post"  enctype="multipart/form-data">
        <input type="text" class="form-control" required="required"  title="Please Enter in alphabets"; placeholder=" Enter FullName.." name="name" /><hr />
        <input type="email" class="form-control" required="required" placeholder="example@email.com" name="email" /><hr />
        <input type="password" class="form-control" required="required" title="Atleast 8 character, 1 Decimal, upperlower case" placeholder="Password.." name="password" /><hr />
        <input type="number" class="form-control" required="required"  placeholder="PhoneNumber.." name="number" /><hr />
        <input type="file" class="form-control" required="required" placeholder="Insert your Picture.." name="pic" /><hr />
        <input type="submit" value="Register" class="btn btn-danger" name="register" />
        <center><a href="index.php"><h5> Already have account?</h5> </a>
       </center>
        </form>
        </div>
        <div class="col-lg-4">
    </div> 
</body>
</html>
<?php
require_once('connection.php');
if(isset ($_POST['register']))
{
	$nam=$_POST['name'];
	$ema=$_POST['email'];
	$pass=$_POST['password'];
	$numb=$_POST['number'];
	$pi=$_FILES['pic']['name'];
	$temp=$_FILES['pic']['tmp_name'];
	move_uploaded_file($temp,"adminpic/$pi");
	
	
	
	$sql ="insert into admin (Admin_Name,Admin_Email,Admin_Password,Admin_Contact,Admin_Pic) values ('$nam','$ema','$pass','$numb','$pi')";
	
	if($con -> query($sql))
	{
		echo "<script> alert ('You are Registered!') </script>";
		/*echo "<script> window.open ('Showdata1.php','_self') </script>";*/
	}
	
	else{
		echo $conn -> error;
		echo $sql -> error;
	}
}


?>
