<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

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
        <nav>
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

            &emsp;&emsp;&emsp;&emsp;
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
</body>

</html>