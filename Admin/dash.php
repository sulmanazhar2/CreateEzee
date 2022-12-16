<?php

if ( !isset( $_SESSION['email'] ) ) {
    echo "<script>alert('Please login first')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $number = $_SESSION['number'];

    ?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <title>Admin Panel</title>
    <link href='bootstrap1/css/bootstrap.css' rel='stylesheet' type='text/css' />
    <script src='bootstrap1/js/bootstrap.js'></script>
    <script src='bootstrap1/js/jquery-3.2.0.js'></script>
</head>

<body>
    <script src='bootstrap1/js/bootstrap.js'></script>
    <script src='bootstrap1/js/jquery-3.2.0.js'></script>
    <div style='width:81%; float:left'>
        <div class='container-fluid'>
            <div class='container-fluid '>
                <h1>Dashboard</h1>
                <hr>

                <div class='well well-sm col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <p><span class='glyphicon glyphicon-dashboard'></span> Dashboard</p>
                </div>

                <div class='row'>
                    <div class='col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                        <div class='panel panel-primary'>
                            <div class='panel-heading'>
                                <h3>New Orders</h3>
                            </div>
                            <div class='panel-body'>
                                <div class='table-responsive'>
                                    <table class='table table-bordered table-striped table-hover table-condensed'>
                                        <thead>
                                            <tr>
                                                <th>Order No:</th>
                                                <th>Customer id:</th>
                                                <th>Invoice No: </th>
                                                <th>Product Id:</th>
                                                <th>Product Qty:</th>
                                                <th>Product Size:</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
    require_once( 'connection.php' );

    $sql = 'select * from customer_order';

    $result = $conn -> query ( $sql );
    while ( $row = $result -> fetch_assoc() ) {
        $id = $row['Order_Id'];
        $cid = $row['Customer_Id'];
        $invo = $row['Invoice_no'];
        $pid = $row['Product_Id'];
        $qty = $row['Qty'];
        $size = $row['Size'];

        $status = $row['Order_status'];

        ?>

                                            <tr>
                                                <td><?php echo $id?></td>
                                                <td><?php echo $cid?></td>
                                                <td><?php echo $invo?></td>
                                                <td><?php echo $pid?></td>
                                                <td><?php echo $qty?></td>
                                                <td><?php echo $size?></td>

                                                <td><?php echo $status?></td>

                                            </tr>
                                            <?php }
        ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class='col-lg-4 col-md-4 col-sm-4 col-xs-4'>

                        <div class='panel panel-primary'>
                            <div class='panel-heading'>
                                <h3>Personal Information</h3>
                            </div>
                            <div class='panel-body'>
                                <a href='#'>
                                    <?php
        require_once( 'connection.php' );
        $sql = "select * from admin where Admin_Email='$email'";
        $result = $conn -> query ( $sql );
        while ( $row = $result -> fetch_assoc() ) {
            $pi = $row['Admin_Pic'];
            ?>

                                    <img src="adminpic/<?php echo $pi?>" height='250' width='250' />
                                    <br />
                                    <?php }
            ?>
                                    <br />
                                </a>

                                <b>
                                    <p>Email: <?php echo $email ?></p>
                                </b>

                                <b>
                                    <p>Mobile No: <?php echo $number ?></p>
                                </b>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>

<?php }
            ?>
