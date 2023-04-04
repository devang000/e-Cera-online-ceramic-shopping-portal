<?php


//echo "Hello this is update file";
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

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["u_id"];
    $fname = $_POST["firstName"];
    $lname = $_POST["lastName"];
    $uname = $_POST["username"];
    $dob = $_POST["dob"];
    $gen = $_POST["gender"];
    $email = $_POST["email"];
    $phoneNo = $_POST["phoneNo"];

    $upd = "UPDATE register_page SET firstName='$fname', lastName='$lname', username='$uname', dob='$dob', gender='$gen', email='$email', phoneNo='$phoneNo' WHERE u_id = $id";
    $updres = mysqli_query($conn, $upd);
    if ($conn->query($upd) === TRUE) {
	    echo "Records updated successfully: ";
    } else {
	    echo "Error: ".$sql."<br>".$conn->error;
    }
} else {


$sql = "SELECT * FROM register_page WHERE u_id = $id";
$result = mysqli_query($conn, $sql);
//echo $u_id, $firstname, $lastname, $username, $email, $phoneNo, $gender, $dob;

$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) {

?>

<!DOCTYPE html>
<html lang="en">

<head>
    
  

    <title>update record</title>


    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all"> 

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div style="background: white;" class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Update Form</h2>
                    <form method="POST" action="updateFrom.php" name="register_page">
                        <div class="row row-space">
                            <div class="col-2">
                            <form action="register.php">
                            <input type="hidden" name="u_id" value = "<?php echo $row["u_id"] ?>">
                            <input type="hidden" name="status_id">                            
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" name="firstName" value="<?php echo $row["firstName"] ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="lastName" value="<?php echo $row["lastName"] ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Username</label>
                                    <input class="input--style-4" type="text" name="username" value="<?php echo $row["username"] ?>">
                                </div>
                            </div>
                            
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date of Birth</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="dob" value="<?php echo $row["dob"] ?>">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender" value="male" >
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" value="<?php echo $row["email"] ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phoneNo" value="<?php echo $row["phoneNo"] ?>">
                                </div>
                            </div>
                        </div>
                             <div class="p-t-15">
                             <input class="btn btn--radius-2 btn--blue" type="submit" value="Update Record">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>

    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <script src="js/global.js"></script>

</body>
</html>

<?php    }
    // echo $u_id,$firstname,$lastname,$username,$email,$phoneNo,$gender,$dob;

}else {
    echo "0 results";
}
}
$conn->close();
?>