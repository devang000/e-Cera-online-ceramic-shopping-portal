<?php
require('top.inc.php');

$servername = "localhost: 3306";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle delete product request
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Product deleted successfully!'); window.location.href='product.php';</script>";
        echo "<script>window.location.reload();</script>";

    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>

<?php
// Check if status parameter is set to success
if (isset($_GET['status']) && $_GET['status'] == 'success') {
    // Display success toast alert
    echo '<script>toastr.success("Product updated successfully")</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Cera | Admin - Products</title>

    <link href="toastr.css" rel="stylesheet" />


    <link rel="icon" type="image/png" href="path-to-your-favicon" />
    <link rel="icon" type="image/png" href="./img/rem.png" />
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


    <!-- Linking the Jquery script -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <style>
        .desc-col {
            width: 22%;
        }

        td a {

            margin-right: 5px;
        }
    </style>

</head>

<body>
    <div class="content pb-0">
        <div class="orders">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="box-title">Products:</h4>
                                </div>
                                <div class="col-auto">
                                    <a href="manage_product.php" class="btn btn-success"><i class="fa fa-plus"
                                            aria-hidden="true">&nbsp;</i>
                                        Add New Product</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Main-Category</th>
                                            <th>Sub-Category</th>
                                            <th class="desc-col" style="text-align: center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $res = mysqli_query($conn, "SELECT * FROM products");
                                        $i = 1;

                                        while ($row = mysqli_fetch_assoc($res)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $i ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['name'] ?>
                                                </td>
                                                <td>
                                                    <img src="../../project/img/<?php echo $row['image']; ?>">
                                                </td>
                                                <td class="desc-col">
                                                    <textarea readonly
                                                        style="cursor: not-allowed;"><?php echo $row['description'] ?></textarea>
                                                </td>
                                                <td>
                                                    ₨.
                                                    <?php echo $row['price'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['main_categories'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['sub_catagory'] ?>
                                                </td>
                                                <td>
                                                    <a href="update_product.php?id=<?php echo $row['id'] ?>">
                                                        <button class='btn btn-primary btn-sm'><i class='fa fa-edit'></i>
                                                            Edit</button></a>

                                                    <a href="delete_product.php?id=<?php echo $row['id'] ?>"
                                                        onclick="return confirm('Are you sure you want to delete this product?')"><button
                                                            class='btn btn-danger btn-sm'><i class='fa fa-trash'></i>
                                                            Delete</button></a>

                                                </td>

                                            </tr>
                                            <?php
                                            $i++;
                                        }
                                        ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
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