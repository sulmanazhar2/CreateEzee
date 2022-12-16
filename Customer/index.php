<?php
session_start();
$logged = '';
if(isset($_SESSION['sema']))
{
    ?><script>window.location.href = "slogin.php"</script>  <?php
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>CreateEzze</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/styleee.css" />
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
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/actions.js"></script>
    <script src="js/sweetalert.min"></script>
    <script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
    <script src="jquery-3.3.1.slim.min.js"></script>
    <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script src="jquery3.1.5.mCustomScrollbar.concat.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlayy').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlayy').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
        $(document).ready(function() {

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
                    }, {
                        breakpoint: 720,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });

        });
    </script>
</head>


<body>

    <?php
require_once('header.php');

?>
    <div class="carousel fade-carousel slide carousel-fade" data-ride="carousel" data-interval="5000" id="bs-carousel">
        <!-- Overlay -->
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#bs-carousel" data-slide-to="1"></li>
            <li data-target="#bs-carousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slides active carousel-item">
                <div class="slide-1">
                    <div class="overlay"></div>
                </div>
            </div>
            <div class="item slides carousel-item">
                <div class="slide-2">
                    <div class="overlay"></div>
                </div>
            </div>
            <div class="item slides carousel-item">
                <div class="slide-3">
                    <div class="overlay"></div>
                </div>
            </div>
            <div class="hero">
                <hgroup>

                    <h1>We are amazing</h1>
                    <h3>Get start your shopping from here</h3>
                </hgroup>
                <button class="btn btn-hero btn-lg" role="button">SHOP NOW</button>

            </div>
        </div>
    </div>
    
    <div class="container-fluid" style=" background-color:#DBF1FF;">
        <section class="feature_product_area section_gap_bottom_custom">

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2><span>Today's Picks</span></h2>
                        <p>Bring called seed first of third give itself now ment</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
require_once('connection.php');

$sql="select * from product order by rand() LIMIT 8 ";

