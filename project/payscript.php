<?php session_start(); ?>



<?php

 $apiKey = "rzp_test_PbBfFJc3F24umL";

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>


<head>
<link rel="icon" type="image/png" href="path-to-your-favicon"/><link rel="icon" type="image/png" href="./img/rem.png"/>
</head>

<form action="./success.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>"
    data-amount="<?php echo $_POST['amount']*100;?>"
    data-currency="INR"
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"
    
    data-name="e-Cera | Online Ceramic Shopping System"
    data-description="Online Ceramic Shopping System"
    data-image="./img/rem.png"
    data-prefill.name="<?php $_SESSION['uname']?>"
    data-prefill.email="<?php $_SESSION['email']?>"
    data-prefill.contact=""
    data-theme.color="#008000"
>
</script>

</form>

<style>
    .razorpay-payment-button {display: none;}
</style>

<script type="text/javascript">
    $(document).ready(function () {
        $('.razorpay-payment-button').click();
    });
</script>