<?php
    
    session_start();
//echo $_SESSION['email'];
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

    // $uid = $_REQUEST['u_id'];
    // $first_name =  $_REQUEST['firstName'];
    // $last_name = $_REQUEST['lastName'];
    // $username  =  $_REQUEST['username'];
    // //$status = $_REQUEST['status_id'];
    // $email = $_REQUEST['email'];
    // $phoneNo = $_REQUEST['phoneNo'];
    // $gender = $_REQUEST['gender'];
    // $dob = $_REQUEST['dob'];

    // $sql = "INSERT INTO register_page  VALUES ('$uid','$first_name', 
    //         '$last_name','$username',1,'$email','$phoneNo','$gender','$dob')";
	if ($_SERVER['REQUEST_METHOD']=='POST')
	{
		$username = $_POST['uname'];
		$password = $_POST['pwd'];
		


		$sql= "SELECT * FROM register_page WHERE username='$username' AND password = '$password' ";
		//echo $sql;

		//exit(0);
		//$result = mysqli_query($conn,$sql);
		//$check = mysqli_fetch_array($result);
		$result = $conn->query($sql);
		//echo $check;

		if($result->num_rows==1)
		{
			session_start();
			$_SESSION['uname']=$_POST['uname'];
			$_SESSION['pwd']=$_POST['pwd'];
			header("location:./dashboard.php");
		}else{
			//echo "Invalid Login Credentials";
			echo '<script>alert("⚠ Invalid Login Credentials")</script>';
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="icon" type="image/png" href="path-to-your-favicon"/><link rel="icon" type="image/png" href="./img/rem.png"/>
	<link rel="stylesheet" type="text/css" href="./css/login_page.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="path-to-your-favicon"/><link rel="icon" type="image/png" href="./img/rem.png"/>
</head>
<body>


	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="./login_page.php" method="POST" name="loginForm">
				<img class="logo-login" src="./img/imgLOGO.png" style="	height: 60px; margin-left: 167px; margins-bottom: -38px;">
				<hr class="hr">
				<h2 class="title">Login</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="uname">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="pwd">
            	   </div>
            	</div>
            	<a href="./forget_page.php">Forgot Password?</a>
            	<!-- <input type="submit" class="btn" value="Login"> -->
				<button class="btn" type="submit">Submit</button>
				<a href="./register.php">------------ Are you new user? ------------</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>

