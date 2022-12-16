<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CreateEzze</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
	
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
	<link type="text/css" rel="stylesheet" href="css/styleee.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
  	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
	
 <link rel="stylesheet" href="jquery.3.1.5.mCustomScrollbar.css">


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
  border-radius:50px;
  text-align:center;
  
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
	display:inline;
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
	display:inline-block;
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
   <script src="js/function.js"></script>
   
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
<?php 
	require_once('header.php');
?>

    <div style="background-color:#DBF1FF;">
  <div class="container" style="border-bottom:0.8px solid #CCC; padding:15px;">

<a href="index.php" style="color:#3C7A72">Home</a> <span class="fa fa-arrow-right"></span><a href="index.php"> Men's wears</a> <span class="fa fa-arrow-right"></span><a href="tshirts.php"> Bands</a>

</div>

        
	 <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                
                    
                    
                    <div style="margin-bottom:30px;"> <h2> Price</h2>
                  
                    <div class="price-slider">
    <input type="number" value="50000"  min="0" max="120000"/> -
    <input type="number" value="50000" min="0" max="120000"/>
  <input value="25000" min="0" max="120000" step="500" type="range"/>
  <input value="50000" min="0" max="120000" step="500" type="range"/>
  <svg width="100%" height="24">
    <line x1="4" y1="0" x2="300" y2="0" stroke="#212121" stroke-width="12" stroke-dasharray="1 28"></line>
  </svg>
</div></div>
 

                     <div class="filter-widget">
                        <h4 class="fw-title">Size</h4>
                        <div class="fw-size-choose">
                            <div class="sc-item">
                                <input type="radio" id="s-size">
                                <label for="s-size">s</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="m-size">
                                <label for="m-size">m</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="l-size">
                                <label for="l-size">l</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="xs-size">
                                <label for="xs-size">xs</label>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                     <div class="filter-widgett">
                        <h4 class="fw-titlee">Fabric</h4>
                        <div class="fw-size-choosee">
                            <div class="sc-itemm">
                                <input type="radio" id="s-size">
                                <label for="s-size">Cotton</label>
                            </div>
                            <div class="sc-itemm">
                                <input type="radio" id="m-size">
                                <label for="m-size">Organic</label>
                            </div>
                            <div class="sc-itemm">
                                <input type="radio" id="l-size">
                                <label for="l-size">Polyester</label>
                            </div>
                            <div class="sc-itemm">
                                <input type="radio" id="xs-size">
                                <label for="xs-size">Sweat Wicking</label>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    </div>
                    
                    <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">
                                <p>Show 01- 09 Of 36 Product</p>
                            </div>
                        </div>
                    </div>
                    
                    
                     <div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                             <div class="single-product">
            <div class="product-img image-box" >
              <img class="img-fluid w-100" src="img/1.jpeg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="fa fa-eye icon"></i>
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
                    
                    
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
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





<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
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






<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
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






<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
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






<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
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






<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
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







<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
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







<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
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
 <?php 
	require_once('footer.php');
?>
    </body>
</html>