<?php
require('top.inc.php');

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
$res = mysqli_query($conn, $sql);

?>
<head>
<link rel="icon" type="image/png" href="path-to-your-favicon"/><link rel="icon" type="image/png" href="./img/rem.png"/>
</head>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Users </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   
							   <th>ID</th>
							   <th>firstName</th>
							   <th>lastName</th>
							   <th>username</th>
							   <th>email</th>
							   <th>phoneNo</th>
							   <th>gender</th>
							   <th>dob</th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['firstName']?></td>
							   <td><?php echo $row['lastName']?></td>
							   <td><?php echo $row['username']?></td>
							   <td><?php echo $row['email']?></td>
							   <td><?php echo $row['phoneNo']?></td>
							   <td><?php echo $row['gender']?></td>
							   <td style="text-align: center;"><?php echo $row['dob']?></td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>