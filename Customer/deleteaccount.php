

<?php 
require_once('connection.php');
?>

<?php


if(isset($_GET['del_cstm']))
{
	$email=$_GET['del_cstm'];
	
	$sql="delete from customer Email ='$email'";
	if ($conn->query($sql))
	{
		echo "<script>alert('your account has been deleted')</script>";
		echo "<script>window.open('bregister.php','_self')</script>";
		
		
		}
		
	
}



?>