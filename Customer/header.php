<?php
require_once ('connection.php');
require_once ('function.php');

?>
<nav id="sidebar">
    <div id="dismiss">
        <i class="fa fa-arrow-left"></i>
    </div>

    <div class="sidebar-header">
        <h3 style="font-style:italic; color:#DBF1FF ;font-family:cursive"><img src="img/c392209f7c5896001afe39b1c672f08e.png">CreateEzee</h3>
    </div>

    <ul class="list-unstyled components">
        <p>Categories</p>
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home <i class="fa fa-plus" style="font-size:11px"></i></a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="#">Home 1</a>
                </li>
                <li>
                    <a href="#">Home 2</a>
                </li>
                <li>
                    <a href="#">Home 3</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">About</a>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages <i class="fa fa-plus" style="font-size:11px; float:right;"></i></a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Portfolio</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
        <li>
            <a href="#">Portfolio</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
        <li>
            <a href="#">Portfolio</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
        <li>
            <a href="#">Portfolio</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
    </ul>

    <ul class="list-unstyled CTAs">
        <li>
            <a href="../Admin/Tool/Editor.php" class="download">Create Your Own Design</a>
        </li>
        <li>
            <a href="#" class="article">Go to the community of designers</a>
        </li>
    </ul>
</nav>
<div class="overlayy"></div>


<div style="background-color:#eee;">
    <div id="top-header">
        <div class="container">

            <a href="#"><button style="background-color:#3C7A72; color:#FFF" class="btn welcome-btn">WELCOME: GUEST</button> Shopping Cart Total Items <?php items(); ?></a>

            <ul class="header-links pull-right">
                <li>
                    <div class="dropdownn switch-to-seller"><a style="cursor:pointer">Switch to Seller</a>
                        &nbsp;
                    </div>


                    <div class="dropdownn user-logged-in"><a href="myaccount.php" class="dropdownn hello" data-target="#myModal"><i class="fa fa-user-o"></i></a>
                        &nbsp;<div class="dropdownn-content"><a href="myaccount.php"><i class="fa                    fa-user-circle" aria-hidden="true"></i> My Profile</a>
                            <a href="logout.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
                        </div>
                    </div>
                    <div class="dropdownn account" data-toggle="modal" data-target="#myModal"><i class="fa fa-user-o"></i><a href="blogin.php">Account</a>
                        <div class="dropdownn-content"><a href="blogin.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>
                            <a href="bregister.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="header">
        <div class="container">

            <div class="row">
                <div class="col-md-1">
                    <a href="#" id="sidebarCollapse"> <i class="fa fa-bars" style="color:#FFF; font-size:30px; margin-top:10px;"></i>
                    </a>
                </div>
                <div class="col-md-3 main-logo-header">
                    <div class="header-logo">
                        <a href="index.php">
                            <h3 style="font-style:italic; color:#DBF1FF ;font-family:cursive; font-size:30px; margin-top:5px; text-transform:initial;"><img src="img/c392209f7c5896001afe39b1c672f08e.png">CreateEzee</h3>
                        </a>
                    </div>
                </div>
                <div class="col-md-5" style="margin-top:10px;">
                    <div class="active-cyan-4 mb-4">
                        <input class="form-control" type="text" placeholder="Search for products or designs" aria-label="Search">
                    </div>
                </div>
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <div><a href="../Admin/Tool/Editor.php"><i class="fa fa-cut"></i><span>Create</span></a>
                        </div>
                        <div><a href="shoppingcart.php"><i class="fa fa-shopping-cart"></i><span>Shopping Cart</span>
                                <div class="badge qty"><?php items(); ?>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navv">
        <div class="container">

            <ul class="main-nav nav navbar-nav">

                <li class="active"><a href="index.php">Home</a></li>
                <li class="dropdown"><a href="tshirts.php">Mens Wears</a>
                    <div class="dropdown-content">
                        <a href="tshirts.php">Tshirts</a>
                        <a href="trouser.php">Trousers</a>
                        <a href="shoes.php">Shoes</a>
                        <a href="bands.php">Bands</a>

                    </div>
                </li>
                <li class="dropdown"><a href="wtshirts.php">Ladies Wears</a>
                    <div class="dropdown-content">
                        <a href="wtshirts.php">Wshirts</a>
                        <a href="leggings.php">Leggings</a>
                        <a href="handbags.php">Hand Bags</a>

                    </div>
                </li>
                <li class="dropdown"><a href="boys.php">Kids Wear</a>
                    <div class="dropdown-content">
                        <a href="boys.php">Boy's</a>
                        <a href="girls.php">Girl's</a>


                    </div>
                </li>


                <li class="dropdown"><a href="shirts.php">Gym wears</a>
                    <div class="dropdown-content">
                        <a href="shirts.php">Shirts</a>
                        <a href="shorts.php">Shorts</a>


                    </div>
                </li>

                <li><a href="homedecor.php">Home Decor</a></li>
                <li class="dropdown"><a href="funny.php">Mobile Cases</a>
                    <div class="dropdown-content">
                        <a href="funny.php">Funny Cases</a>
                        <a href="decent.php">Decent Cases</a>


                    </div>
                </li>
                <li><a href="#">Community</a></li>
                <li><a href="#">Contact Us</a></li>

            </ul>

        </div>
    </nav>
