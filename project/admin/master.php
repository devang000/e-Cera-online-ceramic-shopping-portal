    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin | Master Page</title>
        <script src="https://kit.fontawesome.com/9147789c41.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="./css/master.css">
    </head>
    <body>
        <header class="header">
            <a href="./addProduct.php">Add Product</a>
        </header>
    </body>
    </html>

    <?php
            session_start();

            $servername = "localhost:3306";
            $username = "root";
            $password = "";
            $dbname = "project";
            
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }


            $sql = "SELECT id, product_name, product_price, product_qty, product_image, product_catagory, product_desc FROM product where status_id = 1";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table id='table'><tr><th id='title_th' colspan='10'>My Products</th></tr>
                <tr>
                    <th id='th'>id</th>
                    <th id='th'>Product Name</th>
                    <th id='th'>Product Price</th>
                    <th id='th'>Product Quantity</th>
                    <th id='th'>Product Image</th>
                    <th id='th'>Product Catagory</th>
                    <th id='th'>Product Description</th>
                    <th id='th'>Actions</th>
                </tr>";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td id='td'>" . $row["id"]. "</td>
                            <td id='td'>" . $row["product_name"]. "</td>
                            <td id='td'>" . $row["product_price"]. "</td>
                            <td id='td'>" . $row["product_qty"]. "</td>
                            <td id='td'>" . $row["product_image"]. "</td>
                            <td id='td'>" . $row["product_catagory"]. "</td>
                            <td id='td'>" . $row["product_desc"]. "</td>
                            <td id='td'><a href='./updateFrom.php?id2=".$row['id']."'><i class='fa-solid fa-pen-to-square fa-xl'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href='./delete.php?id=".$row['id']."'><i class='fa-solid fa-trash-can fa-xl'></i></a></tr>";
                }
                echo "</table>";    
            } else {
                echo "0 results";
            }        
    ?>