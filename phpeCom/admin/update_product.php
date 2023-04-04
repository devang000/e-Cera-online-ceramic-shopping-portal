<?php
require('top.inc.php');

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

//get the product details
$product_id = $_GET['id'];


//check if the form is submitted
if(isset($_POST['update'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $main_category = $_POST['main_category'];
    $sub_category = $_POST['sub_category'];

    //get the image file name
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    //update query
    $query = "UPDATE products SET name = '$name', 
    description = '$description', price = '$price', image = '$image', main_categories = '$main_category', sub_catagory = '$sub_category'  WHERE id = $product_id";

    //move uploaded image file to destination directory
    move_uploaded_file($image_tmp, "product_images/$image");

    //execute query and show message
    if(mysqli_query($conn, $query)) {
        // Redirect to product.php
        header('Location: product.php?status=success');
        exit;
    } else {
        echo "Error updating product: " . mysqli_error($conn);
    }
    
}


//fetch product details from database
$result = mysqli_query($conn, "SELECT * FROM products WHERE id = $product_id");
$row = mysqli_fetch_assoc($result);

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Cera | Admin - Update Product Page</title>
    <link rel="icon" type="image/png" href="path-to-your-favicon"/><link rel="icon" type="image/png" href="./img/rem.png"/>
</head>
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<!-- 
    RTL version
-->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.rtl.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.rtl.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>
<body>
    <div class="content pb-0">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header"><strong>Product</strong><small> Form</small></div>
                        <form method="post" type="submit" enctype="multipart/form-data">
                            <div class="card-body card-block">

                                <div class="form-group">
                                    <label for="name" class=" form-control-label">Product Name</label>
                                    <input type="text" name="name" placeholder="Enter product name" class="form-control"
                                        value="<?php echo $row['name']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="description" class=" form-control-label">Description</label>
                                    <input type="text" name="description" placeholder="Enter product description"
                                        class="form-control" value="<?php echo $row['description']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="price" class=" form-control-label">Price (₹)</label>
                                    <input type="text" name="price" placeholder="Enter product price"
                                        class="form-control" value="<?php echo $row['price']; ?>">

                                </div>

                                <div class="form-group">
								<label for="main_category" class="form-control-label">Main-Category</label>
								<select name="main_category" class="form-control">
								<option value="" selected disabled>Select Main-Category</option>
									<?php
										// Replace 'database_name', 'username', and 'password' with your database credentials
										$pdo = new PDO("mysql:host=localhost:3306;dbname=project", "root", "");

										// Retrieve the list of subcategories from the 'categories' table
										$stmt = $pdo->query("SELECT DISTINCT sub_catagory FROM categories");

										// Loop through each row and add an option for each subcategory
										while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
											echo '<option value="'.$row['sub_catagory'].'">'.$row['sub_catagory'].'</option>';
										}
									?>
								</select>
							</div>

							<div class="form-group">
								<label for="sub_category" class="form-control-label">Sub Category</label>
								<select name="sub_category" class="form-control" id="sub_category_select">
									<option value="" selected disabled>Select Sub Category</option>
								</select>
								</div>

								<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
								<script>
								$(document).ready(function() {
								// When the main category select element changes, send an AJAX request to retrieve the sub categories
								$('select[name="main_category"]').on('change', function() {
									var mainCategory = $(this).val();
									$.ajax({
									url: 'get_sub_categories.php',
									type: 'post',
									data: { main_category: mainCategory },
									dataType: 'json',
									success: function(response) {
										// Clear the sub category select element and add the new options
										$('select[name="sub_category"]').empty();
										$('select[name="sub_category"]').append('<option value="" selected disabled>Select Sub Category</option>');
										$.each(response, function(index, value) {
										$('select[name="sub_category"]').append('<option value="'+value+'">'+value+'</option>');
										});
									}
									});
								});
								});
							</script>

                                <div class="form-group">
                                    <label for="categories" class=" form-control-label">Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <button id="payment-button" name="update" type="submit"
                                    class="btn btn-lg btn-info btn-block">
                                    <span id="payment-button-amount">Update Details</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php
require('footer.inc.php');
?>