<?php
session_start();
$loggedIn = '';
$name = $email = $number  = '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CreateEzee Editor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=830">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/3.6.3/fabric.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/customiseControls.min.js"></script>
    <script src="https://kit.fontawesome.com/85f3d549c0.js" crossorigin="anonymous"></script>
    <script src="js/image-picker.min.js"></script>
    <!-- Le styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/image-picker.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="fonts/fonts.css">
    <style type="text/css">
        .vl {
            border-right: 1px solid white;
            height: 40px;
            display: inline-block;
            margin-left: 10px;
            margin-right: 10px;
        }

    </style>

</head>





<body onload="myFunction()">
    <div id="loader"></div>
    <div style="display:none;" id="myDiv" class="animate-bottom">
        <header>
            <nav class="navbar sticky-top navbar-expand-lg navbar-light navbar-offcanvas" id="header">
                <a href="#" class="navbar-brand">
                    <img src="img/c392209f7c5896001afe39b1c672f08e.png" style="margin-top: -12px">
                    <span class="header-text">CreateEzee</span>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color:#292929">
                    <i class="fa fa-bars" aria-hidden="true" style="color:white"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <h5 class="py-2 text-white">Sidebar</h5>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown fileImportExport">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">File</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="    height: auto;">
                                <a class="dropdown-item" href="#" id="canvas2json">Export Project</a>
                                <a class="dropdown-item" href="#" id="json2canvas">Import Project</a>
                                <input id="json2canvasInput" type="file" name="name" style="display: none;" />
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Save in Image
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="    height: auto;">
                                <a class="dropdown-item" href="#" onclick="pngImage()">PNG</a>
                                <a class="dropdown-item" href="#" onclick="jpegImage()">JPEG</a>
                                <a class="dropdown-item" href="#" onclick="print()">PDF</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown view-saved-designs">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                View Saved Designs
                            </a>
                            <div class="dropdown-menu saved-designs-list" aria-labelledby="navbarDropdownMenuLink" style="    height: auto;">

                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="#" id="headerprice">35.55$</a>
                        </li>
                    </ul>
                    <p class="logged-in-text"></p>
                    <button type="button" class="btn btn-dark" id="saveDesignForUsers">Export Design For Users</button>
                    <button type="button" class="btn btn-dark" id="backtoshop">Back to Shop</button>
                    <button type="button" class="btn btn-dark" id="checkout-id">Checkout&nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                    <button type="button" class="btn btn-outline-danger btn-close"> &times Close </button>

                </div>
            </nav>
        </header>

        <div class="tab">
            <button class="tablinks tablinkscustom active" onclick="tabSelect(event, 'product')" id="defaultOpen"><i class="fas fa-tshirt"><br>Product</i></button>
            <button class="tablinks tablinkscustom" onclick="tabSelect(event, 'texttab')"><i class="fas fa-paragraph"><br>Text</i></button>
            <button class="tablinks tablinkscustom" onclick="tabSelect(event, 'imagestab')"><i class="fas fa-images"><br>Images</i></button>
            <button class="tablinks tablinkscustom" onclick="tabSelect(event, 'shapestab')"><i class="far fa-gem"><br>Shapes</i></button>
            <button class="tablinks tablinkscustom" onclick="tabSelect(event, 'drawingtab')"><i class="fa fa-paint-brush"><br>Drawing</i></button>
            <button class="tablinks tablinkscustom layersClick" onclick="tabSelect(event, 'layerstab')"><i class="fas fa-layer-group"><br>Layers</i></button>
            <button class="tablinks tablinkscustom sidebar-collapser" style="display:none"><i class="fa fa-arrow-right" aria-hidden="true" style="display:none"></i><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
        </div>

        <div class="container-fluid h-100">

            <div class="tool-sidebar">
                <div class="tabcontentcontainer">
                    <div id="product" class="tabcontent">
                        <div class="well">

                            <button type="button" class="btn modal-btn" data-toggle="modal" data-target=".bd-example-modal-lg">
                                Change Product
                                <i class="fa fa-exchange" aria-hidden="true"></i>
                            </button>

                            <!-- The Modal -->
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">

                                            <select class="browser-default custom-select" id="tshirttype" style="display:none">
                                                <option value="img/crew_front.png" selected="selected">Short Sleeve Shirts</option>
                                                <option value="img/mens_longsleeve_front.png">Long Sleeve Shirts</option>
                                                <option value="img/mens_hoodie_front.png">Hoodies</option>
                                                <option value="img/mens_tank_front.png">Tank tops</option>
                                                <option value="img/womens_crew_front.png">Women Shirts</option>
                                            </select>

                                            <select class="image-picker show-html">
                                                <option data-img-src="img/crew_front.png" data-img-alt="Page 1" value="1"> Page 1 </option>
                                                <option data-img-src="img/mens_longsleeve_front.png" data-img-alt="Page 2" value="2"> Page 2 </option>
                                                <option data-img-src="img/mens_hoodie_front.png" data-img-alt="Page 3" value="3"> Page 3 </option>
                                                <option data-img-src="img/mens_tank_front.png" data-img-alt="Page 4" value="4"> Page 4 </option>
                                                <option data-img-src="img/womens_crew_front.png" data-img-alt="Page 5" value="5"> Page 5 </option>

                                            </select>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h5 class="productheadings">Product Price:</h5>
                            <p class="productparagraph">&nbsp;&nbsp;&nbsp;&nbsp;0:00$</p><br>
                            <h5 class="productheadings">Product Size Available:</h5>
                            <p class="productparagraph">&nbsp;&nbsp;&nbsp;&nbsp;X XL S</p>
                        </div><br>
                        <div class="well">
                            <label class="tabContentLabel">Product Colors:</label>
                            <ul class="nav color-previewDiv d-flex justify-content-center">
                                <li class="color-preview" title="White" style="background-color:#ffffff;"></li>
                                <li class="color-preview" title="Dark Heather" style="background-color:#616161;"></li>
                                <li class="color-preview" title="Gray" style="background-color:#f0f0f0;"></li>
                                <li class="color-preview" title="Charcoal" style="background-color:#5b5b5b;"></li>
                                <li class="color-preview" title="Black" style="background-color:#222222;"></li>
                                <li class="color-preview" title="Heather Orange" style="background-color:#fc8d74;"></li>
                                <li class="color-preview" title="Heather Dark Chocolate" style="background-color:#432d26;"></li>
                                <li class="color-preview" title="Salmon" style="background-color:#eead91;"></li>
                                <li class="color-preview" title="Chesnut" style="background-color:#806355;"></li>
                                <li class="color-preview" title="Dark Chocolate" style="background-color:#382d21;"></li>
                                <li class="color-preview" title="Citrus Yellow" style="background-color:#faef93;"></li>
                                <li class="color-preview" title="Avocado" style="background-color:#aeba5e;"></li>
                                <li class="color-preview" title="Kiwi" style="background-color:#8aa140;"></li>
                                <li class="color-preview" title="Irish Green" style="background-color:#1f6522;"></li>
                                <li class="color-preview" title="Scrub Green" style="background-color:#13afa2;"></li>
                                <li class="color-preview" title="Teal Ice" style="background-color:#b8d5d7;"></li>
                                <li class="color-preview" title="Heather Sapphire" style="background-color:#15aeda;"></li>
                                <li class="color-preview" title="Sky" style="background-color:#a5def8;"></li>
                                <li class="color-preview" title="Antique Sapphire" style="background-color:#0f77c0;"></li>
                                <li class="color-preview" title="Heather Navy" style="background-color:#3469b7;"></li>
                                <li class="color-preview" title="Cherry Red" style="background-color:#c50404;"></li>
                            </ul><br>
                            <label for="Custom Colors" class="tabContentLabel">Choose a Custom Colors:</label>
                            <input type="color" id="productCustomColor" value="#ffffff">
                        </div>
                    </div>
                    <div id="texttab" class="tabcontent">
                        <div class="well">
                            <div class="input-append">
                                <div class="form-group">
                                    <label for="Adding Text">Enter Text</label>
                                    <input id="text-string" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add Text">
                                    <button id="add-text" class="btn btn-light" title="Add text"><i class="fa fa-share-square" aria-hidden="true"></i></button>
                                    <small id="emailHelp" class="form-text text-muted">For Example: This tool is AWESOME!!</small>
                                </div>

                                <hr>
                            </div>
                            <div class="sample-text">
                                <span class="Ariel" name="Arial">Ariel</span>
                                <span class="Verdana" name="Verdana">Verdana</span>
                                <span class="Georgia" name="georgia">Georgia</span>
                                <span class="Courier" name="Courier">Courier</span>
                                <span class="ComicSansMS" name="Comic Sans MS">Comic Sans</span>
                                <span class="Impact" name="Impact">Impact</span>
                                <span class="Pacifico" name="pacificoregular">Pacifico</span>
                                <span class="Alex Brush" name="alex_brushregular">Alex Brush</span>
                                <span class="Arizona" name="arizoniaregular">Arizona</span>
                                <span class="Baloo-Bhain" name="baloo_bhainaregular">Baloo Bhain</span>
                                <span class="Quicksand" name="big_quicksandregular">Quicksand</span>
                                <span class="Bungee" name="bungeeregular">Bungee</span>
                                <span class="Flavors" name="flavorsregular">Flavors</span>
                                <span class="Fredoka" name="fredoka_oneregular">Fredoka</span>
                                <span class="Monoton" name="monotonregular">Monoton</span>
                                <span class="Oleo-Script" name="oleo_script_swash_capsregular">Oleo Script</span>
                                <span class="Oswald" name="oswaldregular">Oswald</span>
                                <span class="Petit-Formal" name="petit_formal_scriptregular">Petit</span>
                                <span class="Righteous" name="righteousregular">Righteous</span>
                                <span class="Spirax" name="spiraxregula">Spiraz</span>

                            </div>

                        </div>
                    </div>
                    <div id="imagestab" class="tabcontent">
                        <div>
                            <div class="dragdropimage">
                                <input type="file" name="file" id="file" class="file">
                                <div class="upload-area" id="uploadfile">
                                    <img class="uploadSVG" src="icons/vectorpaint.png" loading="lazy">
                                    <h1>Click or drop image here</h1>
                                </div>
                            </div>
                            <hr>

                            <div class="btn-group imagesBtnGroup" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-secondary active createZee-images">CreateEzee Images</button>
                                <button type="button" class="btn btn-secondary your-images">Your Images</button>
                            </div>

                            <hr>
                            <div id="avatarlist" style="display:block">
                            </div>
                            <div id="yourImagesList" style="display:none">
                            </div>
                        </div>
                    </div>
                    <div id="shapestab" class="tabcontent">
                        <div class="svg-shapesDiv">
                            <h3>Select any shape</h3>

                        </div>
                    </div>
                    <div id="drawingtab" class="tabcontent">
                        <br>
                        <div id="drawing-mode-options" style="display: none;">
                            <h2>Free Drawing Mode</h2>
                            <div class="brushmode">
                                <label for="drawing-mode-selector">Brush Mode</label>
                                <select id="drawing-mode-selector" class="form-control">
                                    <option>Pencil</option>
                                    <option>Circle</option>
                                    <option>Spray</option>
                                    <option>Pattern</option>
                                    <option>hline</option>
                                    <option>vline</option>
                                    <option>square</option>
                                    <option>diamond</option>
                                    <option>texture</option>
                                </select>
                            </div>
                            <div class="linewidth">
                                <label for="drawing-line-width">Line width:</label>
                                <input type="range" value="30" min="0" max="150" id="drawing-line-width"><br>
                            </div>
                            <div class="linecolor">

                                <label for="drawing-color">Line color:</label>
                                <input type="color" value="#005E7A" id="drawing-color"><br>
                            </div>
                            <div class="shadowcolor">

                                <label for="drawing-shadow-color">Shadow color:</label>
                                <input type="color" value="#005E7A" id="drawing-shadow-color"><br>
                            </div>
                            <div class="shadowwidth">
                                <label for="drawing-shadow-width">Shadow width:</label>
                                <input type="range" value="0" min="0" max="50" id="drawing-shadow-width"><br>
                            </div>
                            <div class="shadowoffset">
                                <label for="drawing-shadow-offset">Shadow offset:</label>
                                <input type="range" value="0" min="0" max="50" id="drawing-shadow-offset"><br>
                            </div>
                        </div>

                    </div>
                    <div id="layerstab" class="tabcontent">
                        <div id="layersBackground">
                            <ul id="layerUI">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tool-body" style="">
                <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light tool-header" style="z-index:2">

                    <button id="drawing-mode" class="btn btn-success" style="display:none"><i class="fa fa-times" aria-hidden="true"></i>Cancel Drawing Mode (ESC)</button>

                    <div class="inline pull-left" id="texteditor" style="display:none">
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select Font
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a tabindex="-1" href="#" onclick="setFont('Arial', 'Arial');" class="dropdown-item Arial">Arial</a>
                                <a tabindex="-1" href="#" onclick="setFont('Verdana', 'Verdana');" class="dropdown-item Verdana">Verdana</a>
                                <a tabindex="-1" href="#" onclick="setFont('Courier', 'Courier');" class="dropdown-item Courier">Courier</a>
                                <a tabindex="-1" href="#" onclick="setFont('Comic Sans MS', 'Comic Sans MS');" class="dropdown-item ComicSansMS">Comic Sans MS</a>
                                <a tabindex="-1" href="#" onclick="setFont('Impact', 'Impact');" class="dropdown-item Impact">Impact</a>
                                <a tabindex="-1" href="#" onclick="setFont('Pacifico', 'pacificoregular');" class="dropdown-item Pacifico">Pacifico</a>
                                <a tabindex="-1" href="#" onclick="setFont('Alex Brush', 'alex_brushregular');" class="dropdown-item Alex Brush">Alex Brush</a>
                                <a tabindex="-1" href="#" onclick="setFont('Arizona', 'arizoniaregular');" class="dropdown-item Arizona">Arizona</a>
                                <a tabindex="-1" href="#" onclick="setFont('Baloo Bhain', 'baloo_bhainaregular');" class="dropdown-item Baloo-Bhain">Baloo Bhain</a>
                                <a tabindex="-1" href="#" onclick="setFont('Quicksand', 'big_quicksandregular');" class="dropdown-item Quicksand">Quicksand</a>
                                <a tabindex="-1" href="#" onclick="setFont('Bungee', 'bungeeregular');" class="dropdown-item Bungee">Bungee</a>
                                <a tabindex="-1" href="#" onclick="setFont('Flavors', 'flavorsregular');" class="dropdown-item Flavors">Flavors</a>
                                <a tabindex="-1" href="#" onclick="setFont('Fredoka', 'fredoka_oneregular');" class="dropdown-item Fredoka">Fredoka</a>
                                <a tabindex="-1" href="#" onclick="setFont('Monoton', 'monotonregular');" class="dropdown-item Monoton">Monoton</a>
                                <a tabindex="-1" href="#" onclick="setFont('Oleo Script', 'oleo_script_swash_capsregular');" class="dropdown-item Oleo-Script">Oleo Script</a>
                                <a tabindex="-1" href="#" onclick="setFont('Oswald', 'oswaldregular');" class="dropdown-item Oswald">Oswald</a>
                                <a tabindex="-1" href="#" onclick="setFont('Petit Formal', 'petit_formal_scriptregular');" class="dropdown-item Petit-Formal">Petit Formal</a>
                                <a tabindex="-1" href="#" onclick="setFont('Righteous', 'righteousregular');" class="dropdown-item Righteous">Righteous</a>
                                <a tabindex="-1" href="#" onclick="setFont('Spiraz', 'spiraxregular');" class="dropdown-item Spirax">Spiraz</a>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button id="text-bold" class="btn" data-original-title="Bold"><i class="fa fa-bold" aria-hidden="true"></i></button>
                            <button id="text-italic" class="btn" data-original-title="Italic"><i class="fa fa-italic" aria-hidden="true"></i></button>
                            <button id="text-strike" class="btn" title="Strike" style=""><i class="fa fa-strikethrough" aria-hidden="true"></i></button>
                            <button id="text-underline" class="btn" title="Underline" style=""><i class="fa fa-underline" aria-hidden="true"></i></button>
                        </div>
                        <div class="dropdown color-btn">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Change Font Color
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item disabled" href="#">Font Color</a><input type="color" data-original-title="Font Color" id="text-fontcolor" value="#000">
                                <a class="dropdown-item disabled" href="#">Stroke Color</a><input type="color" data-original-title="Font Border Color" id="text-strokecolor" value="#000">
                            </div>
                        </div>
                    </div>

                    <div id="imagefilters" style="display:none">
                        <div class="btn-group dropdown">

                            <button id="filters" class="btn" data-original-title="Filters" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-magic" aria-hidden="true"></i></button>
                            <div class="dropdown-menu" aria-labelledby="filters">
                                <h3>FILTERS</h3>
                                <hr>
                                <div class="filters-menu">
                                    <div class="sepiadiv">
                                        <input class="FilterClass" type="checkbox" id="sepia" name='sepia' value='valuable'>
                                        <label for="sepia">
                                            <img src="img/Filter-Examples/Sepia.jpg" alt="" for="sepia" loading="lazy">
                                        </label>
                                    </div>
                                    <div class="blackwhitediv">
                                        <input class="FilterClass" type="checkbox" id="blackwhite" name='blackwhite' value='valuable'>
                                        <label for="blackwhite">
                                            <img src="img/Filter-Examples/blackwhite.jpg" alt="" for="blackwhite" loading="lazy">
                                        </label>
                                    </div>
                                    <br>
                                    <div class="browniediv">
                                        <input class="FilterClass" type="checkbox" id="brownie" name='brownie' value='valuable'>
                                        <label for="brownie">
                                            <img src="img/Filter-Examples/brownie.jpg" alt="" for="brownie" loading="lazy">
                                        </label>
                                    </div>
                                    <div class="vintagediv">
                                        <input class="FilterClass" type="checkbox" id="vintage" name='vintage' value='valuable'>
                                        <label for="vintage">
                                            <img src="img/Filter-Examples/vintage.jpg" alt="" for="vintage" loading="lazy">
                                        </label>
                                    </div>
                                    <div class="kodachromediv">
                                        <input class="FilterClass" type="checkbox" id="kodachrome" name='kodachrome' value='kodachrome'>
                                        <label for="kodachrome">
                                            <img src="img/Filter-Examples/kodachrome.jpg" alt="" for="kodachrome" loading="lazy">
                                        </label>
                                    </div>
                                    <div class="technicolordiv">
                                        <input class="FilterClass" type="checkbox" id="technicolor" name='technicolor' value='valuable'>
                                        <label for="technicolor">
                                            <img src="img/Filter-Examples/technicolor.png" alt="" for="technicolor" loading="lazy">
                                        </label>
                                    </div>
                                    <div class="polaroiddiv">
                                        <input class="FilterClass" type="checkbox" id="polaroid" name='polaroid' value='valuable'>
                                        <label for="polaroid">
                                            <img src="img/Filter-Examples/polaroid.png" alt="" for="polaroid" loading="lazy">
                                        </label>
                                    </div>
                                    <div class="invertdiv">
                                        <input class="FilterClass" type="checkbox" id="invert" name='invert' value='valuable'>
                                        <label for="invert">
                                            <img src="img/Filter-Examples/invert.png" alt="" for="invert" loading="lazy">
                                        </label>
                                    </div>
                                </div>
                                <div class="filterscontrols">
                                    <p>
                                        <label><span>Brightness:</span> <input class="FilterClass" type="checkbox" id="brightness" checked></label>
                                        <br>
                                        <input class="FilterClass" type="range" id="brightness-value" value="0.1" min="-1" max="1" step="0.003921">
                                    </p>
                                    <p>
                                        <label><span>Contrast:</span> <input class="FilterClass" type="checkbox" id="contrast"></label>
                                        <br>
                                        <input class="FilterClass" type="range" id="contrast-value" value="0" min="-1" max="1" step="0.003921">
                                    </p>
                                    <p>
                                        <label><span>Saturation:</span> <input class="FilterClass" type="checkbox" id="saturation"></label>
                                        <br>
                                        <input class="FilterClass" type="range" id="saturation-value" value="0" min="-1" max="1" step="0.003921">
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="btn-group dropdown">

                            <button id="effects" class="btn" data-original-title="Effects" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sliders" aria-hidden="true"></i></button>
                            <div class="dropdown-menu" aria-labelledby="effects" style="    width: 310px">
                                <h3>Effects</h3>
                                <hr>
                                <div class="effects-menu">

                                    <div class="remove-colors">
                                        <label><span>Remove color:</span> <input class="FilterClass" type="checkbox" id="remove-color"></label><br>
                                        <label style="float: left;margin-top: -1.5em;margin-left: 1em;width: 120px;">
                                            <span>Color: </span><input class="FilterClass" type="color" id="remove-color-color" value="#00f900"></label><br>

                                        <input class="FilterClass" type="range" id="remove-color-distance" value="0.02" min="0" max="1" step="0.01"> </div>



                                    <div class="gamma-controls">
                                        <label><span>Gamma:</span> <input class="FilterClass" type="checkbox" id="gamma"></label>

                                        <div class="gamma-colors">
                                            <label>Red: <input class="FilterClass" type="range" id="gamma-red" value="1" min="0.2" max="2.2" step="0.003921"></label>
                                            <label>Green: <input class="FilterClass" type="range" id="gamma-green" value="1" min="0.2" max="2.2" step="0.003921"></label>
                                            <label>Blue: <input class="FilterClass" type="range" id="gamma-blue" value="1" min="0.2" max="2.2" step="0.003921"></label>
                                        </div>

                                    </div>


                                    <span class="noise-control">
                                        <label><span>Noise:</span> <input class="FilterClass" type="checkbox" id="noise"></label>

                                        <label class="ignore">Value: <input class="FilterClass" type="range" id="noise-value" value="100" min="0" max="1000"></label>
                                    </span>
                                    <div class="pixelate-control">
                                        <label><span>Pixelate</span> <input class="FilterClass" type="checkbox" id="pixelate"></label>

                                        <label class="ignore">Value: <input class="FilterClass" type="range" id="pixelate-value" value="4" min="2" max="20"></label>
                                    </div>
                                    <div class="blur-control">
                                        <label><span>Blur:</span> <input class="FilterClass" type="checkbox" id="blur"></label>
                                        <br>
                                        <label class="ignore">Value: <input class="FilterClass" type="range" id="blur-value" value="0.1" min="0" max="1" step="0.01"></label>
                                    </div>
                                    <div class="sharpen-control">
                                        <label><span>Sharpen:</span> <input class="FilterClass" type="checkbox" id="sharpen"></label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="btn-group dropdown">
                            <button id="grayscale-controls" class="btn" data-original-title="Grayscale" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-circle" aria-hidden="true"></i></button>
                            <div class="dropdown-menu grayscale-dropdown" aria-labelledby="grayscale">
                                <h3>GrayScale</h3>
                                <div id="grayscale-set">
                                    <div class="grayscale-select">

                                        <label><span>Grayscale:</span> <input class="FilterClass" type="checkbox" id="grayscale"></label>
                                    </div>
                                    <div class="grayscale-option">
                                        <label><span>Avg.</span> <input class="FilterClass" type="radio" id="average" name="grayscale"></label>
                                        <label><span>Lum.</span> <input class="FilterClass" type="radio" id="lightness" name="grayscale"></label>
                                        <label><span>Light.</span> <input class="FilterClass" type="radio" id="luminosity" name="grayscale"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="pathFilters" style="display:none">
                        <div class="btn-group dropdown">
                            <div class="pathColor">
                                <input type="color" value="" id="pathcolorid">
                            </div>
                            <div class="pathStroke dropdown">
                                <button id="pathBtn" class="btn" data-original-title="PathBtn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-magic" aria-hidden="true"></i></button>
                                <div class="dropdown-menu" aria-labelledby="pathBtn">
                                    <h3>Path Stroke</h3>
                                    <input type="color" id="pathstrokecolor">
                                    <hr>
                                    <input type="range" min="0" max="9.0" value="0" step="1" id="pathstrokewidth">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ml-auto" style="display:inline-flex">
                        <div id="imageeditor" style="display:none">
                            <div class="btn-group">
                                <button class="btn" id="bring-to-front" title="Bring to Front"><i class="fas fa-level-up-alt"></i></button>
                                <button class="btn" id="send-to-back" title="Send to Back"><i class="fas fa-level-down-alt"></i></button>
                                <button id="remove-selected" class="btn" title="Delete selected item"><i class="fas fa-trash-alt"></i></button>
                            </div>
                        </div>
                        <button id="flip" class="btn" title="Rotate View"><i class="fas fa-sync-alt"></i></button>
                    </div>
                </nav>

                <div id="shirtDiv" class="d-flex justify-content-center" style="transform: scale(0.8);margin-top: -1.4em;">
                    <div class="divloader" style="display:none"></div>
                    <canvas id="tcanvas" style="display:block"></canvas>
                    <img name="tshirtview" id="tshirtFacing" src="img/crew_front.png" style="display:none">
                </div>


                <div class="arrows">
                    <button class="btn btn-dark arrowBtn arrowUp" name="up"><i class="fa fa-arrow-up" aria-hidden="true" name="up"></i></button><br>
                    <button class="btn btn-dark arrowBtn arrowLeft" name="left"><i class="fa fa-arrow-left" aria-hidden="true" name="left"></i></button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-dark arrowBtn arrowRight" name="right"><i class="fa fa-arrow-right" aria-hidden="true" name="right"></i></button><br>
                    <button class="btn btn-dark arrowBtn arrowDown" name="down"><i class="fa fa-arrow-down" aria-hidden="true" name="down"></i></button>
                </div>
                <div class="zoom">
                    <span style="float: left;margin-top: 2px;margin-right: 11px;">Zoom</span>
                    <input type="range" min="0" max="1.1" value="0.9" step="0.1" id="zoomer">
                </div>

            </div>


        </div>

        <div style="display:none">
            <label>Use WebGl<input type="checkbox" id="webgl" checked=""></label>
            <div id="bench">720 x 1080px 55ms</div>
        </div>

    </div>
    <script>
        var myVar;


        $(document).ready(function() {





            $("#canvas2json").click(function() {
                var json = canvas.toJSON();
                var finalJson;
                var json2;
                setTimeout(function() {
                    $("#flip").click();
                }, 2500);
                setTimeout(function() {
                    json2 = canvas.toJSON();
                    finalJson = {
                        front: json,
                        back: json2
                    };
                    var a = document.createElement("a");
                    var file = new Blob([JSON.stringify(finalJson)], {
                        type: 'text/plain'
                    });
                    a.href = URL.createObjectURL(file);
                    a.download = 'json.createEzee';
                    a.click();
                }, 1000);
                $("#flip").click();
            });

            $("#saveDesignForUsers").click(function() {
                canvas.discardActiveObject();
                canvas.renderAll();
                var fd = new FormData();
                var front;
                var back;
                var finalJson;
                var json2;
                var json = canvas.toJSON();
                setTimeout(function() {
                    $("#flip").click();
                    setTimeout(function() {
                        json2 = canvas.toJSON();
                        finalJson = {
                            front: json,
                            back: json2
                        };
                        var file = new Blob([JSON.stringify(finalJson)], {
                            type: 'text/plain'
                        });
                        domtoimage.toJpeg(document.getElementById('tcanvas'), {
                                quality: 0.95
                            })
                            .then(function(dataUrl) {
                                back = dataURItoBlob(dataUrl);

                                fd.append('file', file);
                                fd.append('front', front);
                                fd.append('back', back);

                                $.ajax({
                                    url: 'designOnline.php',
                                    type: 'POST',
                                    data: fd,
                                    contentType: false,
                                    processData: false,
                                    success: function(response) {
                                        swal("Success!", "Your project was saved successfully!", "success");
                                    }
                                });
                                $("#flip").click();
                            });
                    }, 2500);
                }, 1000);

                domtoimage.toJpeg(document.getElementById('tcanvas'), {
                        quality: 0.95
                    })
                    .then(function(dataUrl) {
                        front = dataURItoBlob(dataUrl);
                    });

            });

            function dataURItoBlob(dataURI) {
                'use strict'
                var byteString,
                    mimestring

                if (dataURI.split(',')[0].indexOf('base64') !== -1) {
                    byteString = atob(dataURI.split(',')[1])
                } else {
                    byteString = decodeURI(dataURI.split(',')[1])
                }

                mimestring = dataURI.split(',')[0].split(':')[1].split(';')[0]

                var content = new Array();
                for (var i = 0; i < byteString.length; i++) {
                    content[i] = byteString.charCodeAt(i)
                }

                return new Blob([new Uint8Array(content)], {
                    type: mimestring
                });
            }

            $("#json2canvas").click(function() {
                $('#json2canvasInput').trigger('click');
            });

            $(document).on('change', '#json2canvasInput', function(e) {
                $('.divloader').css('display', 'block');
                $('#tcanvas').css('display', 'none');
                var file = e.target.files[0];
                if (!file) return;
                var reader = new FileReader();
                reader.onload = function(f) {
                    var data = JSON.parse(f.target.result);
                    var front = data['front'];
                    var back = data['back'];
                    canvas.clear();
                    setTimeout(function() {
                        canvas.loadFromJSON(
                            JSON.parse(JSON.stringify(front)),
                            canvas.renderAll.bind(canvas));
                    }, 1000);
                    $("#productCustomColor").val(front.backgroundImage.fill);
                    setTimeout(function() {
                        jsonBackSide(back);
                    }, 1000);

                };
                reader.readAsText(file);
            });

            $(".imagesBtnGroup .btn-secondary").click(function(e) {

                $('.imagesBtnGroup .btn-secondary').removeClass('active');
                $(this).addClass('active');
                if ($(this).hasClass('createZee-images')) {
                    $('#avatarlist').css('display', 'block');
                    $('#yourImagesList').css('display', 'none');
                } else if ($(this).hasClass('your-images')) {
                    $('#avatarlist').css('display', 'none');
                    $('#yourImagesList').css('display', 'block');
                }
            });

            $('#backtoshop').click(function() {
                window.location.href = '../../Customer/index.php';
            });

            $('.saved-designs-list').on('click', '.edit-design', function(e) {
                var name = e.target.id.split('-')[0];
                var txt = 'UserProjects/Images'
                var txt = name.concat('.txt');
                window.document.location = 'Editor.php' + '?jsonfile=' + 'Tool/UserProjects/Projects/' + txt;

            });

        });



        function deleteFile(file_path) {
            $.ajax({
                url: '../design-delete.php',
                data: {
                    'file': file_path
                },
                success: function(response) {
                    if (response.status === true) {} else console.log(response);
                }
            });
        }

        function myFunction() {
            myVar = setTimeout(showPage, 10);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
        }

    </script>
    <script src="js/tshirtEditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.debug.js"></script>


