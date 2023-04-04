<!DOCTYPE html>
<html>
<head>
<title>Master Page</title>
<link rel='stylesheet' href="./css/master.css">
<script src="https://kit.fontawesome.com/9147789c41.js" crossorigin="anonymous"></script>
</head>
<body>


<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}

$sql = "SELECT u_id, firstName, lastName, username, email, phoneNo, gender, dob FROM register_page where status_id = 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th id='title_th' colspan='10'>Registartion Records</th></tr><tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>username</th><th>email-id</th><th>phone No</th><th>Gender</th><th>Date of Birth</th><th>Operations</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["u_id"]. "</td>
                <td>" . $row["firstName"]. "</td>
                <td>" . $row["lastName"]. "</td>
                <td>" . $row["username"]. "</td>
                <td>" . $row["email"]. "</td>
                <td>" . $row["phoneNo"]. "</td>
                <td>" . $row["gender"]. "</td>
                <td>" . $row["dob"]. "</td>
                <td><a href='./updateFrom.php?id2=".$row['u_id']."'><i class='fa-solid fa-pen-to-square fa-xl'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href='./delete.php?id=".$row['u_id']."'><i class='fa-solid fa-trash-can fa-xl'></i></a></tr>";
     }
    echo "</table>";    
} else {
    echo "0 results";
}
?>
<?php

$limit = 2;   

if (isset($_GET["page"])) 
{ 
       $pn = $_GET["page"]; 
} 
 else { 
    $pn=1; 
};  

$start_from = ($pn-1) * $limit;  



// //     while ($row = mysql_fetch_array($rs_result, MYSQL_ASSOC)) { 
// //     // Display each field of the records.

// //         echo "<tr><td>" . $row["u_id"]. "</td>
// //         <td>" . $row["firstName"]. "</td>
// //         <td>" . $row["lastName"]. "</td>
// //         <td>" . $row["username"]. "</td>
// //         <td>" . $row["email"]. "</td>
// //         <td>" . $row["phoneNo"]. "</td>
// //         <td>" . $row["gender"]. "</td>
// //         <td>" . $row["dob"]. "</td>
// //         <td><a href='./updateFrom.php?id2=".$row['u_id']."'><i class='fa-solid fa-pen-to-square fa-xl'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 //         <a href='./delete.php?id=".$row['u_id']."'><i class='fa-solid fa-trash-can fa-xl'></i></a></tr>";
//};
  
    // $sql3 = "SELECT COUNT(*) FROM register_page";  
    // $rs_result = mysql_query($sql3);  
    // $row = mysql_fetch_row($rs_result);  
    // $total_records = $row[0];  
    // // Number of pages required.
    // $total_pages = ceil($total_records / $limit);  
    // $pagLink = "";                      
    // for ($i=1; $i<=$total_pages; $i++) {
    // if($i==$pn) 
    //     $pagLink .= "<li class='active'><a href='master.php?page=".$i."'>".$i."</a></li>";
    // else
    //    $pagLink .= "<li><a href='master.php?page=".$i."'>".$i."</a></li>";  
    // };  
    // echo $pagLink;

?>



</body>
</html>