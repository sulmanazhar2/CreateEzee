<div class="col-lg-9 col-md-9 col-sm-9">
<div class="panel panel-default">
<div class="panel-heading" style="background-color:#3C7A72">
	<h1 class="text-center"  style="color:#DBF1FF">My Orders</h1>
    <h3 class="text-center">Your Orders on one place.</h3>
<p class="text-center"  style="color:#DBF1FF">If you have any questions, please feel free to <a href="#">contact us</a>, our customer service center is working for you 24/7.</p>
</div>

<div  style="overflow-x:auto;" class="panel-body">
<table class="table table-bordered table-hover table-responsive table-condensed table-striped ">
<thead>
<tr>
<th>O.N:</th>
<th>Order_id</th>
<th>Customer_id:</th>
<th>Due Amount:</th>
<th>Invoice No:</th>
<th>Product_id:</th>
<th>Qty:</th>
<th>Size:</th>
<th>Paid/Unpaid:</th>
<th>Status:</th>
</tr>
</thead>
<tbody>
<?php
require_once('connection.php');
				$cemail=$email;
				 $sql="select * from customer where Email='$cemail'";
				$res=$conn->query($sql);
				$roww=$res->fetch_assoc();
				$cid=$roww['ID'];


$order="select * from customer_order where Customer_id ='$cid'";

$result=$conn -> query ($order);
$i=0;
while ($row = $result -> fetch_assoc())
{
	$oid=$row['Order_Id'];
	
	$invo=$row['Invoice_no'];
	$pid=$row['Product_Id'];
	$qty=$row['Qty'];
	$size=$row['Size'];
	$order_status=$row['Order_status'];
    $damount=$row['Due_amount'];
	$i++;
	if($order_status=='pending'){
                		$order_status="Unpaid";
                	}
                	else {
                		$order_status="Paid";
                	}
	

?>




<tr>
<td><?php echo $i ?></td>
<td><?php echo $oid ?></td>
<td><?php echo $cid ?></td>
<td><?php echo $damount ?></td>
<td><?php echo $invo ?></td>
<td><?php echo $pid ?></td>
<td><?php echo $qty ?></td>
<td><?php echo $size ?></td>
<td><?php echo $order_status ?></td>
<td><a href='myaccount.php?pg6=<?php echo $oid ?>' class="btn btn-primary">Confirm</a></td>
</tr>

<?php } ?>



</tbody>
</table>
</div>
</div>
</div>