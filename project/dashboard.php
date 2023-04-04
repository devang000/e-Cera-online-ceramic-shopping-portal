<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<title>e-Cera | Online Ceramic Shopping</title>

<head>
<link rel="icon" type="image/png" href="path-to-your-favicon"/><link rel="icon" type="image/png" href="./img/rem.png"/>
    <style>
        .cta {
            border: none;
            background: none;
        }

        .cta span {
            padding-bottom: 7px;
            letter-spacing: 4px;
            font-size: 14px;
            padding-right: 15px;
            text-transform: uppercase;
        }

        .cta svg {
            transform: translateX(-8px);
            transition: all 0.3s ease;
        }

        .cta:hover svg {
            transform: translateX(0);
        }

        .cta:active svg {
            transform: scale(0.9);
        }

        .hover-underline-animation {
            position: relative;
            color: black;
            padding-bottom: 20px;
        }

        .hover-underline-animation:after {
            content: "";
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #000000;
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }

        .cta:hover .hover-underline-animation:after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }
    </style>
    <meta charset="utf-8">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />

    <!-- Latest compiled and minified JavaScript -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Linking the stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/dashboard.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />

    <!-- Latest compiled and minified JavaScript -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/9147789c41.js" crossorigin="anonymous"></script>

    <!-- Linking the stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/dashboard.css">

    <!-- Linking the Jquery script -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- Linking the Jquery script -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        $(document).ready(function () {
            $(".fa-search").click(function () {
                $(".icon").toggleClass("active");
                $("input[type='text']").toggleClass("active");
            });
        });
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


    <style>
        /* Search container styles */
        /* Search container styles */
        .search-container {
            display: flex;
            align-items: center;
            position: relative;
        }

        #search-bar {
            width: 0;
            height: 40px;
            border: none;
            background-color: transparent;
            transition: width 0.3s ease-in-out;
            padding: 0;
            margin: 0;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 1;
            font-size: 16px;
            color: #000;
        }

        #search-bar:focus {
            outline: none;
            width: 250px;
        }

        #search-icon {
            background-color: transparent;
            border: none;
            z-index: 2;
            padding: 10px;
            cursor: pointer;
            margin-left: 5px;
            transition: transform 0.3s ease-in-out;
        }

        #search-icon i {
            color: green;
            font-size: 20px;
        }

        #search-icon.active {
            transform: rotate(90deg);
        }

        /* Search popup styles */
        .search-popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: none;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 3;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .search-popup.active {
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 1;
        }

        .search-popup form {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .search-popup input[type="text"] {
            width: 80%;
            height: 50px;
            padding: 10px;
            font-size: 16px;
            border: none;
            background-color: #fff;
            margin-right: 10px;
        }

        .search-popup button {
            height: 50px;
            width: 50px;
            border: none;
            background-color: #fff;
            cursor: pointer;
        }

        .search-popup button i {
            color: green;
            font-size: 20px;
        }
    </style>



</head>

<body>
    <nav class="header">
        <div class="logo">
            <img src="./img/imgLOGO.png"
                style="height: auto; width: 190px; display: flex; padding-top: 5px; padding-bottom: 5px;">
        </div>



        <div class="nav-items" style="margin-left: -108px;">

            <!-- The Menu items -->
            <li><a href="./dashboard.php">Home</a></li>
            <li><a href="./productpage.php">Procuts</a>
                <!-- <ul class="dropdown">
                <li><a href="#">Latest Products</a></li>
                <li><a href="#">Populer Products</a></li>
            </ul> -->
            </li>
            <li><a href="#section3">Contact us</a></li>
            <li><a href="#section4">About us</a></li>
        </div>


        <!-- searchbar in navigation bar  -->
        <div class="search-container">
            <form action="#" method="get">
                <input type="text" id="search-bar" placeholder="Search...">
                <button type="submit" id="search-icon"><i class="fa fa-search"></i></button>
            </form>
            <div class="search-popup">
                <form action="#" method="get">
                    <input type="text" placeholder="Search...">
                    <button type="button"><i class="fa fa-times"></i></button>
                </form>
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $("#search-icon").click(function () {
                    $(this).toggleClass("active");
                    $(".search-popup").toggleClass("active").focus();
                });

                $(".search-popup button").click(function () {
                    $(".search-popup").removeClass("active");
                    $("#search-icon").removeClass("active");
                    $("#search-bar").val("").blur();
                });

                $("#search-bar").keydown(function (e) {
                    if (e.keyCode == 13) {
                        $(".search-popup").removeClass("active");
                        $("#search-icon").removeClass("active");
                        $(this).val("").blur();
                        return false;
                    }
                });
            });
        </script>

        &emsp;&emsp;
        <!-- end  searchbar in navigation bar  -->
        <div class="licon">
            <table>
                <tr>
                    <td class="link">
                        <?php
                        if (isset($_SESSION['uname'])) {
                            echo " 
                                <td>
                                  <div class='user-area dropdown' id='userDropdown'>
                                    <a href='#' class='active fa fa-user' aria-hidden='true' style='background-color: transparent; text-decoration: none; color:green; font-size: 2em;' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                      <i aria-hidden='true' style='color:green'></i>&nbsp;
                                    </a>
                                    <span style='font-size: 1.2em; cursor: pointer;' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                      $_SESSION[uname]
                                    </span>
                                    <div class='user-menu dropdown-menu'>
                                      <a class='nav-link' href='./logout.php' style='color:#333;'><i class='fa fa-power-off'></i>&emsp;Logout</a>
                                    </div>
                                  </div>
                                </td>";


                            // echo "<td><i class='fa fa-power-off' aria-hidden='true' style='color:green'></i>&emsp;<a href='logout.php' style='font-size:18px'>logout</a></td>";
                            echo "<td>&emsp; | &emsp; <i class= 'fas fa-shopping-cart fa-2x' aria-hidden='true' style='color:green'></i>&emsp;<a style='font-size:large;  text-decoration: none; color:#333' class='cart' href='./cart.php'>Cart</a></td>";
                        } else {
                            echo "&emsp;<i class='fa fa-user fa-2x' aria-hidden='true' style='color:green'></i>&emsp;<a style='font-size:large;' class='login' href='./login_page.php'>Login</a>&emsp; | &emsp; <i class='fas fa-shopping-cart fa-2x' aria-hidden='true' style='color:green; '></i>&emsp;<a style='font-size:large;text-decoration: none;' class='cart' href='./cart.php'>Cart</a>";
                        }
                        ?>
                    </td>
                    <td>

                    </td>
                </tr>
            </table>

        </div>
    </nav>


    <ul class="slides">
        <input type="radio" name="radio-btn" id="img-1" checked />
        <li class="slide-container">
            <div class="slide">
                <img src="./img/five.jpg" />
            </div>
            <div class="nav">
                <label for="img-6" class="prev">&#x2039;</label>
                <label for="img-2" class="next">&#x203a;</label>
            </div>
        </li>

        <input type="radio" name="radio-btn" id="img-2" />
        <li class="slide-container">
            <div class="slide">
                <img src="./img/three.jpg" />
            </div>
            <div class="nav">
                <label for="img-1" class="prev">&#x2039;</label>
                <label for="img-3" class="next">&#x203a;</label>
            </div>
        </li>

        <input type="radio" name="radio-btn" id="img-3" />
        <li class="slide-container">
            <img src="./img/nmbhbbh.jpg" />
            <div class="slide">
            </div>
            <div class="nav">
                <label for="img-2" class="prev">&#x2039;</label>
                <label for="img-4" class="next">&#x203a;</label>
            </div>
        </li>


        <input type="radio" name="radio-btn" id="img-4" />
        <li class="slide-container">
            <div class="slide">
                <img src="./img/four.jpg" />
            </div>
            <div class="nav">
                <label for="img-3" class="prev">&#x2039;</label>
                <label for="img-5" class="next">&#x203a;</label>
            </div>
        </li>


        <input type="radio" name="radio-btn" id="img-5" />
        <li class="slide-container">
            <div class="slide">
                <img src="./img/banner1.jpg" />
            </div>
            <div class="nav">
                <label for="img-4" class="prev">&#x2039;</label>
                <label for="img-1" class="next">&#x203a;</label>
            </div>
        </li>


        <li class="nav-dots">
            <label for="img-1" class="nav-dot" id="img-dot-1"></label>
            <label for="img-2" class="nav-dot" id="img-dot-2"></label>
            <label for="img-3" class="nav-dot" id="img-dot-3"></label>
            <label for="img-4" class="nav-dot" id="img-dot-4"></label>
            <label for="img-5" class="nav-dot" id="img-dot-5"></label>

        </li>
    </ul>



    <br><br><br><br><br>
    <h2 class="section-head" id="section2">Popular Products</h2>
    <!-- <a href="./productpage.php" style="font-weight: bolder; color: grey; margin-left: 1150px;">View All →</a>
 -->
    <form action="./productpage.php" method="post">
        <button class="cta" style="margin-left: 1085px;" type="submit">
            <span class="hover-underline-animation"> View all </span>
            <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
                <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                    data-name="Path 10" id="Path_10"></path>
            </svg>
        </button>
    </form>
    <div class="container">
        <h3 class="h3"> </h3>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <form action="./cart.php" method="post">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1"
                                    src="https://5.imimg.com/data5/EU/ZG/WF/SELLER-48057251/wash-basin-250x250.jpg">
                                <img class="pic-2"
                                    src="https://5.imimg.com/data5/EU/ZG/WF/SELLER-48057251/wash-basin-250x250.jpg">
                            </a>

                            <div class="product-content">
                                <h3 class="title"><a href="#">Ceramic Wall Mounted Or Table Top Wash Basin </a></h3>
                                <span class="price">Rs.8000</span><br><br>

                            </div>

                            <br><br>
                            <input type="submit" name="addtocart" class="add-to-cart" value="Add to Cart">
                            <input type="hidden" name="item_name" value="Ceramic Wall Mounted Or Table Top Wash Basin">
                            <input type="hidden" name="item_price" value="8000">
                            <!-- <a class="add-to-cart" href="">Add to cart</a> -->
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6">
                <form action="./cart.php" method="post">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1" src="https://5.imimg.com/data5/QL/GP/MY-54187678/1-500x500.jpg">
                                <img class="pic-2" src="https://5.imimg.com/data5/QL/GP/MY-54187678/1-500x500.jpg">
                            </a>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Stainless Steel Wash Basin – Graphite Grey</a></h3>
                                <span class="price">Rs.2000</span><br><br>

                            </div>

                            <br><br>
                            <input type="submit" name="addtocart" class="add-to-cart" value="Add to Cart">
                            <input type="hidden" name="item_name" value="Product 2">
                            <input type="hidden" name="item_price" value="2000">
                        </div>

                    </div>
            </div>
            </form>
            <div class="col-md-3 col-sm-6">
                <form action="./cart.php" method="post">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8ouxwpHSjwepMGNna3lqDBAo0OniE-y2s7TIJB-0_No8gDS687kEtjNkj1aPXdlYRfoo&usqp=CAU">
                                <img class="pic-2"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8ouxwpHSjwepMGNna3lqDBAo0OniE-y2s7TIJB-0_No8gDS687kEtjNkj1aPXdlYRfoo&usqp=CAU">
                            </a>

                            <div class="product-content">
                                <h3 class="title"><a href="#">Aura Crema – Travertine Cream Marble Basin</a></h3>
                                <span class="price">Rs.3000</span><br><br>

                            </div>

                            <input type="submit" class="add-to-cart" name="addtocart" value="Add to Cart">
                            <input type="hidden" name="item_name" value="Product 3">
                            <input type="hidden" name="item_price" value="3000">
                            <br><br>
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6">
                <form action="./cart.php" method="post">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1"
                                    src="https://5.imimg.com/data5/SELLER/Default/2022/11/MN/KA/KL/3869258/ceramic-wash-basin-250x250.jpg">
                                <img class="pic-2"
                                    src="https://5.imimg.com/data5/SELLER/Default/2022/11/MN/KA/KL/3869258/ceramic-wash-basin-250x250.jpg">
                            </a>

                            <div class="product-content">
                                <h3 class="title"><a href="#">Circa Bianca – White Onyx Basin</a></h3>
                                <span class="price">Rs.5000</span><br><br>

                            </div>

                            <br><br>

                            <input type="submit" name="addtocart" class="add-to-cart" value="Add to Cart">
                            <input type="hidden" name="item_name" value="Product 4">
                            <input type="hidden" name="item_price" value="5000">
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>





    <br><br><br>

    <h2 class="section-head" id="section2">Latest Products</h2>
    <!-- <a href="./productpage.php" style="font-weight: bolder; color: grey; margin-left: 1150px;">View All →</a>
 -->
    <form action="./productpage.php" method="post">
        <button type="submit" class="cta" style="margin-left: 1085px;">
            <span class="hover-underline-animation"> View all </span>
            <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
                <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                    data-name="Path 10" id="Path_10"></path>
            </svg>
        </button>
    </form>
    <div class="container">
        <h3 class="h3"> </h3>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <form action="./cart.php" method="post">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="./productDetail.php">
                                <img class="pic-2"
                                    src="https://www.aquantindia.com/wp-content/uploads/2020/04/Aquant-Inox-Steel-Basins.jpg">
                                <img class="pic-1"
                                    src="https://www.aquantindia.com/wp-content/uploads/2020/04/Aquant-Inox-Steel-Basins.jpg">
                            </a>

                            <div class="product-content">
                                <h3 class="title"><a href="#">Concrete Wash Basin – Beige</a></h3>
                                <span class="price">Rs.5000</span><br><br>

                            </div>

                            <br><br>
                            <input type="submit" name="addtocart" class="add-to-cart" value="Add to Cart">
                            <input type="hidden" name="item_name" value="Product 5">
                            <input type="hidden" name="item_price" value="5000">

                        </div>

                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6">
                <form action="./cart.php" method="post">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1"
                                    src="https://www.aquantindia.com/wp-content/uploads/2020/04/Aquant-Toilets.jpg">
                                <img class="pic-2"
                                    src="https://www.aquantindia.com/wp-content/uploads/2020/04/Aquant-Toilets.jpg">
                            </a>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Aura Crema – Travertine Cream Marble Basin</a></h3>
                                <span class="price">Rs.7000</span><br><br>

                            </div>

                            <br><br>
                            <input type="submit" name="addtocart" class="add-to-cart" value="Add to Cart">
                            <input type="hidden" name="item_name" value="Product 6">
                            <input type="hidden" name="item_price" value="7000">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6">
                <form action="./cart.php" method="post">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1"
                                    src="https://www.aquantindia.com/wp-content/uploads/2020/04/Aquant-Matt-Black-Faucets.jpg">
                                <img class="pic-2"
                                    src="https://www.aquantindia.com/wp-content/uploads/2020/04/Aquant-Matt-Black-Faucets.jpg">
                            </a>

                            <div class="product-content">
                                <h3 class="title">Complete Shower Set (Matt Black)<a href="#"></a></h3>
                                <span class="price">Rs.5000</span><br><br>

                            </div>

                            <br><br>
                            <input type="submit" name="addtocart" class="add-to-cart" value="Add to Cart">
                            <input type="hidden" name="item_name" value="Product 8">
                            <input type="hidden" name="item_price" value="5000">

                        </div>

                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6">
                <form action="./cart.php" method="post">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1"
                                    src="https://rukminim2.flixcart.com/image/416/416/kvvad8w0/wash-basin/s/r/a/9-9-tap-tile-tap-and-tile-marble-printed-table-top-basin-original-imag8zby7dgabqur.jpeg?q=70">
                                <img class="pic-2"
                                    src="https://rukminim2.flixcart.com/image/416/416/kvvad8w0/wash-basin/s/r/a/9-9-tap-tile-tap-and-tile-marble-printed-table-top-basin-original-imag8zby7dgabqur.jpeg?q=70">
                            </a>

                            <div class="product-content">
                                <h3 class="title">Konig – Travertine Cream Marble Pedestal Basin<a href="#"></a></h3>
                                <span class="price">Rs.1000</span><br><br>

                            </div>

                            <br><br>
                            <input type="submit" name="addtocart" class="add-to-cart" value="Add to Cart">
                            <input type="hidden" name="item_name" value="Product 9">
                            <input type="hidden" name="item_price" value="1000">

                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>



    <br><br><br><br><br><br>

    <!-- Footer -->
    <!-- <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Videos</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Videos</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                        <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-facebook-square"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                <hr>
            </div>	
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p><u><a href="https://www.marwadiuniversity.ac.in/">Marwadi University</a></u><br>Department of Information and Communication Technology<br>Rajkot-Morbi Highway, near gauridad, Rajkot - 36003</p>
                    <p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Devang Gohil</a></p>
                </div>
                <hr>
            </div>	
        </div>
    </section>

     -->



    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <footer id="dk-footer" class="dk-footer">
        <div class="container" id="section4">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="dk-footer-box-info">
                        <a href="index.html" class="footer-logo">
                            <img src="./img/img.png" alt="footer_logo" class="img-fluid">
                        </a>
                        <p class="footer-info-text">
                            Online Ceramic Shopping System is the web portal so that all peapole can explore the all
                            ceramic items and if wants they can online buy it.
                        </p>
                        <div class="footer-social-link">
                            <h3>Follow us</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social link -->
                    </div>
                    <br><br>
                    <!-- End Footer info -->
                    <div class="footer-awarad">
                        <img src="images/icon/best.png" alt="">
                        <p>Online Ceramic Shopping</p>
                    </div>
                </div>
                <!-- End Col -->
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-us">
                                <div class="contact-icon">
                                    <i class="fa fa-map-o" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>Devang Gohil</h3>
                                    <p>Enroll-92110133011</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">
                            <div class="contact-us contact-us-last">
                                <div class="contact-icon">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>Contact Us</h3>
                                    <p>Give us a call on 97246-01266</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Contact Row -->
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget footer-left-widget">
                                <div class="section-heading">
                                    <h3>Useful Links</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Catagories</a>
                                    </li>
                                    <li>
                                        <a href="./login_page.php">Login</a>
                                    </li>
                                    <li>
                                        <a href="./register_page.php">Sign-up</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Footer Widget -->
                        </div>
                        <!-- End col -->
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget">
                                <div class="section-heading">
                                    <h3>About Us</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <p>
                                    <!-- Don’t miss to subscribe to our new feeds, kindly fill the form below. -->
                                </p>
                                <form action="#">
                                    <div class="form-row">
                                        <div class="col dk-footer-form">
                                            <input type="email" class="form-control" placeholder="Email Address">
                                            <button type="submit">
                                                <i class="fa fa-send"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End form -->
                            </div>
                            <!-- End footer widget -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Widget Row -->
        </div>
        <!-- End Contact Container -->


        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span>Copyright, All Right Reserved by e-Cera | Online Ceramic Shopping System</span>
                    </div>
                    <!-- End Col -->
                    <!-- <div class="col-md-6">
                        <div class="copyright-menu">
                            <ul>
                                <li>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <a href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                    <!-- End col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>
        <!-- End Copyright -->
        <!-- Back to top -->
        <div id="back-to-top" class="back-to-top">
            <button class="btn btn-dark" title="Back to Top" style="display: block;">
                <i class="fa fa-angle-up"></i>
            </button>
        </div>
        <!-- End Back to top -->
    </footer>

</body>

</html>