<?php

session_start();

//echo $_SESSION['email'];      
?>
<html>

<head>

<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
<script src="assets/plugins/global/plugins.bundle.js"></script>


  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="icon" type="image/png" href="path-to-your-favicon" />
  <link rel="icon" type="image/png" href="./img/rem.png" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->


  <link href="toastr.css" rel="stylesheet">
  <script src="toastr.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

  <link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <!-- Latest compiled and minified CSS -->

  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />

  <!-- Latest compiled and minified JavaScript -->

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/9147789c41.js" crossorigin="anonymous"></script>

  <!-- Linking the stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/dashboard.css">

  <!-- Linking the Jquery script -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>


  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">




</head>
<style>
  body {
    text-align: center;
    padding: 40px 0;
    background: #EBF0F5;
  }

  h1 {
    color: #88B04B;
    font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
    font-weight: 900;
    font-size: 40px;
    margin-bottom: 10px;
  }

  p {
    color: #404F5E;
    font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
    font-size: 20px;
    margin: 0;
  }

  i {
    color: #9ABC66;
    font-size: 100px;
    line-height: 200px;
    margin-left: -15px;
  }

  .card {
    background: white;
    padding: 60px;
    border-radius: 4px;
    box-shadow: 0 2px 3px #C8D0D8;
    display: inline-block;
    margin: 0 auto;
  }

  /* CSS */
  .button-3 {
    appearance: none;
    background-color: #2ea44f;
    border: 1px solid rgba(27, 31, 35, .15);
    border-radius: 6px;
    box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-family: -apple-system, system-ui, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
    font-size: 14px;
    font-weight: 600;
    line-height: 20px;
    padding: 6px 16px;
    position: relative;
    text-align: center;
    text-decoration: none;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    vertical-align: middle;
    white-space: nowrap;
  }

  .button-3:focus:not(:focus-visible):not(.focus-visible) {
    box-shadow: none;
    outline: none;
  }

  .button-3:hover {
    background-color: #2c974b;
  }

  .button-3:focus {
    box-shadow: rgba(46, 164, 79, .4) 0 0 0 3px;
    outline: none;
  }

  .button-3:disabled {
    background-color: #94d3a2;
    border-color: rgba(27, 31, 35, .1);
    color: rgba(255, 255, 255, .8);
    cursor: default;
  }

  .button-3:active {
    background-color: #298e46;
    box-shadow: rgba(20, 70, 32, .2) 0 1px 0 inset;
  }
</style>

<body>
  <div class="card">
    <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
      <i class="checkmark">✓</i>
    </div>
    <h1>Done</h1>
    <p>Your payment was successfully recevied by e-Cera team<br /> we'll be in touch shortly!</p>
    <br><br><br>
    <table style="margin-left: 68px">
      <tr>
        <td>
          <form action="./dashboard.php" method="post">
            <button class="button-3" role="button" type="submit"><i class="fa fa-cart-shopping"
                style="color: white; padding-left:10px;">&nbsp;&nbsp;</i>Continue Shopping</button>
          </form>
        </td>
        <td>&emsp;</td>
        <td>
          <form action="./pdf.php" method="post">
            <button class="button-3" role="button" type="submit"><i class="fa fa-download"
                style="color: white; padding-left:10px;">&nbsp;&nbsp;</i>Download e-Receipt</button>
          </form>
        </td>
      </tr>
    </table>
  </div>
</body>

</html>



<?php




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once("./include/PHPMailer.php");
require_once("./include/SMTP.php");

