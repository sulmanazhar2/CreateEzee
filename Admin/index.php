<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Form</title>
    <script src="bootstrap1/js/jquery-3.2.0.js"></script>
    <link href="bootstrap1/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <style>
        .span-error {
            color: red;
            font-size: 17px;
        }

    </style>
</head>

<body style="background:linear-gradient(to bottom right, purple 50%,blue); background-repeat:no-repeat; height:722px;">
    <div class="container-fluid"><br><br>

        <div style="margin-top:120px;" class="row">
            <div class="col-lg-4"></div>


            <div style=" border-radius:10px;  box-shadow: 7px 7px 30px #333;" class="col-lg-4 jumbotron">

                <center>
                    <h3> <span class="glyphicon glyphicon-log-in"></span> Login</h3>
                </center>
                <form method="post">
                    <input type="text" class="form-control" required="required" placeholder="Username" name="username">
                    <hr>
                    <input type="password" class="form-control" required="required" placeholder="Password" name="password1">
                    <hr>
                    <center><span class="span-error"></span></center>
                    <input type="submit" value="Login" class="btn btn-danger" name="login">
                    <center>
                        <a href="register.php">
                            <h5> New Here?</h5>
                        </a>
                    </center>
                </form>
            </div>
        </div>
        <div class="col-lg-4"></div>
        <br>
    </div>
</body>

</html>
<?php
require_once('connection.php');


if(isset($_POST['login']))
{
 $namee=$_POST['username'];
 $pass=$_POST['password1'];

 $sql="select * from admin where Admin_Name='$namee' and Admin_Password='$pass'";
$res=$conn->query($sql);
	if($res->num_rows>0)
	{  
	while($row=$res->fetch_assoc())
	{
		$_SESSION['name']=$row['Admin_Name'];
		$_SESSION['email']=$row['Admin_Email'];
		$_SESSION['number']=$row['Admin_Contact'];
		$_SESSION['sessionType']='admin';
//		echo "<script>alert('You are Login!')</script>";
		echo "<script>window.location.href='dashboard.php?pg=dash'</script>";
	}
	}else
	{
		echo "<script>$('.span-error').text('Your login credentials were not correct. Please try again');</script>";
	}
}

?>
