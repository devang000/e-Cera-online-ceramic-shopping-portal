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
    $quantity = $_POST['quantity'];
    
    // Check if an image was uploaded
    if (isset($_FILES['image'])) {
        $image = $_FILES['image']['name'];
        $target_dir = 'images/';
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
            $query = "INSERT INTO products (name, description, price, quantity, image) VALUES ('$name', '$description', $price, $quantity, '$image')";
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

<!DOCTYPE html>
<html>
<head>
    <title>Add New Product</title>
</head>
<body>
    <h1>Add New Product</h1>
    <form method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>
        
        <label for="description">Description:</label>
        <textarea name="description" required></textarea><br><br>
        
        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" min="0" required><br><br>
        
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" min="0" required><br><br>
        
        <label for="image">Image:</label>
        <input type="file" name="image" required><br><br>
        
        <input type="submit" value="Add Product">
    </form>
</body>
</html>
