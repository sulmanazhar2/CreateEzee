<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
<title>My Shop</title>

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
	<link type="text/css" rel="stylesheet" href="css/slick.css"/>
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
	<link type="text/css" rel="stylesheet" href="css/styleee.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="jquery.3.1.5.mCustomScrollbar.css">
           <style>
#more {display: none;
}
	/*==================== 
	Footer 
====================== */

/* Main Footer */
footer .main-footer{	padding: 20px 0;	background: #252525;}
footer ul{	padding-left: 0;	list-style: none;}

/* Copy Right Footer */
.footer-copyright {	background: #222;	padding: 5px 0;}
.footer-copyright .logo {    display: inherit;}
.footer-copyright nav {    float: right;    margin-top: 5px;}
.footer-copyright nav ul {	list-style: none;	margin: 0;	padding: 0;}
.footer-copyright nav ul li {	border-left: 1px solid #505050;	display: inline-block;	line-height: 12px;	margin: 0;	padding: 0 8px;}
.footer-copyright nav ul li a{	color: #969696;}
.footer-copyright nav ul li:first-child {	border: medium none;	padding-left: 0;}
.footer-copyright p {	color: #969696;	margin: 2px 0 0;}

/* Footer Top */
.footer-top{	background: #252525;	padding-bottom: 30px;	margin-bottom: 30px;	border-bottom: 3px solid #222;}

/* Footer transparent */
footer.transparent .footer-top, footer.transparent .main-footer{	background: transparent;}
footer.transparent .footer-copyright{	background: none repeat scroll 0 0 rgba(0, 0, 0, 0.3) ;}

/* Footer light */
footer.light .footer-top{	background: #f9f9f9;}
footer.light .main-footer{	background: #f9f9f9;}
footer.light .footer-copyright{	background: none repeat scroll 0 0 rgba(255, 255, 255, 0.3) ;}

/* Footer 4 */
.footer- .logo {    display: inline-block;}

/*==================== 
	Widgets 
====================== */
.widget{	padding: 20px;	margin-bottom: 40px;}
.widget.widget-last{	margin-bottom: 0px;}
.widget.no-box{	padding: 0;	background-color: transparent;	margin-bottom: 40px;
	box-shadow: none; -webkit-box-shadow: none; -moz-box-shadow: none; -ms-box-shadow: none; -o-box-shadow: none;}
.widget.subscribe p{	margin-bottom: 18px;}
.widget li a{	color: #ff8d1e;}
.widget li a:hover{	color: #4b92dc;}
.widget-title {margin-bottom: 20px;}
.widget-title span {background: #839FAD none repeat scroll 0 0;display: block; height: 1px;margin-top: 25px;position: relative;width: 20%;}
.widget-title span::after {background: inherit;content: "";height: inherit;    position: absolute;top: -4px;width: 50%;}
.widget-title.text-center span,.widget-title.text-center span::after {margin-left: auto;margin-right:auto;left: 0;right: 0;}
.widget .badge{	float: right;	background: #7f7f7f;}

.typo-light h1, 
.typo-light h2, 
.typo-light h3, 
.typo-light h4, 
.typo-light h5, 
.typo-light h6,
.typo-light p,
.typo-light div,
.typo-light span,
.typo-light small{	color: #fff;}

ul.social-footer2 {	margin: 0;padding: 0;	width: auto;}
ul.social-footer2 li {display: inline-block;padding: 0;}
ul.social-footer2 li a:hover {background-color:#ff8d1e;}
ul.social-footer2 li a {display: block;	height:30px;width: 30px;text-align: center;}
.btn{background-color: #ff8d1e; color:#fff;}
.btn:hover, .btn:focus, .btn.active {background: #4b92dc;color: #fff;
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
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/actions.js"></script>
	<script src="js/sweetalert.min"></script>
	<script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
     <script src="jquery-3.3.1.slim.min.js" ></script>
      <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
   
   
    <script src="jquery3.1.5.mCustomScrollbar.concat.js"></script>
   



     <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlayy').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlayy').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
		$(document).ready( function() {
      
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
		 autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: true,
		responsive: [{
                breakpoint: 928,
                settings: {
                    slidesToShow: 3,
					 slidesToScroll: 1,
                }
            },  {
                breakpoint: 720,
                settings: {
                    slidesToShow:2
				}
            },
				{
                breakpoint: 520,
                settings: {
                    slidesToShow:1
                }
            }]
      });
     
    });
    </script>
   
</head>

<body>
<?php  require_once('header2.php'); ?>
<section class="seller-shop">
<div class="seller-bg">
<div class="container">
   	<div class="sellerimg"><img src="img/Screenshot (148).png" alt="Seller Image" /></div>
       <div class="seller-name">
         <a href="seller.php"><h3 style="display:inline; float:left">CreateEzee Apparel</h3></a>
        <h5 class="Trade" style="display:inline;">By CreateEzee</h5>
       
       
        <div class="follow-info">
        <div style="padding-right:45px; border-right:2px solid; border-right-color:#000;"><a href="#"><i class="followers fa fa-users"></i><span>Followers</span> <div class="badge qty">0
                        		</div></a></div>
        
        <div><a href="#"><i class="following fa fa-user"></i><span>Following</span> <div class="badge qty">0
                        		</div></a></div>
        </div>
        
       </div>
</div>
</div>



<div class="seller-nav">

	<div class="seller-subnav">
   
    	<div>
        <ul class="nav nav-tabs">
  			<li class="nav-item">
    		<a class="nav-link" href="seller.php">My Shop</a>
  			</li>
  			<li class="nav-item dropdown">
    		<a class="nav-link" data-toggle="dropdown" href="#products">Products<span class="caret"></span></a>
    		  <ul class="dropdown-menu">
       			 <li><a href="seller-product-1.php">Submenu 1-1</a></li>
       			 <li><a href="seller-product-2.php">Submenu 1-2</a></li>
       			 <li><a href="seller-product-3.php">Submenu 1-3</a></li>                        
      		  </ul>
    		</li>
  			<li class="nav-item active">
    		<a class="nav-link" href="seller-designs.php">Designs</a>
  			</li>
  			<li class="nav-item">
    		<a class="nav-link" href="seller-reviews.php">Reviews</a>
  			</li>
    		<li class="nav-item">
    		<a class="nav-link" href="seller-orders.php">Orders</a>
  			</li>
    		<li class="nav-item">
    		<a class="nav-link" href="seller-analytics.php">Analytics</a>
  			</li>
		</ul>
        
        </div>
    </div>
</div>






<!-- Start of Designs tab -->
    
<div id="designs">
   <div style="background-color:#FFF;">  
	 <div class="container">
     <h3>Designs</h3>
            <div class="row">

  <div class="products col-lg-12 col col-md-12 col-sm-12 col-xs-12">
	
    
    
    
 <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="single-product">
            <div class="product-img image-box" >
              <img class="img-fluid w-100" src="img/kP2eX1588217885.jpg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="fa fa-camera"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block" style="text-align:center; alignment-adjust:central;">
                <h4 style="margin:20px 0px 20px 0px;">Add Design</h4>
              </a>
              
            </div>
          </div>      
        </div>  
       
    
    
    
    
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
          <div class="single-product">
            <div class="product-img image-box" >
              <img class="img-fluid w-100" src="img/1.jpeg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="fa fa-eye"></i>
                </a>
                <a href="#">
                  <i class="fa fa-heart"></i>
                </a>
                <a href="#">
                  <i class="fa fa-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>Latest men’s sneaker</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">$25.00</span>
                <del>$35.00</del>
              </div>
            </div>
          </div>
        </div>
        
	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
          <div class="single-product">
            <div class="product-img image-box" >
              <img class="img-fluid w-100" src="img/2.jpeg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="fa fa-eye"></i>
                </a>
                <a href="#">
                  <i class="fa fa-heart"></i>
                </a>
                <a href="#">
                  <i class="fa fa-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>Latest men’s sneaker</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">$25.00</span>
                <del>$35.00</del>
              </div>
            </div>
          </div>
        </div>
        
	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
          <div class="single-product">
            <div class="product-img image-box" >
              <img class="img-fluid w-100" src="img/1.jpeg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="fa fa-eye"></i>
                </a>
                <a href="#">
                  <i class="fa fa-heart"></i>
                </a>
                <a href="#">
                  <i class="fa fa-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>Latest men’s sneaker</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">$25.00</span>
                <del>$35.00</del>
              </div>
            </div>
          </div>
        </div>
        
	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
          <div class="single-product">
            <div class="product-img image-box" >
              <img class="img-fluid w-100" src="img/2.jpeg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="fa fa-eye"></i>
                </a>
                <a href="#">
                  <i class="fa fa-heart"></i>
                </a>
                <a href="#">
                  <i class="fa fa-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>Latest men’s sneaker</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">$25.00</span>
                <del>$35.00</del>
              </div>
            </div>
          </div>
        </div>
        
	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
          <div class="single-product">
            <div class="product-img image-box" >
              <img class="img-fluid w-100" src="img/1.jpeg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="fa fa-eye"></i>
                </a>
                <a href="#">
                  <i class="fa fa-heart"></i>
                </a>
                <a href="#">
                  <i class="fa fa-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>Latest men’s sneaker</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">$25.00</span>
                <del>$35.00</del>
              </div>
            </div>
          </div>
        </div>
    
</div>
</div>
</div>
</div>
</div> 
          
          



<?php  require_once('footer.php'); ?>

    
    </body>
</html>
