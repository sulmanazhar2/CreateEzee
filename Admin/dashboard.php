<?php
session_start();
if ( !isset( $_SESSION['email'] ) ) {
    echo "<script>alert('Please login first')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $number = $_SESSION['number'];
}
?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <title>CreateEzze Admin Panel</title>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='bootstrap1/js/bootstrap.js'></script>
    
    <link href='bootstrap1/css/bootstrap.css' rel='stylesheet' type='text/css' />
    <link href='bootstrap1/css/adminstyles.css' rel='stylesheet' type='text/css' />
</head>

<body>
    <nav class='nav navbar-inverse'>
        <div class='container-fluid'>
            <div class='navbar-header'>
                <a href='dashboard.php?pg=dash' class='navbar-brand'>Admin Panel</a>
            </div>
            <ul class='nav navbar-nav navbar-right'>
                <li class='dropdown'><a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-user'></span> <?php  echo $name ?><span class='caret'></span></a>
                    <ul class='dropdown-menu'>
                        <li><a href='logout.php'> <span class='glyphicon glyphicon-log-out'></span> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <div style='width:18%; float:left;'>
        <nav class='nav navbar-inverse' style=' height:1117px;'>
            <div class='container-fluid'>
                <ul class='nav navbar-nav nav-stacked'>
                    <li><a href='dashboard.php?pg=dash'><span class='glyphicon glyphicon-dashboard'></span> DashBoard</a></li>
                    <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'><span class='glyphicon glyphicon-th'></span> CreateEzze Products <span class='caret'> </span> </a>
                        <ul class='dropdown-menu'>
                            <li><a href='dashboard.php?pgg=insertproduct'>Insert Products</a></li>

                            <li><a href='dashboard.php?pgg1=viewproduct'>View Products</a></li>
                        </ul>
                    </li>
                    <br />
                    <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'><span class='glyphicon glyphicon-move'></span> CreateEzze Boxes <span class='caret'></span></a>
                        <ul class='dropdown-menu'>
                            <li><a href='#'>Insert Box</a></li>

                            <li><a href='#'>View Boxes</a></li>
                        </ul>
                    </li>

                    <br />
                    <li><a href='dashboard.php?pgg3=viewseller'><span class='glyphicon glyphicon-briefcase'></span> View Sellers </a>

                    </li>
                    <br />
                    <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'><span class='glyphicon glyphicon-pencil'></span> Product Category <span class='caret'></span></a>
                        <ul class='dropdown-menu'>
                            <li><a href='#'>Insert Product Category</a></li>

                            <li><a href='#'>View Products Categories</a></li>
                        </ul>
                    </li>
                    <br />
                    <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'><span class='glyphicon glyphicon-resize-vertical'></span> Slide Category <span class='caret'></span></a>
                        <ul class='dropdown-menu'>
                            <li><a href='#'>Insert Slide Category</a></li>

                            <li><a href='#'>View Slides</a></li>
                        </ul>
                    </li> <br />
                    <li><a href='dashboard.php?pgg2=viewcustomer'><span class='glyphicon glyphicon-gift'></span> View Customers</a></li>

                    <br />
                    <li><a href='#'><span class='glyphicon glyphicon-eye-open'></span> View Orders</a></li>

                    <br />
                    <li><a href='#'><span class='glyphicon glyphicon-credit-card'></span> View Payments</a></li>
                    <br />
                    <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'><span class='glyphicon glyphicon-move'></span> Payment Term/policy <span class='caret'></span></a>
                        <ul class='dropdown-menu'>
                            <li><a href='#'>Insert Payment Term</a></li>

                            <li><a href='#'>View Payment Term</a></li>
                        </ul>
                    </li>
                    <br />
                    <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'><span class='glyphicon glyphicon-move'></span> Shipping Policy <span class='caret'></span></a>
                        <ul class='dropdown-menu'>
                            <li><a href='#'>Insert Shipping policy</a></li>

                            <li><a href='#'>View Shipping policy</a></li>
                        </ul>
                    </li>
                    <br />
                    <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'><span class='glyphicon glyphicon-move'></span> Designs <span class='caret'></span></a>
                        <ul class='dropdown-menu'>
                            <li><a href='Tool/Editor.php'>Create New Design</a></li>

                            <li><a href='dashboard.php?pgg6=designedProducts'>View Available Designs</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
    <?php
if ( isset( $_GET['pg'] ) ) {
    require_once( 'dash.php' );

}

if ( isset( $_GET['pgg'] ) ) {
    require_once( 'insertproduct.php' );

}

if ( isset( $_GET['pgg1'] ) ) {
    require_once( 'viewproduct.php' );

}

if ( isset( $_GET['pgg2'] ) ) {
    require_once( 'viewcustomer.php' );

}

if ( isset( $_GET['pgg3'] ) ) {
    require_once( 'viewseller.php' );

}
if ( isset( $_GET['pgg6'] ) ) {
    require_once( 'designedProducts.php' );

}

?>

</body>

</html>
