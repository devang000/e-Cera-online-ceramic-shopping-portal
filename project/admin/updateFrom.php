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


        $id = $_GET["id2"];

        if($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $id = $_POST["id"];
            $pnm = $_POST["product_name"];
            $price = $_POST["product_price"];
            $qty = $_POST["product_qty"];
            $img = $_POST["product_image"];
            $catagory = $_POST["product_catagory"];
            $desc = $_POST["product_desc"];

            $upd = "UPDATE product SET pnm='$pnm', pprice='$price', pqty='$qty', pimage='$img', pcatagory='$catagory', product_desc='$desc' WHERE id = $id";

            
            $updres = mysqli_query($conn, $upd);
            if ($conn->query($upd) == TRUE) {
                echo "Records updated successfully: ";
            } else {
                echo "Error: ".$sql."<br>".$conn->error;
            }
        }else{
            $sql = "SELECT * FROM product WHERE id = $id";
            $result = mysqli_query($conn, $sql);
//echo $u_id, $firstname, $lastname, $username, $email, $phoneNo, $gender, $dob;
            $result = $conn->query($sql);

            if ($result->num_rows > 0) 
            {
    // output data of each row
             while($row = $result->fetch_assoc()) {}
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Update products</title>
    <link rel="stylesheet" type="text/css" href="./css/master.css">
</head>
    <body>

        <h3><center>Update Products</center></h3>
        <form action="./updateFrom.php" name="form1" method="POST" enctype="multipart/form-data">
            <table align=center>
                <br><br>
                <tr>
                    <td>Product name : </td>
                    <td><input type="text" name="pnm"></td>
                </tr>
                
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr>
                    <td>Product price : </td>
                    <td><input type="text" name="pprice"></td>
                </tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr>
                    <td>Product Quantity : </td>
                    <td><input type="text" name="pqty"></td>
                </tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr>
                    <td>Select Product Image : </td>
                    <td><input type="file" name="pimage"></td>
                </tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                </tr>
                <tr>
                    <td>Select Product Catagory : </td>
                    <td>
                        <select name="pcatagory">
                            <option value="latest_products">Latest products</option>
                            <option value="populer_products">Populer products</option>
                        </select>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr>
                    <td>Product Description : </td>
                    <!-- <td><input type="textareas" name="product_desc"></td> -->
                    <td><textarea name="product_desc" rows="5" cols="50" placeholder="Enter brief description about your product...."></textarea></td>
                </tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit1" value="Update Product"></td>
                </tr>
            </table>
        </form>
    </body>
</html>