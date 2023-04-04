<?php
    session_start();
?>

<!-- Products -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Cera | Online Shopping System</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

	 <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>

	<!-- Latest compiled and minified JavaScript -->

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Linking the stylesheet -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/dashboard.css">
	
	
	<!-- Linking the Jquery script -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

	<script>
		$(document).ready(function() {
			$(".fa-search").click(function() {
				$(".icon").toggleClass("active");
				$("input[type='text']").toggleClass("active");
			});
		});
	</script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	

    <!------ Include the above in your HEAD tag ---------->
    <style>
        * {
            padding: 0;
            margin: 0;
            position: relative;
            box-sizing: border-box;
        }

        .listing-section,
        .cart-section {
            width: 100%;
            float: left;
            padding: 1%;
            border-bottom: 0.01em solid #dddbdb;
        }

        .product {
            float: left;
            width: 23%;
            border-radius: 2%;
            margin: 1%;
        }

        .product:hover {
            box-shadow: 1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);
            -webkit-box-shadow: 1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);
            -moz-box-shadow: 1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);
        }

        .image-box {
            width: 100%;
            overflow: hidden;
            border-radius: 2% 2% 0 0;
        }

        .images {
            height: 15em;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            border-radius: 2% 2% 0 0;
            transition: all 1s ease;
            -moz-transition: all 1s ease;
            -ms-transition: all 1s ease;
            -webkit-transition: all 1s ease;
            -o-transition: all 1s ease;
        }

        .images:hover {
            transform: scale(1.2);
            overflow: hidden;
            border-radius: 2%;
        }

        /* IMAGES */
        #image-1 {
            background-image: url("https://www.aquantindia.com/wp-content/uploads/2020/04/Aquant-Stainless-Steel-Basins.jpg");
        }

        #image-2 {
            background-image: url("https://www.aquantindia.com/wp-content/uploads/2020/05/9054.jpg")
        }

        #image-3 {
            background-image: url("https://www.aquantindia.com/wp-content/uploads/2020/10/9065-2-copy.jpg")
        }

        #image-4 {
            background-image: url("https://www.aquantindia.com/wp-content/uploads/2020/05/Aquant-Onyx-Pedestal-Wash-Basin.jpg")
        }

        #image-5 {
            background-image: url("https://www.aquantindia.com/wp-content/uploads/2020/10/1023.jpg")
        }

        #image-6 {
            background-image: url("https://www.aquantindia.com/wp-content/uploads/2020/05/9042.jpg")
        }

        #image-7 {
            background-image: url("https://www.aquantindia.com/wp-content/uploads/2020/04/Aquant-Crypton-Emperador-Dark-Emperador-Marble-Basin-9212.jpg")
        }

        #image-8 {
            background-image: url("https://www.aquantindia.com/wp-content/uploads/2020/05/9035.jpg")
        }

        #image-9 {
            background-image: url("https://www.aquantindia.com/wp-content/uploads/2020/05/9011.jpg")
        }

        #image-10 {
            background-image: url("https://www.aquantindia.com/wp-content/uploads/2020/10/1449-Rg.jpg")
        }

        #image-10 {
            background-image: url("https://www.aquantindia.com/wp-content/uploads/2020/10/1449-Rg.jpg")
        }

        #image-11 {
            background-image: url("https://www.aquantindia.com/wp-content/uploads/2020/05/1837-Black-Rose-Gold.jpg")
        }

        #image-12 {
            background-image: url("https://www.aquantindia.com/wp-content/uploads/2020/05/1831-Gold-2.jpg")
        }

        .text-box {
            width: 100%;
            float: left;
            border: 0.01em solid #dddbdb;
            border-radius: 0 0 2% 2%;
            padding: 1em;
        }

        h2,
        h3 {
            float: left;
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            font-size: 1em;
            text-transform: uppercase;
            margin: 0.2em auto;
        }

        .item,
        .price {
            clear: left;
            width: 100%;
            text-align: center;
        }

        .price {
            color: Grey;
        }

        .description,
        label,
        button,
        input {
            float: left;
            clear: left;
            width: 100%;
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
            font-size: 1em;
            text-align: center;
            margin: 0.2em auto;
        }

        input:focus {
            outline-color: #fdf;
        }

        label {
            width: 60%;
        }

        .text-box input {
            width: 15%;
            clear: none;
        }

        .text-box button {
            margin-top: 1em;
        }

        button {
            position: relative;
            overflow: hidden;
            outline: none;
            cursor: pointer;
            border-radius: 50px;
            background-color: hsl(255deg 50% 40%);
            border: solid 4px hsl(50deg 100% 50%);
            font-family: inherit;
        }

        .default-btn,
        .hover-btn {
            background-color: hsl(255deg 50% 40%);
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px 20px;
            border-radius: 50px;
            font-size: 17px;
            font-weight: 500;
            text-transform: uppercase;
            transition: all .3s ease;
        }

        .hover-btn {
            position: absolute;
            inset: 0;
            background-color: hsl(255deg 50% 49%);
            transform: translate(0%, 100%);
        }

        .default-btn span {
            color: hsl(0, 0%, 100%);
        }

        .hover-btn span {
            color: hsl(50deg 100% 50%);
        }

        button:hover .default-btn {
            transform: translate(0%, -100%);
        }

        button:hover .hover-btn {
            transform: translate(0%, 0%);
        }


        .table-heading,
        .table-content {
            width: 75%;
            margin: 1% 12.25%;
            float: left;
            background-color: #dfd;
        }

        .table-heading h2 {
            padding: 1%;
            margin: 0;
            text-align: center;
        }

        .cart-product {
            width: 50%;
            float: left;
        }

        .cart-price {
            width: 15%;
            float: left;
        }

        .cart-quantity {
            width: 10%;
            float: left;
        }

        .cart-total {
            width: 25%;
            float: left;
        }

        .cart-image-box {
            width: 20%;
            overflow: hidden;
            border-radius: 2%;
            float: left;
            margin: 1%;
        }

        .cart-images {
            height: 7em;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }

        .cart-item {
            width: 20%;
            float: left;
            margin: 3.2em 1%;
            text-align: center;
        }

        .cart-description {
            width: 53%;
            float: left;
            margin: 3.2em 1%;
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
            font-size: 1em;
            text-align: center;
        }

        .cart-price h3,
        .cart-total h3 {
            margin: 3.2em 5% 3.2em 20%;
            width: 60%;
        }

        .cart-quantity input {
            margin: 3.2em 1%;
            border: none;
        }

        .remove {
            width: 10%;
            margin: 1px;
            float: right;
            clear: right;
        }

        .coupon {
            width: 20%;
            background-color: #dfd;
            margin: 1% 1% 1% 12.25%;
            float: left;
            height: 6em;
        }

        .coupon input {
            width: 60%;
            border: none;
            margin: 12.75% 5%;
            padding: 1%;
        }

        .coupon button {
            width: 25%;
            float: left;
            clear: right;
            margin: 12% 5% 12% 0;
        }

        .keep-shopping {
            width: 15%;
            height: 6em;
            float: left;
            margin: 1% auto;
            padding: 1%;
            background-color: #dfd;
        }

        .keep-shopping button {
            text-transform: uppercase;
            margin: 12% auto;

        }

        .checkout {
            width: 37.25%;
            margin: 1% 12.75% 1% 1%;
            float: right;
            background-color: #dfd;
            height: 6em;
        }

        .checkout button {
            width: 30%;
            clear: none;
            margin: 5.4% 0 5.4% 5.5%;
            text-transform: uppercase;
        }

        .final-cart-total {
            width: 15%;
            float: right;
            margin: 7%;
            background-color: White;
        }

        .final-cart-total h3 {
            color: Black;
        }
    </style>



    <!DOCTYPE html>
    <html>

    <head>
        <title>Product Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