$result=$conn -> query ($sql);
while ($row = $result -> fetch_assoc())
{
	$id=$row['ID'];
	$title=$row['Pr_name'];
	
	$manu=$row['Manufacturer'];
	
	$cate=$row['Category'];
	$pic1=$row['Image1'];
    $pic2=$row['Image2'];
	
	$price=$row['Price'];
	$sprice=$row['Sale_Price'];
	
	$desc=$row['Description'];

	$label=$row['Label'];
	

?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="single-product">
                        <div class="product-img image-box">
                            <img class="img-fluid w-100" src="../Admin/products/<?php echo $pic1?>" alt="" />
                            <div class="p_icon">
                                <a href="view.php?id=<?php echo $id; ?>">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-heart"></i>
                                </a>
                                <a href="shoppingcart.php">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4><?php echo $title?></h4>
                                <p class="pull-right">By <?php echo $manu?></p>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">$<?php echo $sprice?></span>
                                <del>$<?php echo $price?></del>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>
            </div>
        </section>
    </div>

    <div class="background-div">

        <p class="ban1">CreateEzze</p>
        <h1 class="ban2"><span class="ban3">Show</span> Your <br />Personal <span class="ban3">Style</span></h1>

        <a class="btn btn-default ban4" href="#">Create Now</a>

    </div>

    <div class="container-fluid" style=" background-color:#DBF1FF;">

        <div class="main_title">
            <h2><span>Top Picks</span></h2>
            <p>Bring called seed first of third give itself now ment</p>
        </div>


        <section class="regular slider">

            <div class="single-productt">
                <div class="product-imgg image-boxx">
                    <img class="img-fluidd w-100" src="products/cup_front.png" alt="" />
                    <div class="p_iconn">

                        <a href="#">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
                <div class="product-btmm">
                    <a href="#" class="d-blockk">
                        <h4>Latest men’s sneaker</h4>
                    </a>
                    <div class="mt-33">
                        <span class="mr-44">$25.00</span>
                        <del>$35.00</del>
                    </div>
                </div>
            </div>

            <div class="single-productt">

                <div class="product-imgg   image-boxx">
                    <div class="fix crr cr-topp cr-rightt cr-stickyy cr-bluee">50% off
                    </div>
                    <img class="img-fluidd w-1000" src="products/cup_front.png" alt="" />
                    <div class="p_iconn">

                        <a href="#">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
                <div class="product-btmm">
                    <a href="#" class="d-blockk">
                        <h4>Red women purses</h4>
                    </a>
                    <div class="mt-33">
                        <span class="mr-44">$25.00</span>
                        <del>$35.00</del>
                    </div>
                </div>
            </div>

            <div class="single-productt">
                <div class="product-imgg image-boxx">
                    <img class="img-fluidd w-1000" src="img/product/feature-product/f-p-2.jpg" alt="" />
                    <div class="p_iconn">

                        <a href="#">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
                <div class="product-btmm">
                    <a href="#" class="d-blockk">
                        <h4>Red women purses</h4>
                    </a>
                    <div class="mt-33">
                        <span class="mr-44">$25.00</span>
                        <del>$35.00</del>
                    </div>
                </div>
            </div>

            <div class="single-productt">
                <div class="product-imgg image-boxx">
                    <img class="img-fluidd w-1000" src="img/product/feature-product/f-p-2.jpg" alt="" />
                    <div class="p_iconn">

                        <a href="#">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
                <div class="product-btmm">
                    <a href="#" class="d-blockk">
                        <h4>Red women purses</h4>
                    </a>
                    <div class="mt-33">
                        <span class="mr-44">$25.00</span>
                        <del>$35.00</del>
                    </div>
                </div>

            </div>

            <div class="single-productt">
                <div class="product-imgg image-boxx">

                    <img class="img-fluidd w-1000" src="img/product/feature-product/f-p-2.jpg" alt="" />
                    <div class="p_iconn">

                        <a href="#">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
                <div class="product-btmm">
                    <a href="#" class="d-blockk">
                        <h4>Red women purses</h4>
                    </a>
                    <div class="mt-33">
                        <span class="mr-44">$25.00</span>
                        <del>$35.00</del>
                    </div>
                </div>
            </div>

            <div class="single-productt">
                <div class="product-imgg image-boxx">
                    <img class="img-fluidd w-1000" src="img/product/feature-product/f-p-2.jpg" alt="" />
                    <div class="p_iconn">

                        <a href="#">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
                <div class="product-btmm">
                    <a href="#" class="d-blockk">
                        <h4>Red women purses</h4>
                    </a>
                    <div class="mt-33">
                        <span class="mr-44">$25.00</span>
                        <del>$35.00</del>
                    </div>
                </div>
            </div>

            <div class="single-productt">
                <div class="product-imgg image-boxx">
                    <img class="img-fluidd w-1000" src="img/product/feature-product/f-p-2.jpg" alt="" />
                    <div class="p_iconn">

                        <a href="#">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
                <div class="product-btmm">
                    <a href="#" class="d-blockk">
                        <h4>Red women purses</h4>
                    </a>
                    <div class="mt-33">
                        <span class="mr-44">$25.00</span>
                        <del>$35.00</del>
                    </div>
                </div>

            </div>

            <div class="single-productt">
                <div class="product-imgg image-boxx">
                    <img class="img-fluidd w-1000" src="img/product/feature-product/f-p-3.jpg" alt="" />
                    <div class="p_iconn">

                        <a href="#">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
                <div class="product-btmm">
                    <a href="#" class="d-blockk">
                        <h4>Men stylist Watch</h4>
                    </a>
                    <div class="mt-33">
                        <span class="mr-44">$25.00</span>
                        <del>$35.00</del>
                    </div>
                </div>
            </div>


        </section>
    </div>

    <?php
require_once('footer.php');

?>

</body>

</html>
<?php
if ( !isset( $_SESSION['ema'] ) ) {
    $logged = 'guest';
    
    echo '<script>$(".user-logged-in").css("display", "none")</script>';
} else {
    $name = $_SESSION['nam'];
    $email = $_SESSION['ema'];
    $logged = $_SESSION['sessionType'];
    if($logged == 'customer')
    {
        echo '<script>$(".account").css("display", "none")</script>';
        echo '<script>$(".welcome-btn").text("Welcome: ' . $name . '")</script>';
        echo '<script>$(".user-logged-in:first").append("Hi ' . $name . '");</script>';
    }
}
?>