</body>



</html>
<?php


if(isset($_SESSION['sessionType']))
{
    ?>
<script>


</script>

<?php
    

    
    if($_SESSION['sessionType'] == 'admin')
    {
        $name=$_SESSION['name'];
        $email=$_SESSION['email'];
        $number=$_SESSION['number'];
        $loggedIn = $name;
        echo "<script>$('#checkout-id').remove();</script>";
        echo "<script>$('#backtoshop').remove();</script>";
        echo "<script>$('#headerprice').remove();</script>";
        echo "<script>$('.view-saved-designs').remove();</script>";
        echo "<script>$('.navbar-brand').attr('href', '../dashboard.php?pg=dash');</script>";
        echo "<script>$('.logged-in-text').text('Logged in as $loggedIn' Admin);</script>";
        
        ?>
<script>
    var getEditFileData = document.location.search.replace(/^.*?\=/, '');
    if (getEditFileData != '') {
        $('.divloader').css('display', 'block');
        $('#tcanvas').css('display', 'none');
        $.getJSON('../' + getEditFileData, function(json) {
            var front = json['front'];
            var back = json['back'];

            canvas.clear();
            setTimeout(function() {
                canvas.loadFromJSON(
                    JSON.parse(JSON.stringify(front)),
                    canvas.renderAll.bind(canvas));
            }, 1000);
            $("#productCustomColor").val(front.backgroundImage.fill);
            setTimeout(function() {
                jsonBackSide(back);
            }, 1000);
        });
    }

    function jsonBackSide(e) {
        setTimeout(function() {
            $("#flip").click();
            setTimeout(function() {
                canvas.loadFromJSON(
                    JSON.parse(JSON.stringify(e)),
                    canvas.renderAll.bind(canvas));
                setTimeout(function() {
                    $('.divloader').css('display', 'none');
                    $('#tcanvas').css('display', 'block');
                    // last call
                    $("#flip").click();
                }, 10);
            }, 1000);
        }, 1000);
        a = null;
        b = null;
        return;
    }


    var userImagesFolder = "uploadedImages/AdminUploadedImages/";
    $.ajax({
        url: userImagesFolder,
        success: function(data) {
            $(data).find("a").attr("href", function(i, val) {

                if (val.split("-")[0] == "<?php echo $_SESSION['email']; ?>") {

                    if (val.match(/\.(jpe?g|jpg|jpeg)$/)) {
                        $("#yourImagesList").append("<img style='cursor: pointer;' class='img-polaroid' src='" + userImagesFolder + val + "' loading='lazy'>");
                    }
                }
            });
        }
    });

</script><?php
    
    }
    if($_SESSION['sessionType'] == 'customer')
    {
        echo "<script>$('.navbar-brand').attr('href', '../../Customer/index.php');</script>";
        echo "<script>$('#headerprice').remove();</script>";
        echo "<script>$('#saveDesignForUsers').text('Save Design');</script>";
         ?>
<script>
    viewAllDesigns();

    function viewAllDesigns() {

        $.ajax({
            url: 'UserProjects/Images/',
            success: function(data) {

                var email = "<?php echo $_SESSION['ema']; ?>";

                $(data).find("a").attr("href", function(i, val) {
                    if (val.startsWith(email)) {
                        if (val.endsWith('front.jpeg')) {
                            $(".saved-designs-list").append('<div class="card card-btn"><img class = "card-img-top" src = "UserProjects/Images/' + val + '" alt = "Card image" loading="lazy"><div class = "card-body" ><div class = "btn-group" role = "group" aria - label = "Basic example"><button type = "button" class = "btn btn-secondary edit-design" id="' + val + '" > Edit </button> <button type = "button" class = "btn btn-secondary delete-design" id="' + val + '"> Delete </button> </div></div> </div>');
                        }
                    }
                });
            }
        });
    }

    var getEditFileData = document.location.search.replace(/^.*?\=/, '');
    if (getEditFileData != '') {
        $('.divloader').css('display', 'block');
        $('#tcanvas').css('display', 'none');
        $.getJSON('../' + getEditFileData, function(json) {
            var front = json['front'];
            var back = json['back'];

            canvas.clear();
            setTimeout(function() {
                canvas.loadFromJSON(
                    JSON.parse(JSON.stringify(front)),
                    canvas.renderAll.bind(canvas));
            }, 1000);
            $("#productCustomColor").val(front.backgroundImage.fill);
            setTimeout(function() {
                jsonBackSide(back);
            }, 1000);
        });
    }

    $('.saved-designs-list').on('click', '.delete-design', function(e) {
        var name = e.target.id.split('-')[0];
        var txt = 'Tool/UserProjects/Images'
        var front = name.concat('-front.jpeg');
        var back = name.concat('-back.jpeg');
        var txt = name.concat('.txt');
        deleteFile('Tool/UserProjects/Images/' + front);
        deleteFile('Tool/UserProjects/Images/' + back);
        deleteFile('Tool/UserProjects/Projects/' + txt);
        $('.card').remove();
        viewAllDesigns();
    });

    function jsonBackSide(e) {
        setTimeout(function() {
            $("#flip").click();
            setTimeout(function() {
                canvas.loadFromJSON(
                    JSON.parse(JSON.stringify(e)),
                    canvas.renderAll.bind(canvas));
                setTimeout(function() {
                    $('.divloader').css('display', 'none');
                    $('#tcanvas').css('display', 'block');
                    // last call
                    $("#flip").click();
                }, 10);
            }, 1000);
        }, 1000);
        a = null;
        b = null;
        return;
    }


    var userImagesFolder = "uploadedImages/UserImages/";
    $.ajax({
        url: userImagesFolder,
        success: function(data) {
            $(data).find("a").attr("href", function(i, val) {

                if (val.split("-")[0] == "<?php echo $_SESSION['ema']; ?>") {

                    if (val.match(/\.(jpe?g|jpg|jpeg)$/)) {
                        $("#yourImagesList").append("<img style='cursor: pointer;' class='img-polaroid' src='" + userImagesFolder + val + "' loading='lazy'>");
                    }
                }
            });
        }
    });

</script><?php
    }
    if($_SESSION['sessionType'] == 'seller')
    {
        $name=$_SESSION['snam'];
        $email=$_SESSION['sema'];
        $loggedIn = $name;
        echo "<script>$('#checkout-id').remove();</script>";
        echo "<script>$('#backtoshop').remove();</script>";
        echo "<script>$('#headerprice').remove();</script>";
        echo "<script>$('.view-saved-designs').remove();</script>";
        echo "<script>$('.view-saved-designs').remove();</script>";
        echo "<script>$('.navbar-brand').attr('href', '../../customer/seller.php');</script>";
        echo "<script>$('.logged-in-text').text('Logged in as $loggedIn seller');</script>";
        
                ?>
<script>
    var getEditFileData = document.location.search.replace(/^.*?\=/, '');
    if (getEditFileData != '') {
        $('.divloader').css('display', 'block');
        $('#tcanvas').css('display', 'none');
        $.getJSON('../' + getEditFileData, function(json) {
            var front = json['front'];
            var back = json['back'];

            canvas.clear();
            setTimeout(function() {
                canvas.loadFromJSON(
                    JSON.parse(JSON.stringify(front)),
                    canvas.renderAll.bind(canvas));
            }, 1000);
            $("#productCustomColor").val(front.backgroundImage.fill);
            setTimeout(function() {
                jsonBackSide(back);
            }, 1000);
        });
    }

    function jsonBackSide(e) {
        setTimeout(function() {
            $("#flip").click();
            setTimeout(function() {
                canvas.loadFromJSON(
                    JSON.parse(JSON.stringify(e)),
                    canvas.renderAll.bind(canvas));
                setTimeout(function() {
                    $('.divloader').css('display', 'none');
                    $('#tcanvas').css('display', 'block');
                    // last call
                    $("#flip").click();
                }, 10);
            }, 1000);
        }, 1000);
        a = null;
        b = null;
        return;
    }


    var userImagesFolder = "uploadedImages/SellerImages/";
    $.ajax({
        url: userImagesFolder,
        success: function(data) {
            $(data).find("a").attr("href", function(i, val) {

                if (val.split("-")[0] == "<?php echo $_SESSION['sema']; ?>") {

                    if (val.match(/\.(jpe?g|jpg|jpeg)$/)) {
                        $("#yourImagesList").append("<img style='cursor: pointer;' class='img-polaroid' src='" + userImagesFolder + val + "' loading='lazy'>");
                    }
                }
            });
        }
    });

</script><?php
        
    }

} 
else{
    
    
    $loggedIn = 'Guest';
    echo "<script>$('.view-saved-designs').remove();</script>";
    echo "<script>$('.navbar-brand').attr('href', '../../Customer/index.php');</script>";
    echo "<script>swal('Dear Guest!', 'Please Sign-up or Sign-in to unlock all the features of this tool');</script>";
    echo "<script>$('.dragdropimage').remove();</script>";
    echo "<script>$('.imagesBtnGroup').remove();</script>";
    echo "<script>$('#saveDesignForUsers').remove();</script>";
    echo "<script>$('.logged-in-text').text('Logged in as $loggedIn ');</script>"; 
}
?>
