<?php

    SESSION_START();

    
    //$user = $_POST['uname'];
    // $bytes = openssl_random_pseudo_bytes(4);
    // $pass = bin2hex($bytes);
	//$e_mail = $_POST['email'];

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
	              

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $email = $_POST['email'];
        $sql = "SELECT * FROM register_page WHERE email = '$email'";
        $result = $conn->query($sql);

        if($result->num_rows==1)
        {
            $_SESSION['email'] = $_POST['email'];
            // echo "<p style='color:lightblue; font-weight: bold'>Correct Email id</p>";
			// $sql1 = "UPDATE register_page SET password = $pass WHERE email = '$e_mail'";
			// $exe = $connect->query($sql1);
            header("location:./email.php");
        }
        else{
            echo "<p style='color:red;'>" . "⚠ Your Email-Id was not found in database*" . "</p>";
        }
    }


    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\SMTP;
    // use PHPMailer\PHPMailer\Exception;
    // require_once ("./include/PHPMailer.php");
    // require_once ("./include/SMTP.php");
        
    // $mail = new PHPMailer(true);

    // try {
    //     //Enable SMTP debugging.
    //     $mail->SMTPDebug = 3;                               
    //     //Set PHPMailer to use SMTP.
    //     $mail->isSMTP();            
    //     //Set SMTP host name                          
    //     $mail->Host = "smtp.gmail.com";
    //     //Set this to true if SMTP host requires authentication to send email
    //     $mail->SMTPAuth = true;                          
    //     //Provide username and password     
    //     $mail->Username = "devanggohil61@gmail.com";                 
    //     $mail->Password = "test@123456789";                           
    //     //If SMTP requires TLS encryption then set it
    //     $mail->SMTPSecure = "tls";                           
    //     //Set TCP port to connect to
    //     $mail->Port = 587;                                   
        
    //     $mail->From = "devanggohil61@gmail.com";
    //     $mail->FromName = "Admin";
        
    //     $mail->addAddress("gohildev555@gmail.com", "Dear User");
        
    //     $mail->isHTML(true);
        
    //     $bytes = openssl_random_pseudo_bytes(4);
    //     $pass = bin2hex($bytes);
        
    //     //$mail->Subject = "Devang";
    //     //$mail->Body = "<b>Your New Password is 👇</b><br>" . $pass;//rand(111111, 999999);
    //     $mail->Subject = "Reset Password";
    //     $mail->Body = "<p>Dear User,<br> Your new password has been <b>Resetted</b><br>Now You can Login.<br><b> Your New Password =  " . $pass."</b>";
    //     $mail->AltBody = "";
                
    //     $mail->send();
    //     echo "Message has been sent successfully";
    //     } catch (Exception $e) {
    //         echo "Mailer Error: " . $mail->ErrorInfo;
    //     }

    //header("location:./index.php");
    

?> 











<!DOCTYPE html>
<html>
<head>
	<title>Forget password</title>
	<link rel="stylesheet" type="text/css" href="./css/forget.css">
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
			<form action="./forget_page.php" method = "POST">
				
				<h2 class="title">Reset Password</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email-id</h5>
           		   		<input type="email" class="input" name="email"> 
           		   </div>
           		</div>
           		
            	<input type="submit" class="btn" value="Reset password">
				
            </form>
			
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
