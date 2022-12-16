<?php
require_once('function.php');
require_once('connection.php');

if(isset($_GET['cust_id']))
{
$customer_id=$_GET['cust_id'];
}
  ?>
  <?php
$ip_add=getRealUserIp();

$order_status="pending";

$invoice_no = mt_rand();

$select_cart="select * from cart where IP_address='$ip_add'";
$run_cart= mysqli_query($conn,$select_cart);
$grand=0;
$tax=2/100*$grand;
$shipping=35.00;


while($row= mysqli_fetch_array($run_cart))

{
	$pid=$row['ID'];
	//$pip=$row['IP_address'];
	$pq=$row['Quantity'];
	$pp=$row['Price'];
	$ps=$row['Size'];
	$sub=$pp * $pq;
	$grand+=$sub;
	$total=$tax+$shipping+$grand;
	 $sql="insert into customer_order(Customer_id,Invoice_no,Product_Id,Qty,Size,Order_status,Due_amount) values ('$customer_id','$invoice_no','$pid','$pq','$ps','$order_status','$grand')";
	
	$conn -> query($sql);
	
	$pending_order="insert into pending(Customer_id,Invoice_no,Product_Id,Qty,Size,Order_status) values('$customer_id','$invoice_no','$pid','$pq','$ps','$order_status')";
	$resss=$conn->query($pending_order);

	
	
	
		$sql1="delete from cart where IP_address='$ip_add'";
		$conn -> query($sql1);
		
	echo" <script> alert('Your order has been submitted')</script>";
			 echo" <script> window.open('myaccount.php?pg=myorder','_self')</script>";
						
		
}		


?>
