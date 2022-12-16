<?php
session_start();
if(isset($_SESSION['ema']))
{
    session_destroy();
    session_start();    
}
if(isset($_SESSION['sema']))
{
    ?><script>
    window.location.href = 'seller.php'

</script><?php
}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sign in</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
   <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/styleee.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style type="text/css">
        .slider {
            width: 90%;
            margin: 100px auto;
        }

        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
            color: red;
        }


        .slick-slide {
            transition: all ease-in-out .3s;
            opacity: 1;
        }

        .slick-active {
            opacity: 1;
        }

        .slick-current {
            opacity: 1;
        }




        /*--------------------------------------*/

        input {
            box-shadow: 0;
            outline: 0;
        }

        .price-slider {
            width: 220px;
            margin: auto;

            position: relative;
            height: 6em;
        }

        .price-slider svg,
        .price-slider input[type=range] {
            position: absolute;
            left: 0;
            bottom: 0;
        }

        input[type=number] {
            border: 1px solid #ddd;
            font-size: 1.3em;
            -moz-appearance: textfield;
            border-radius: 50px;
            text-align: center;

        }

        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }

        input[type=number]:invalid,
        input[type=number]:out-of-range {
            border: 2px solid #e60023;
        }

        input[type=range] {
            -webkit-appearance: none;
            width: 100%;
        }

        input[type=range]:focus {
            outline: none;
        }

        input[type=range]:focus::-webkit-slider-runnable-track {
            background: #1da1f2;
        }

        input[type=range]:focus::-ms-fill-lower {
            background: #1da1f2;
        }

        input[type=range]:focus::-ms-fill-upper {
            background: #1da1f2;
        }

        input[type=range]::-webkit-slider-runnable-track {
            width: 100%;
            height: 5px;
            cursor: pointer;
            animate: 0.2s;
            background: #1da1f2;
            border-radius: 1px;
            box-shadow: none;
            border: 0;
        }

        input[type=range]::-webkit-slider-thumb {
            z-index: 2;
            position: relative;
            box-shadow: 0px 0px 0px #000;
            border: 1px solid #1da1f2;
            height: 18px;
            width: 18px;
            border-radius: 25px;
            background: #a1d0ff;
            cursor: pointer;
            -webkit-appearance: none;
            margin-top: -7px;
        }

        input[type=range]::-moz-range-track {
            width: 100%;
            height: 5px;
            cursor: pointer;
            animate: 0.2s;
            background: #1da1f2;
            border-radius: 1px;
            box-shadow: none;
            border: 0;
        }

        input[type=range]::-moz-range-thumb {
            z-index: 2;
            position: relative;
            box-shadow: 0px 0px 0px #000;
            border: 1px solid #1da1f2;
            height: 18px;
            width: 18px;
            border-radius: 25px;
            background: #a1d0ff;
            cursor: pointer;
        }

        input[type=range]::-ms-track {
            width: 100%;
            height: 5px;
            cursor: pointer;
            animate: 0.2s;
            background: transparent;
            border-color: transparent;
            color: transparent;
        }

        input[type=range]::-ms-fill-lower,
        input[type=range]::-ms-fill-upper {
            background: #1da1f2;
            border-radius: 1px;
            box-shadow: none;
            border: 0;
        }

        input[type=range]::-ms-thumb {
            z-index: 2;
            position: relative;
            box-shadow: 0px 0px 0px #000;
            border: 1px solid #1da1f2;
            height: 18px;
            width: 18px;
            border-radius: 25px;
            background: #a1d0ff;
            cursor: pointer;
        }

        /*---------------------------*/

        .filter-widget {
            margin-bottom: 45px;
        }

        .filter-widget .fw-title {
            color: #252525;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 26px;
        }


        .filter-widget .fw-size-choose .sc-item {
            display: inline-block;
            margin-right: 5px;
        }

        .filter-widget .fw-size-choose .sc-item:last-child {
            margin-right: 0;
        }

        .filter-widget .fw-size-choose .sc-item input {
            position: absolute;
            visibility: hidden;
        }

        .filter-widget .fw-size-choose .sc-item label {
            font-size: 16px;
            color: #252525;
            font-weight: 700;
            height: 40px;
            width: 47px;
            border: 1px solid #3C7A72;
            text-align: center;
            line-height: 40px;
            text-transform: uppercase;
            cursor: pointer;
        }

        .filter-widget .fw-size-choose .sc-item label.active {
            background: #252525;
            color: #ffffff;
        }

        .filter-widget a {
            display: inline-block;
            font-size: 16px;
            color: #636363;
            padding: 5px 15px;
            border: 1px solid #ebebeb;
            margin-right: 5px;
            margin-bottom: 9px;
            border-radius: 2px;
        }

        /*-------------------------------*/


        .filter-widgett {
            margin-bottom: 45px;
        }

        .filter-widgett .fw-titlee {
            color: #252525;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 26px;
        }


        .filter-widgett .fw-size-choosee .sc-itemm {
            display: inline-block;
            margin-right: 5px;
        }

        .filter-widgett .fw-size-choosee .sc-itemm:last-child {
            margin-right: 0;
        }

        .filter-widgett .fw-size-choosee .sc-itemm input {
            position: absolute;
            visibility: hidden;
        }

        .filter-widgett .fw-size-choosee .sc-itemm label {
            font-size: 16px;
            color: #252525;
            font-weight: 700;
            height: 40px;
            display: inline;
            border: 1px solid #3C7A72;
            text-align: center;
            line-height: 40px;
            text-transform: uppercase;
            cursor: pointer;
        }

        .filter-widgett .fw-size-choosee .sc-itemm label.active {
            background: #252525;
            color: #ffffff;
        }

        .filter-widgett a {
            display: inline-block;
            font-size: 16px;
            color: #636363;
            padding: 5px 15px;
            border: 1px solid #ebebeb;
            margin-right: 5px;
            margin-bottom: 9px;
            border-radius: 2px;
        }


        /*==================== 
	Footer 
====================== */

        /* Main Footer */
        footer .main-footer {
            padding: 20px 0;
            background: #252525;
        }

        footer ul {
            padding-left: 0;
            list-style: none;
        }

        /* Copy Right Footer */
        .footer-copyright {
            background: #222;
            padding: 5px 0;
        }

        .footer-copyright .logo {
            display: inherit;
        }

        .footer-copyright nav {
            float: right;
            margin-top: 5px;
        }

        .footer-copyright nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .footer-copyright nav ul li {
            border-left: 1px solid #505050;
            display: inline-block;
            line-height: 12px;
            margin: 0;
            padding: 0 8px;
        }

        .footer-copyright nav ul li a {
            color: #969696;
        }

        .footer-copyright nav ul li:first-child {
            border: medium none;
            padding-left: 0;
        }

        .footer-copyright p {
            color: #969696;
            margin: 2px 0 0;
        }

        /* Footer Top */
        .footer-top {
            background: #252525;
            padding-bottom: 30px;
            margin-bottom: 30px;
            border-bottom: 3px solid #222;
        }

        /* Footer transparent */
        footer.transparent .footer-top,
        footer.transparent .main-footer {
            background: transparent;
        }

        footer.transparent .footer-copyright {
            background: none repeat scroll 0 0 rgba(0, 0, 0, 0.3);
        }

        /* Footer light */
        footer.light .footer-top {
            background: #f9f9f9;
        }

        footer.light .main-footer {
            background: #f9f9f9;
        }

        footer.light .footer-copyright {
            background: none repeat scroll 0 0 rgba(255, 255, 255, 0.3);
        }

        /* Footer 4 */
        .footer- .logo {
            display: inline-block;
        }

        /*==================== 
	Widgets 
====================== */
        .widget {
            padding: 20px;
            margin-bottom: 40px;
        }

        .widget.widget-last {
            margin-bottom: 0px;
        }

        .widget.no-box {
            padding: 0;
            background-color: transparent;
            margin-bottom: 40px;
            box-shadow: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            -ms-box-shadow: none;
            -o-box-shadow: none;
        }

        .widget.subscribe p {
            margin-bottom: 18px;
        }

        .widget li a {
            color: #ff8d1e;
        }

        .widget li a:hover {
            color: #4b92dc;
        }

        .widget-title {
            margin-bottom: 20px;
        }

        .widget-title span {
            background: #839FAD none repeat scroll 0 0;
            display: block;
            height: 1px;
            margin-top: 25px;
            position: relative;
            width: 20%;
        }

        .widget-title span::after {
            background: inherit;
            content: "";
            height: inherit;
            position: absolute;
            top: -4px;
            width: 50%;
        }

        .widget-title.text-center span,
        .widget-title.text-center span::after {
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
        }

        .widget .badge {
            float: right;
            background: #7f7f7f;
        }

        .typo-light h1,
        .typo-light h2,
        .typo-light h3,
        .typo-light h4,
        .typo-light h5,
        .typo-light h6,
        .typo-light p,
        .typo-light div,
        .typo-light span,
        .typo-light small {
            color: #fff;
        }

        ul.social-footer2 {
            margin: 0;
            padding: 0;
            width: auto;
        }

        ul.social-footer2 li {
            display: inline-block;
            padding: 0;
        }

        ul.social-footer2 li a:hover {
            background-color: #ff8d1e;
        }

        ul.social-footer2 li a {
            display: block;
            height: 30px;
            width: 30px;
            text-align: center;
        }

        .btn {
            background-color: #ff8d1e;
            color: #fff;
        }

        .btn:hover,
        .btn:focus,
        .btn.active {
            background: #4b92dc;
            color: #fff;
            -webkit-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            -o-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            -webkit-transition: all 250ms ease-in-out 0s;
            -moz-transition: all 250ms ease-in-out 0s;
            -ms-transition: all 250ms ease-in-out 0s;
            -o-transition: all 250ms ease-in-out 0s;
            transition: all 250ms ease-in-out 0s;

        }

    </style>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
