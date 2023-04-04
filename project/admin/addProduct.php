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


    
        if(isset($_POST['submit1']))
        {
            // $v1=rand(1111,9999);
            // $v2=rand(1111,9999);

            // $v3=$v1.$v2;
            // $v3=md5($v3);

            // $fnm=$_FILES['pimage']['name'];
            // $dst='./product_image/'.$v3.$fnm;
            // //$dst1="product_image/".$v3.$fnm;
            // move_uploaded_file($_FILES['pimage']['name'],$dst);


            // $name=$_REQUEST['pnm'];
            // $price=$_REQUEST['pprice'];
            // $qty=$_REQUEST['pqty'];
            // $catagory=$_REQUEST['pcatagory'];
            // $product_desc= $_REQUEST['product_desc'];

            $name=$_POST['pnm'];
            $price=$_POST['pprice'];
            $qty=$_POST['pqty'];
            $catagory=$_POST['pcatagory'];
            $product_desc= $_POST['product_desc'];


            $sql = "INSERT INTO product (product_name,product_price,product_qty,product_catagory,product_desc,status_id) VALUES ('$name', $price, $qty, '$catagory', '$product_desc',1)";
        
            if(mysqli_query($conn, $sql)){
                
                echo '<script>alert("✔ Values are Successfully inserted into Database.")</script>'; 
                //echo nl2br("$uid\n $first_name\n $last_name\n "
                    //. "$username\n $status\n $email\n $phoneNo\n $gender\n $dob");
            } else{
                echo "ERROR: Hush! Sorry $sql" 
                    . mysqli_error($conn);  
            }

        }



        

        
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Add products</title>
    <link rel="stylesheet" type="text/css" href="./css/master.css">
</head>
<body>
<header class="header">
        <a href="./master.php">View Product</a>
</header>
    <h3><center>Add Products</center></h3>
    <form action="./addProduct.php" name="form1" method="POST" enctype="multipart/form-data">
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
                <td align=center>
                    <input type="submit" name="submit1" value="Add Product">  
                </td>
            </tr>
        </table>
    </form>

</body>
</html>