<body>
    <nav class="header">
		<div class="logo">
			<img src="./img/imgLOGO.png" style="height: auto; width: 190px; display: flex; padding-top: 5px; padding-bottom: 5px;">
		</div>

		

		<div class="nav-items" style="margin-left: -108px;">

			<!-- The Menu items -->
			<li><a href="./dashboard.php">Home</a></li>
			<li><a href="./dashboard.php">Categories</a>
                <!-- <ul class="dropdown">
                    <li><a href="#">Latest Products</a></li>
                    <li><a href="#">Populer Products</a></li>
                </ul> -->
            </li>
			<li><a href="./dashboard.php">Contact us</a></li>
            <li><a href="./dashboard.php">About us</a></li>
		</div>
			
		<!-- Defining the search bars -->
		<div class="searchbar">
			<input type="text" placeholder="search" >
			<div class="icon">
				<i class="fas fa-search"></i>
			</div>
		</div>

		<!-- Defining the login button -->
		<div class="licon">
        <table>
                <tr>
                    <td class="link">
                        <?php
                            if(isset($_SESSION['uname']))
                            {
                                echo "<td>&emsp;<i class='fa fa-user fa-2x' aria-hidden='true' style='color:green'></i>&emsp;" . $_SESSION['uname'] . "&emsp; | &emsp;</td>";
                                echo "<td><i class='fa fa-sign-out fa-2x' aria-hidden='true' style='color:green'></i>&emsp;<a href='logout.php' style='font-size:18px'>logout</a></td>";
                                echo "<td>&emsp; | &emsp; <i class= 'fas fa-shopping-cart fa-2x' aria-hidden='true' style='color:green'></i>&emsp;<a style='font-size:large' class='cart' href='./cart.php'>Cart</a></td>";
                            }
                            else    
                            {
                                echo "&emsp;<i class='fa fa-user fa-2x' aria-hidden='true' style='color:green'></i>&emsp;<a style='font-size:large' class='login' href='./login_page.php'>Login</a>&emsp; | &emsp; <i class='fas fa-shopping-cart fa-2x' aria-hidden='true' style='color:green'></i>&emsp;<a style='font-size:large' class='cart' href='./cart.php'>Cart</a>";
                            }
                        ?>    
                    </td>
                    <td>

                    </td>
                </tr>
            </table>
            
		</div>
	</nav>
    <div class="listing-section">
        <div class="product">
            <div class="image-box">
                <div class="images" id="image-1"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Asura – Travertine Cream Marble Pedestal Basin</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.4,500</h3>

                <label for="item-1-quantity">Quantity:</label>
                <input type="text" name="item-1-quantity" id="item-1-quantity" min="1" max="10" value="1">
                <!-- <button type="button" name="item-1-button" id="item-1-button">Add to Cart</button> -->
                <form action="./item.php" method="post">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
                </form>


            </div>
        </div>
        <div class="product">
            <div class="image-box">
                <div class="images" id="image-2"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Caves – Travertine Cream Marble Pedestal Basin</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.5000</h3>

                <label for="item-2-quantity">Quantity:</label>
                <input type="text" name="item-2-quantity" id="item-2-quantity" value="1">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
            </div>
        </div>
        <div class="product">
            <div class="image-box">
                <div class="images" id="image-3"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Keyon Crema – Travertine Marble Pedestal Basin</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.4,500</h3>
                <label for="item-3-quantity">Quantity:</label>
                <input type="text" name="item-3-quantity" id="item-3-quantity" value="1">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
            </div>
        </div>
        <div class="product">
            <div class="image-box">
                <div class="images" id="image-4"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Centaur – Honey Onyx Pedestal Basin</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.1,500</h3>

                <label for="item-4-quantity">Quantity:</label>
                <input type="text" name="item-4-quantity" id="item-4-quantity" value="1">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
            </div>
        </div>
        <div class="product">
            <div class="image-box">
                <div class="images" id="image-5"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Pop-Up Waste Coupling (Marble & Onyx)</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.3,999</h3>

                <label for="item-5-quantity">Quantity:</label>
                <input type="text" name="item-5-quantity" id="item-5-quantity" value="1">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
            </div>
        </div>
        <div class="product">
            <div class="image-box">
                <div class="images" id="image-6"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Aura Crema – Travertine Cream Marble Basin</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.4,999</h3>

                <label for="item-6-quantity">Quantity:</label>
                <input type="text" name="item-6-quantity" id="item-6-quantity" value="1">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
            </div>
        </div>
        <div class="product">
            <div class="image-box">
                <div class="images" id="image-7"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Aura Emperador – Dark Emperador Marble Basin</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.6,299</h3>

                <label for="item-7-quantity">Quantity:</label>
                <input type="text" name="item-7-quantity" id="item-7-quantity" value="1">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
            </div>
        </div>
        <div class="product">
            <div class="image-box">
                <div class="images" id="image-8"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Carino-L – Travertine Cream Marble Basin</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.8,999</h3>

                <label for="item-8-quantity">Quantity:</label>
                <input type="text" name="item-8-quantity" id="item-8-quantity" value="1">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
            </div>
        </div>
        <div class="product">
            <div class="image-box">
                <div class="images" id="image-9"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Vector Noir – Nero Marquina Marble Basin</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.2,330</h3>

                <label for="item-9-quantity">Quantity:</label>
                <input type="text" name="item-9-quantity" id="item-9-quantity" value="1">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
            </div>
        </div>
        <div class="product">
            <div class="image-box">
                <div class="images" id="image-10"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Freya – Honey Onyx Basin&emsp;&emsp;&emsp;</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.6,300</h3>

                <label for="item-10-quantity">Quantity:</label>
                <input type="text" name="item-10-quantity" id="item-10-quantity" value="1">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
            </div>
        </div>

        <div class="product">


            <div class="image-box">
                <div class="images" id="image-11"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Freya – Honey Onyx Basin&emsp;&emsp;&emsp;</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.1,200</h3>

                <label for="item-10-quantity">Quantity:</label>
                <input type="text" name="item-10-quantity" id="item-10-quantity" value="1">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
            </div>
        </div>

        <div class="product">


            <div class="image-box">
                <div class="images" id="image-12"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Freya – Honey Onyx Basin&emsp;&emsp;&emsp;</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.9,300</h3>

                <label for="item-10-quantity">Quantity:</label>
                <input type="text" name="item-10-quantity" id="item-10-quantity" value="1">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
            </div>
        </div>
    </div>
    </div>  



    <div class="product">
            <div class="image-box">
                <div class="images" id="image-1"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Asura – Travertine Cream Marble Pedestal Basin</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.4,500</h3>

                <label for="item-1-quantity">Quantity:</label>
                <input type="text" name="item-1-quantity" id="item-1-quantity" min="1" max="10" value="1">
                <!-- <button type="button" name="item-1-button" id="item-1-button">Add to Cart</button> -->

                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>


            </div>
        </div>
        <div class="product">
            <div class="image-box">
                <div class="images" id="image-2"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Caves – Travertine Cream Marble Pedestal Basin</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.5000</h3>

                <label for="item-2-quantity">Quantity:</label>
                <input type="text" name="item-2-quantity" id="item-2-quantity" value="1">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
            </div>
        </div>
        <div class="product">
            <div class="image-box">
                <div class="images" id="image-3"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Keyon Crema – Travertine Marble Pedestal Basin</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.4,500</h3>
                <label for="item-3-quantity">Quantity:</label>
                <input type="text" name="item-3-quantity" id="item-3-quantity" value="1">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
            </div>
        </div>
        <div class="product">
            <div class="image-box">
                <div class="images" id="image-4"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Centaur – Honey Onyx Pedestal Basin</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.1,500</h3>

                <label for="item-4-quantity">Quantity:</label>
                <input type="text" name="item-4-quantity" id="item-4-quantity" value="1">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
            </div>
        </div>
        <div class="product">
            <div class="image-box">
                <div class="images" id="image-5"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Pop-Up Waste Coupling (Marble & Onyx)</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.3,999</h3>

                <label for="item-5-quantity">Quantity:</label>
                <input type="text" name="item-5-quantity" id="item-5-quantity" value="1">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
            </div>
        </div>
        <div class="product">
            <div class="image-box">
                <div class="images" id="image-6"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Aura Crema – Travertine Cream Marble Basin</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.4,999</h3>

                <label for="item-6-quantity">Quantity:</label>
                <input type="text" name="item-6-quantity" id="item-6-quantity" value="1">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
            </div>
        </div>
        <div class="product">
            <div class="image-box">
                <div class="images" id="image-7"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Aura Emperador – Dark Emperador Marble Basin</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.6,299</h3>

                <label for="item-7-quantity">Quantity:</label>
                <input type="text" name="item-7-quantity" id="item-7-quantity" value="1">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
            </div>
        </div>
        <div class="product">
            <div class="image-box">
                <div class="images" id="image-8"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Carino-L – Travertine Cream Marble Basin</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.8,999</h3>

                <label for="item-8-quantity">Quantity:</label>
                <input type="text" name="item-8-quantity" id="item-8-quantity" value="1">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
            </div>
        </div>
        <div class="product">
            <div class="image-box">
                <div class="images" id="image-9"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Vector Noir – Nero Marquina Marble Basin</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.2,330</h3>

                <label for="item-9-quantity">Quantity:</label>
                <input type="text" name="item-9-quantity" id="item-9-quantity" value="1">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
            </div>
        </div>
        <div class="product">
            <div class="image-box">
                <div class="images" id="image-10"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Circa Bianca – White Onyx Basin</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.6,300</h3>

                <label for="item-10-quantity">Quantity:</label>
                <input type="text" name="item-10-quantity" id="item-10-quantity" value="1">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
            </div>
        </div>

        <div class="product">


            <div class="image-box">
                <div class="images" id="image-11"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Rimless Wall-Hung Toilet with Slim UF Seat Cover</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.1,200</h3>

                <label for="item-10-quantity">Quantity:</label>
                <input type="text" name="item-10-quantity" id="item-10-quantity" value="1">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
            </div>
        </div>

        <div class="product">


            <div class="image-box">
                <div class="images" id="image-12"></div>
            </div>
            <div class="text-box">
                <h2 class="item">Freya – Honey Onyx Basin &emsp;&emsp;&emsp;</h2>
                <h3 style="font-weight: bolder; color: red;" class="price">Rs.9,300</h3>

                <label for="item-10-quantity">Quantity:</label>
                <input type="text" name="item-10-quantity" id="item-10-quantity" value="1">
                <button>
                    <div class="default-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle r="3" cy="12" cx="12"></circle>
                        </svg>
                        <span>Quick View</span>
                    </div>
                    <div class="hover-btn">
                        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none"
                            stroke-width="2" stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                            <circle r="1" cy="21" cx="9"></circle>
                            <circle r="1" cy="21" cx="20"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Shop Now</span>
                    </div>
                </button>
            </div>
        </div>
    </div>
</div> -->

</body>

</html>

</body>

</html>