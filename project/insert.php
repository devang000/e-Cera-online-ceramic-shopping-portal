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

    $uid = $_REQUEST['u_id'];
    $first_name =  $_REQUEST['firstName'];
    $last_name = $_REQUEST['lastName'];
    $username  =  $_REQUEST['username'];
    $pass = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $phoneNo = $_REQUEST['phoneNo'];
    $gender = $_REQUEST['gender'];
    $dob = $_REQUEST['dob'];



    $_SESSION['email'] = $email;
    $_SESSION['firstName'] = $first_name;
    $_SESSION['lastName'] = $last_name;
    $_SESSION['phoneNo'] = $phoneNo;



    $sql = "INSERT INTO register_page  VALUES ('$uid','$first_name', 
            '$last_name','$username',$pass,1,'$email','$phoneNo','$gender','$dob')";

    if(mysqli_query($conn, $sql)){
        header('Location: login_page.php');
        //echo "<br><br><h2 style=font-family: verdana; font-weight: bold; ><a href='./homepage.php'>>> GO TO LOGIN >>></a><h2>";
        echo '<script>alert("✔ Values are Successfully inserted into Database.")</script>'; 
        //echo "<br><br><h2 style=font-family: verdana; font-weight: bold; ><a href='./master.php'>>> SHOW ALL RECORDS >>></a><h2>";
        //echo nl2br("$uid\n $first_name\n $last_name\n "
            //. "$username\n $status\n $email\n $phoneNo\n $gender\n $dob");
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);  
    }
?>


