<?php
session_start();
if (isset($_POST['id'])) {
  $_SESSION['id'] = $_POST['id'];
  echo $_SESSION['id'];

  header("Location: ./item.php");
}
?>


<!-- Products -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>e-Cera | Product Page</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="icon" type="image/png" href="path-to-your-favicon" />
  <link rel="icon" type="image/png" href="./img/rem.png" />
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

  <!-- Latest compiled and minified CSS -->

  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />

  <!-- Latest compiled and minified JavaScript -->

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Linking the stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/dashboard.css">

  <!-- Linking the Jquery script -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
      margin-top: 30px;
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
      height: auto;
      width: 100%;
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
      e text-align: center;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
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


      .checkout {
        width: 37.25%;
        margin: 1% 12.75% 1% 1%;
        float: right;
        background-color: #dfd;
        height: 6em;
      }
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


    < !--
    /* <!DOCTYPE html>
  <html>

  <head>
    <title>Product Page</title>
    <link rel="stylesheet" type="text/css" href="style.css"> --> */

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


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</head>


<body>
  <nav class="header">
    <div class="logo">
      <img src="./img/imgLOGO.png"
        style="height: auto; width: 190px; display: flex; padding-top: 5px; padding-bottom: 5px;">
    </div>


    <script>
      document.addEventListener('click', function (e) {
        // Hamburger menu
        if (e.target.classList.contains('hamburger-toggle')) {
          e.target.children[0].classList.toggle('active');
        }
      }) 
    </script>
    <div class="nav-items" style="margin-left: -108px;">

      <!-- The Menu items -->
      <li><a href="./dashboard.php">Home</a></li>
      <!-- <li><a href="./productpage.php">Procuts</a></li> -->
      <!-- <ul class="dropdown">
                <li><a href="#">Latest Products</a></li>
                <li><a href="#">Populer Products</a></li>
            </ul> -->
      <!-- Category dropdown menu -->
      <li class="nav-item dropdown" style="margin-top: -4px;">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Category</a>
        <ul class="dropdown-menu shadow">
          <?php
          // Connect to your database
          $conn = mysqli_connect("localhost", "root", "", "project");

          // Check for errors in the database connection
          if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
          }

          // Fetch subcategories from the database
          $subcategories = mysqli_query($conn, "SELECT DISTINCT sub_catagory FROM categories");

          // Loop through the subcategories and display them in the dropdown menu
          while ($subcategory = mysqli_fetch_assoc($subcategories)) {
            echo '<li class="dropend">';
            echo '<a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">' . $subcategory["sub_catagory"] . '</a>';

            // Fetch categories for the current subcategory
            $categories = mysqli_query($conn, "SELECT DISTINCT categories FROM categories WHERE sub_catagory='" . $subcategory["sub_catagory"] . "'");

            // Loop through the categories and display them in a submenu
            echo '<ul class="dropdown-menu">';
            while ($category = mysqli_fetch_assoc($categories)) {
              echo '<li><a class="dropdown-item" href="productpage.php?category=' . $category["categories"] . '&subcategory=' . $subcategory["sub_catagory"] . '">' . $category["categories"] . '</a></li>';
            }
            echo '</ul>';

            echo '</li>';
          }

          // Close the database connection
          mysqli_close($conn);
          ?>
        </ul>
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
          <input type="text" placeholder="Search..."
            style="border-radius: 50px; width: 563px; text-align: start; padding-left: 27px; caret-color: green;">
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



  <div>
    <?php if ($category && $subcategory) { ?>
      <p>Selected Category:
        <?php echo $subcategory; ?>
      </p>
      <p>Selected Subcategory:
        <?php echo $category; ?>
      </p>
    <?php } ?>
  </div>




  <?php
  // Database credentials
  $db_host = 'localhost:3306';
  $db_user = 'root';
  $db_pass = '';
  $db_name = 'project';

  // Connect to database
  $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

  // Check for errors
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  ?>


  <?php
  // Retrieve selected products from database based on category and subcategory
  $category = isset($_GET['category']) ? $_GET['category'] : '';
  $subcategory = isset($_GET['subcategory']) ? $_GET['subcategory'] : '';
  if ($category && $subcategory) {
    $query = "SELECT * FROM products WHERE sub_catagory='$category' AND main_categories='$subcategory'";
  } else {
    $query = "SELECT * FROM products";
  }



  $result = $conn->query($query);

  // Check for errors
  if (!$result) {
    die("Error retrieving products: " . $conn->error);
  }
  ?>


  <!-- Display products -->


  
  <div>
    <h2 class="section-head" style="    margin-top: 43px;
    margin-left: 380px;"><?php if ($category && $subcategory) {
      echo $subcategory . " - " . $category;
      ; ?> <?php } ?>
    </h2>
  </div>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <?php while ($product = $result->fetch_assoc()) { ?>

    <div class="product">
      <form action="./productpage.php" method="post">
        <div class="image-box">
          <img class="images" src=" ./img/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
        </div>
        <div class="text-box">
          <h2 class="item">
            <?php echo $product['name']; ?>
          </h2>
          <input type="hidden" value="<?php echo $product['description']; ?>"></input>
          <h3 style="font-weight: bolder; color: red; font-size: 20px ;" class="price">₹
            <?php echo $product['price']; ?>
          </h3>
          <input type="hidden" value="<?php echo $product['id'] ?>" name="id">
          <button>
            <div class="default-btn">
              <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none" stroke-width="2"
                stroke="#FFF" height="20" width="20" viewBox="0 0 24 24">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle r="3" cy="12" cx="12"></circle>
              </svg>
              <span>Quick View</span>
            </div>
            <div class="hover-btn">
              <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none" stroke-width="2"
                stroke="#ffd300" height="20" width="20" viewBox="0 0 24 24">
                <circle r="1" cy="21" cx="9"></circle>
                <circle r="1" cy="21" cx="20"></circle>
                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
              </svg>
              <span>Add to Cart</span>
            </div>
          </button>
        </div>
      </form>
    </div>
  <?php } ?>

</body>

</html>