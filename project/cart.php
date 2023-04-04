<?php

session_start();
//session_destroy();





if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['addtocart'])) {
        if (isset($_SESSION['cart'])) {
            $myitems = array_column($_SESSION['cart'], 'item_name');
            if (in_array($_POST['item_name'], $myitems)) {
                echo "<script>
                        alert('⚠ Product was already added in cart');
                        window.location.href='./productpage.php';
                        </script>";
            } else {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('item_name' => $_POST['item_name'], 'item_price' => $_POST['item_price'], 'Quantity' => $_POST['qty']);
                echo "<script>
                        alert('✔ Item was ssuccessfully added in cart');
                        window.location.href='./productpage.php';
                        </script>";
            }
        } else {
            $_SESSION['cart'][$count] = array('item_name' => $_POST['item_name'], 'item_price' => $_POST['item_price'], 'Quantity' => $_POST['qty']);
            echo "<script>
                    alert('✔ Product was Successfuly added in cart');
                    window.location.href='productpage.php';
                    </script>";

        }
    }

    if (isset($_POST['Remove_Item'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['item_name'] == $_POST['item_name']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo "
                        <script>
                            alert('✔ Successfully Iteam was removed from cart.');
                            window.location.href='cart.php'
                        </script>";
            }
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <title>e-Cera | My Cart</title>
    <link rel="icon" type="image/png" href="path-to-your-favicon"/><link rel="icon" type="image/png" href="./img/rem.png"/>
    
</head>

<body>
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


        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center border rounded bg-light my-5">
                    <h3>My Cart</h3>
                </div>
                <div class="col-lg-9">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col">Serial No.</th>
                                <th class="text-center" scope="col">Item Name</th>
                                <th class="text-center" scope="col">Item Price</th>
                                <th class="text-center" scope="col">Item Quantity</th>
                                <th class="text-center" scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                            $total = 0;
                            // $total = isset($_SESSION['total']) ? $_SESSION['total'] : 0;
                            $item_names = [];
                            $item_price = [];
                            if (isset($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $key => $value) {
                                    // print_r($_SESSION['cart'][$key]['qty']);
                                    $total = $total + $_SESSION['cart'][$key]['item_price'];
                                    $_SESSION['total'] = $total;
                                    $sr = intval($key) + 1;
                                    array_push($item_names,$value['item_name']);
                                    array_push($item_price,$value['item_price']);
                                    //$_SESSION['pd'] = array($_SESSION['item_name'], $_SESSION['item_price'], echo json_decode());
                                    $_SESSION['item_name'] = $value['item_name'];
                                    $_SESSION['item_price'] = $value['item_price'];
                                    $_SESSION['item_names_pdf'] = $item_names;
                                    $_SESSION['item_price_pdf'] = $item_price;
                                    //  $total = intval($total) + intval($value['item_price']) * intval($value['Quantity']);
                                    // $_SESSION['total'] = $total;
                                    echo "
                            <tr>

                                <td>$sr</td>
                                <td>$value[item_name]</td>
                                <td>$value[item_price]</td>
                                <!--<td><input class='text-center' value=1 '$value[Quantity]' type='number' min='1' max='10' onchange='updateTotal(this)'></td>-->
                                <td>1</td>
                                <td>
                                    <form action='cart.php' method='POST'>
                                        <button name='Remove_Item' class='btn btn-sm btn-danger text-white'>REMOVE</button>
                                        <input type='hidden' name='item_name' value='$value[item_name]'>
                                    </form>
                                </td>
                            </tr>
                            ";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-3">
                    <div class="border bg-light rounded p-4">
                        <h4>Total :</h4>
                        <h5 class="text-right" id="total">
                            <?php echo "Rs. " . $total; ?>
                        </h5>
                        <br>
                        <form action="./payscript.php" method="POST">
                            <button class="btn btn-primary btn-block ">Make Payment</button>
                            <input type="hidden" value="<?php echo 'OID' . rand(100, 1000); ?>" name="orderid">
                            <input type="hidden" value="<?php echo $total; ?>" name="amount">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // function updateTotal(input) {
            //     var price = parseFloat(input.parentNode.previousElementSibling.innerHTML);
            //     var quantity = parseInt(input.value);
            //     var total = price * quantity;
            //     var totalElement = document.getElementById("total");
            //     totalElement.innerHTML = "Rs. " + (total.toFixed(2));
            // }
        </script>


        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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
                                    <div class="contact-info" id="section3">
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
