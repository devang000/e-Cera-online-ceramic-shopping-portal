

<?php
require('top.inc.php'); ?>
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

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $main_category = $_POST['main_category'];
    $sub_category = $_POST['sub_category'];

    // Check if an image was uploaded
    if (isset($_FILES['image'])) {
        $target_dir = '../../project/img/';
        $target_file = $target_dir . basename($_FILES['image']['name']);

        // Check if the file type is valid
        $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_file_types = array('jpg', 'jpeg', 'png', 'gif');
        if (!in_array($image_file_type, $allowed_file_types)) {
            die('Error: Only JPG, JPEG, PNG, and GIF files are allowed.');
        }

        // Upload the image
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            // Add the product to the database
            $query = "INSERT INTO products (name, description, price, image, main_categories, sub_catagory) VALUES ('$name', '$description', '$price', '$image', '$main_category', '$sub_category')";
            if ($conn->query($query) === TRUE) {
                header('Location: product.php');
                exit();
            } else {
                die('Error adding product: ' . $conn->error);
            }
        } else {
            die('Error uploading image.');
        }
    } else {
        die('Error: No image was uploaded.');
    }
}

// Close database connection
$conn->close();
?>

<head>
<link rel="icon" type="image/png" href="path-to-your-favicon"/><link rel="icon" type="image/png" href="./img/rem.png"/>
</head>
<div class="content pb-0">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header"><strong>Product</strong><small> Form</small></div>
					<form method="post" enctype="multipart/form-data">
						<div class="card-body card-block">

							<label for="name" class=" form-control-label">Product Name</label>
							<div class="form-group">
								<input type="text" name="name" placeholder="Enter product name" class="form-control">
							</div>

							<div class="form-group">
								<label for="description" class=" form-control-label">Description</label>
								<input type="text" name="description" placeholder="Enter product description"
									class="form-control">
							</div>

							<div class="form-group">
								<label for="price" class=" form-control-label">Price (₹)</label>
								<input type="text" name="price" placeholder="Enter product MRP" value=""
									class="form-control">
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
							
							<button id="payment-button" name="submit" type="submit"
								class="btn btn-lg btn-info btn-block">
								<span id="payment-button-amount">Submit</span>
							</button>
						</div>
					</form>	
				</div>
			</div>
		</div>
	</div>
</div>

<?php
require('footer.inc.php');
?>