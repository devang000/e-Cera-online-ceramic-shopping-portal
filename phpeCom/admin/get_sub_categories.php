<?php
// Replace 'database_name', 'username', and 'password' with your database credentials
$pdo = new PDO("mysql:host=localhost:3306;dbname=project", "root", "");

// Retrieve the list of subcategories from the 'categories' table
$stmt = $pdo->prepare("SELECT categories FROM categories WHERE sub_catagory = ?");
$stmt->execute(array($_POST['main_category']));
$subCategories = $stmt->fetchAll(PDO::FETCH_COLUMN);

echo json_encode($subCategories);
?>
