<?php
session_start();
if(isset($_SESSION['sema']))
{
    ?><script>window.location.href = "slogin.php"</script>  <?php
}
if(isset($_SESSION['ema']))
{
    echo "<script>window.location.href='index.php'</script>";
}
else{
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sign Up</title>
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
    <script src="js/function.js"></script>

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
    <div style="background-color:#DBF1FF;">
        <div class="container" style="border-bottom:0.8px solid #CCC; padding:15px;">

            <a href="index.php" style="color:#3C7A72">Home</a> <span class="fa fa-arrow-right"></span><a href="#"> Register</a>

        </div>
        <br />
        <div class="container">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#3C7A72">
                        <h1 class="text-center" style="color:#DBF1FF">Register a New Account </h1>
                        <p class="text-center" style="color:#DBF1FF">Welcome to the Createzze store, If already our customer then go to <a href="blogin.php">sign-in</a> page.</p>
                    </div>




                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>First Name</label>
                                    <input class="form-control" type="text" required="required" name="fnam">
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" required="required" name="lnam">
                                    <br />
                                </div>

                                <div class="col-md-12">
                                    <label>Email</label>
                                    <input class="form-control" type="text" required="required" name="ema">
                                    <br />
                                </div>
                                <div class="col-md-12">
                                    <label>Password</label>
                                    <input class="form-control" type="password" required="required" name="pass">
                                    <br />
                                </div>
                                <div class="col-md-12">
                                    <label>Contact Number</label>
                                    <input class="form-control" type="text" required="required" name="num">
                                    <br />
                                </div>
                                <div class="col-md-6">
                                    <label>City</label>
                                    <input class="form-control" type="text" required="required" name="cit">
                                </div>
                                <div class="col-md-6">
                                    <label>Country</label>
                                    <select class="form-control" required="required" name="coun">
                                        <option value="">Country...</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AG">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AG">Antigua &amp; Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AA">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BL">Bonaire</option>
                                        <option value="BA">Bosnia &amp; Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BR">Brazil</option>
                                        <option value="BC">British Indian Ocean Ter</option>
                                        <option value="BN">Brunei</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="IC">Canary Islands</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CD">Channel Islands</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CI">Christmas Island</option>
                                        <option value="CS">Cocos Island</option>
                                        <option value="CO">Colombia</option>
                                        <option value="CC">Comoros</option>
                                        <option value="CG">Congo</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CT">Cote D'Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CB">Curacao</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="TM">East Timor</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FA">Falkland Islands</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="FS">French Southern Ter</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GB">Great Britain</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HW">Hawaii</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IA">Iran</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IR">Ireland</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="NK">Korea North</option>
                                        <option value="KS">Korea South</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Laos</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macau</option>
                                        <option value="MK">Macedonia</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="ME">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="MI">Midway Islands</option>
                                        <option value="MD">Moldova</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Nambia</option>
                                        <option value="NU">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="AN">Netherland Antilles</option>
                                        <option value="NL">Netherlands (Holland, Europe)</option>
                                        <option value="NV">Nevis</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NW">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau Island</option>
                                        <option value="PS">Palestine</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PO">Pitcairn Island</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="ME">Republic of Montenegro</option>
                                        <option value="RS">Republic of Serbia</option>
                                        <option value="RE">Reunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russia</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="NT">St Barthelemy</option>
                                        <option value="EU">St Eustatius</option>
                                        <option value="HE">St Helena</option>
                                        <option value="KN">St Kitts-Nevis</option>
                                        <option value="LC">St Lucia</option>
                                        <option value="MB">St Maarten</option>
                                        <option value="PM">St Pierre &amp; Miquelon</option>
                                        <option value="VC">St Vincent &amp; Grenadines</option>
                                        <option value="SP">Saipan</option>
                                        <option value="SO">Samoa</option>
                                        <option value="AS">Samoa American</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">Sao Tome &amp; Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="OI">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syria</option>
                                        <option value="TA">Tahiti</option>
                                        <option value="TW">Taiwan</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad &amp; Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TU">Turkmenistan</option>
                                        <option value="TC">Turks &amp; Caicos Is</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States of America</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VS">Vatican City State</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Vietnam</option>
                                        <option value="VB">Virgin Islands (Brit)</option>
                                        <option value="VA">Virgin Islands (USA)</option>
                                        <option value="WK">Wake Island</option>
                                        <option value="WF">Wallis &amp; Futana Is</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZR">Zaire</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                    <br />
                                </div>


                                <div class="col-md-6">
                                    <label>Profile Image</label>
                                    <input type="file" class="form-control" required="required" name="pic" />
                                </div>
                                <div class="col-md-6">
                                    <label>Gender</label>
                                    <select class="form-control" required="required" name="gen">
                                        <option value="">Gender...</option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>

                                    </select>
                                    <br />
                                </div>

                            </div>

                            <center><a href="#"><button style="background-color:#1ABC9C" class="btn" name="insert"><span class="fa fa-sign-in"></span> Register</button></a></center><br />


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
        $('.user-logged-in').remove();

    </script>
</body>

</html>

<?php
require_once('connection.php');
if(isset ($_POST['insert']))
{
	$name=$_POST['fnam'];
	$lname=$_POST['lnam'];
	$email=$_POST['ema'];
	$password=$_POST['pass'];
	$contact=$_POST['num'];
	$city=$_POST['cit'];
	$country=$_POST['coun'];
	$pic1=$_FILES['pic']['name'];
	$temp=$_FILES['pic']['tmp_name'];
	move_uploaded_file($temp,"customerpic/$pic1");
	$gender=$_POST['gen'];
	
	
	$sql ="insert into customer (Name,LastName,Email,Password,Contact,City,Country,Profile_Pic,Gender) values ('$name','$lname','$email','$password','$contact','$city','$country','$pic1','$gender')";
	
	if($conn -> query($sql))
	{
		echo "<script> alert ('Registered Successfully!!') </script>";
		echo "<script>window.location.href='blogin.php'</script>";
		/*echo "<script> window.open ('Showdata1.php','_self') </script>";*/
	}
	
	else{
		echo $conn -> error;
		echo $sql -> error;
	}
}
}?>
