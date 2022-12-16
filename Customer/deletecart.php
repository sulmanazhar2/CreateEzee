<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>delete cart</title>
</head>

<body>
<?php
require_once('connection.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'];

$sql="delete from cart where ID=$id";
 $conn -> query($sql);
 
 echo "<script>alert('deleted') </script>";
 echo "<script>window.location.href='shoppingcart.php'</script>";
}
 
?>

</body>
</html>
<?php
require_once('connection.php');
if (isset ($_POST['delete']))
{
	$id = $_POST['id'];
	
	$sql ="Delete from cart where ID='$id'";
	
	if($conn -> query($sql))
	{
	echo  "<script> alert ('Your data is deleted') </script>";	
	}
	
}



?>