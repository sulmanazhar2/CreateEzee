<div class="col-lg-9 col-md-9 col-sm-9">
<div class="panel panel-default" >
<div class="panel-heading" style="background-color:#3C7A72">
<h1 class="text-center" style="color:#DBF1FF">Please Confirm Your Payment</h1>
</div>




<div class="panel-body">
<form method="post">
<?php 
			if(!isset($_GET['pg6'])){
				echo "<script>alert('there is no parameter')</script>";

 			}
 			else
 				
 			{
				 $on=$_GET['pg6'];
			
			?>
			<?php 

			$sql="select * from customer_order where Order_Id='$on'";
			$res=$conn->query($sql);
			while($row=$res->fetch_assoc()){
				$invoice_no=$row['Invoice_no'];
				$due_amount=$row['Due_amount'];
			



			 ?>

<label>Invoice no</label>
<input  type="text" class="form-control"  name="n1" value="<?php echo $invoice_no ?>" required="required"/><br />
<label>Amount sent</label>
<input  type="text" class="form-control" name="n2"  value="<?php echo $due_amount ?>" required="required"/><br />
<label>Select Payment mode:</label>
		<select name="m1" required="required" class="form-control">
			<option selected="selected" disabled="disabled">Select Payment mode</option>
            <option value="bank code">bank code</option>
           
            <option value="Western Union">Western Union</option>

		</select><br>
<label>Refrence ID:</label>
<input  type="text"  name="n3" class="form-control" required="required"/><br />
<label>Payment code:</label>
<input  type="text"  name="n4" class="form-control" required="required"/><br />
<label>Payment Date:</label>
<input  type="date"  name="n6" class="form-control" required="required"/><br />


<br />

<center><input type="submit" class="btn btn-primary btn-small" name="confirm" value="Confirm Payment"  /></center>




</form>
</div>
</div>
</div>
<?php }?>










<?php 
	if(isset($_POST['confirm'])){
		$invoice_no=$_POST['n1'];
		$amount_sent=$_POST['n2'];
		$payment_mode=$_POST['m1'];
		$ref=$_POST['n3'];
		$payment_code=$_POST['n4'];
		

		$sql="insert into payment (invoice_no,amount_sent,payment_mode,payment_code,payment_date, ref_no) values('$invoice_no','$amount_sent','$payment_mode','$payment_code',NOW(),'$ref')";

$run_payment= mysqli_query($conn,$sql);

        if($conn->query($sql)){
			echo "<script>alert('your payment has been confirmed')</script>";
			echo "<script>window.open('myaccount.php?pg=myorder','_self')</script>";
		}
		else{
			
			echo $conn->error.$sql->error;
		}

		 $updt_cstm_order="update customer_order set Order_status='paid' where Order_Id='$on'";
		$res1=$conn->query($updt_cstm_order);

     
		

	}

			}
	?>