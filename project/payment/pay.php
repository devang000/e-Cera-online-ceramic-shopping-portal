
<?php
session_start();
require('config.php');
require('razorpay-php/Razorpay.php');

error_reporting(0);

use Razorpay\Api\Api;
$api = new Api($keyId, $keySecret);
$orderData = [
    'receipt'         => 3456,
    'amount'          => 10000 * 100,
    'currency'        => "INR",
    'payment_capture' => 1
];
$razorpayOrder = $api->order->create($orderData);
$razorpayOrderId = $razorpayOrder['id'];
$_SESSION['razorpay_order_id'] = $razorpayOrderId;
$displayAmount = $amount = $orderData['amount'];
if ($displayCurrency !== 'INR') {
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}
$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "SILVER",
    "description"       => "NICE SILVER",
    "image"             => "",
    "prefill"           => [
    "name"              => "VATSAL RAMANI",
    "email"             => "vatsal@1234.com",
    "contact"           => "9999999999",
    ],
    "notes"             => [
    "address"           => "SONI BAZAR ,RAJKOT",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#1D3FED"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);
// error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

require("checkout/manual.php");
?>
</div>