$mail = new PHPMailer(true);
date_default_timezone_set('Asia/Kolkata');
try {
  //Enable SMTP debugging.
  $mail->SMTPDebug = SMTP::DEBUG_OFF;
  ;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name                          
  $mail->Host = "smtp.gmail.com";
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = true;
  //Provide username and password     
  $mail->Username = "contact.ecera@gmail.com";
  $mail->Password = "bxvkfejugkniikiv";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "tls";
  //Set TCP port to connect to
  $mail->Port = 587;

  $mail->From = "coontact.ecera@gmail.com";
  $mail->FromName = "e-Cera | Maintanance team";

  $mail->addAddress($_SESSION['email'], "Dear User");

  $mail->isHTML(true);

  $bytes = openssl_random_pseudo_bytes(4);
  $pass = bin2hex($bytes);

  //$mail->Subject = "Devang";
  //$mail->Body = "<b>Your New Password is 👇</b><br>" . $pass;//rand(111111, 999999);
  $mail->Subject = "Invoice";

  $mail->Body = "
      <h3>
        Dear User, " . $_SESSION['uname'] . "<br/>
        🤗 Thank you for purchasing with e-Cera | Online Ceramic Shopping Portal
      </h3>
      <div style='border: solid black 1px; padding: 15px; background-color: #fafafa'>
        <table style='width: 100%'>
          <tbody>
            <tr>
              <td>
                <img
                  src='./img/rem.png'
                  alt=''
                  style='width: 200px; height: auto'
                  class='CToWUd'
                  data-bit='iit'
                  jslog='138226; u014N:xr6bB; 53:W2ZhbHNlLDJd'
                />
              </td>
              <td style='font-size: 20px' align='right'><b>Invoice Receipt</b></td>
            </tr>
            <tr>
              <td>
                Bill to : <br/> " . $_SESSION['firstName'] . "&nbsp;" . $_SESSION['lastName'] . "<br />
                <a href='mailto:" . $_SESSION['email'] . "' target='_blank'>" . $_SESSION['email'] . "</a><br />" . $_SESSION['phoneNo'] . "<br />Rajkot - 360001
              </td>
              <td align='right'>
                Invoice No: 100001 <br />
                Invoice Date: " . date("Y/m/d") . "<br />
                Invoice Time: " . date('h:i:s') . "
              </td>
            </tr>
          </tbody>
        </table>
        <br /><br /><br />
        <table style='width: 100%' border='1'>
          <tbody>
            <tr>
              <td><b>Total Items</b></td>
              <td><b>Price</b></td>
              <td><b>Item Qunatity</b></td>
              <td><b>Total Price</b></td>
            </tr>
            " .
    // add each product row to table HTML
    implode('', array_map(function ($i) {
      return '<tr>
                <td>' . $_SESSION['item_names_pdf'][$i] . '</td>
                <td>Rs.' . $_SESSION['item_price_pdf'][$i] . '/-</td>
                <td>1</td>
                <td>Rs.' . $_SESSION['item_price_pdf'][$i] . '/-</td>
              </tr>';
    }, array_keys($_SESSION['item_names_pdf'])))
    . "
 
            <tr>
              <td colspan='3' align='right'><b>GRAND TOTAL</b></td>
              <td align='right'>" . "<b>Rs." . $_SESSION['total'] . "/-</b>" . "</td>
            </tr>
          </tbody>
        </table>
        <table width='100%'>
          <tbody>
            <tr>
              <td><b>Mode of payment</b><br />online through Razorpay</td>
              <td align='right'>
                <br /><br /><b>e-Cera | General Manager</b><br /><br /><br />Authorized Signature
              </td>
            </tr>
            <tr>
              <td>
                <p style='margin-left: 230px; font-size: 11px; text-align: center'>
                  This invoice genreted by e-Cera | Maintanance Team <br />
                  Thank you purchasing<br><br><br>
                  <h4 style='margin-left: 230px; text-align: center'>
                  For more information or any other queries please contact us 📞 +91 <a href='tel:9724601266'>9724601266 </a></h4>
                  
                </p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      
        
        
        
        
        
        ";
  $mail->AltBody = "";

  $mail->send();
  //echo "Message has been sent successfully";
  //echo "<p style='color:green; font-family:verdana; font-size:20pt; background-color: lightgrey'>" . "<br><br><br>✔ Email has successfully sent check your mail-id" . "</p>";
  echo '<script>alert("✔ Email has successfully sent check your mail-id")</script>';
  // echo "<script>
  
  // toastr.options = {
  //   'closeButton': false,
  //   'debug': false,
  //   'newestOnTop': false,
  //   'progressBar': true,
  //   'positionClass': 'toastr-top-right',
  //   'preventDuplicates': false,
  //   'onclick': null,
  //   'showDuration': '300',
  //   'hideDuration': '1000',
  //   'timeOut': '5000',
  //   'extendedTimeOut': '1000',
  //   'showEasing': 'swing',
  //   'hideEasing': 'linear',
  //   'showMethod': 'fadeIn',
  //   'hideMethod': 'fadeOut'
  // };
  
  // toastr.success('Mail sent successfull please check you inbox!');


  // </script>";
  //    header('./login_page.php');
} catch (Exception $e) {
  echo "Mailer Error: " . $mail->ErrorInfo;
}
// $e_mail = $_SESSION['email'];
// $sql1 = "UPDATE register_page SET password = '$pass' WHERE email = '$e_mail'";
// $exe = $conn->query($sql1);
?>