</head>

<body>

    <?php 
 require_once('header.php');
?>

    <div style="background-color:#DBF1FF;margin-top:2em">
      
        <div class="container">
            <div class="col-lg-12">
                <div class="panel panel-default">

                    <div class="panel-heading" style="background-color:#3C7A72">
                        <h1 class="text-center" style="color:#DBF1FF">Login</h1>
                        <h3 class="text-center">Already Our Seller</h3>
                        <a href="blogin.php"><h3 class="text-center">Switch To Buyer</h3></a>
                        <p class="text-center" style="color:#DBF1FF">Welcome to the Createzze store,We inform you to become a<a href="sregister.php">Seller</a> first if you are a new members.</p>
                    </div>


                    <div class="panel-body">
                        <br /><br />
                        <form method="post" enctype="multipart/form-data">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><label class="pull-right">Email</label></div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                <input type="text" class="form-control" required="required" name="email" />
                            </div>
                            <div class="col-lg-2"></div>
                            <br /><br /><br />
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><label class="pull-right">Password</label></div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                <input type="password" required="required" class="form-control" name="password1" />
                            </div>
                            <div class="col-lg-2"></div>


                            <br /><br />
                            <div class="col-lg-12">
                                <h5 class="text-center"><a href="#">Forgot Password?</a></h5><br />
                                <center><button style="background-color:#1ABC9C" class="btn" name="login"><span class="fa fa-sign-in"></span> Log in</button></center><br />
                                <h3 class="text-center"><a href="sregister.php">New Member? Register Here</a></h3>
                            </div>


                        </form>
                    </div>
                </div>

            </div>

        </div>


    </div>

    <?php 
 require_once('footer.php');
?>
    <script>
        $('#top-header').remove();
        $('#sidebarCollapse').remove();
        $('.header-ctn').remove();
        $('.active-cyan-4').remove();
        $('.main-logo-header').css('width','100%');
        $('.main-logo-header').css('text-align','center');
        $('.main-logo-header').css('float','none');
        $('.header-logo').css('float','none');
        $('.header-logo a').attr('href','selleraccount.php');
        $('nav').remove();

    </script>
</body>

</html>
<?php
require_once('connection.php');

if(isset($_POST['login']))
{
 $ema=$_POST['email'];
 $pass=$_POST['password1'];

 $sql="select * from seller where  Email='$ema' and Password='$pass'";
$res=$conn->query($sql);
	if($res->num_rows>0)
	{
	while($row=$res->fetch_assoc())
	{
		
		$_SESSION['snam']=$row['Name'];		
		$_SESSION['sema']=$row['Email'];
		$_SESSION['spass']=$row['Password'];
		$_SESSION['sessionType']='seller';
       
		
		
		echo "<script>alert('You are Login!')</script>";
		
		
		
		echo "<script>window.location.href='seller.php'</script>";
		
	}
	
	}else
	{
		echo "<script>alert('Invalid Email & Password')</script>";
	}
}
}
?>
