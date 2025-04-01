<?php
// Start session to access car price if needed
session_start();

// Check if amount is provided from the form
if (!isset($_POST['amount']) || empty($_POST['amount'])) {
    die("Error: Amount is required for payment.");
}

$amount = intval($_POST['amount']); // Get user-entered amount and convert to integer

// Payment details
$phoneNumber = "254740621373";  // Use test phone number
$timestamp = date('YmdHis');

// Define shortCode and passKey
$shortCode = "174379"; // Use sandbox shortcode
$passKey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919"; // Get this from Daraja Portal

// Generate the password
$password = base64_encode($shortCode . $passKey . $timestamp);

// Consumer keys from Daraja API
$consumerKey = "d0yV0yW7GsTWKvWX5caE4TLHXYQJtkATSChzqepkJazahC3O";
$consumerSecret = "eFLnZ85HpfAY6zMPdsYrqtAuIjKEnQXrIoKb9ZW8Q9cDmEDRRJdBAUAIRozjWhG2";

// Callback URL (Use Ngrok if testing locally)
$callbackURL = "https://yourdomain.com/callback.php";

// Function to get access token from M-Pesa
function getAccessToken($consumerKey, $consumerSecret) {
    $url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_USERPWD, $consumerKey . ":" . $consumerSecret);

    $response = curl_exec($curl);
    curl_close($curl);

    $result = json_decode($response);
    return $result->access_token ?? null;
}

// Call the function to get access token
$accessToken = getAccessToken($consumerKey, $consumerSecret);

if (!$accessToken) {
    die("Error: Failed to get access token.");
}

// M-Pesa STK Push API request
$stkPushUrl = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

$stkPushData = [
    "BusinessShortCode" => $shortCode,
    "Password" => $password,
    "Timestamp" => $timestamp,
    "TransactionType" => "CustomerPayBillOnline",
    "Amount" => $amount,  // Use user-entered amount
    "PartyA" => $phoneNumber,
    "PartyB" => $shortCode,
    "PhoneNumber" => $phoneNumber,
    "CallBackURL" => $callbackURL,
    "AccountReference" => "CarRentalPayment",
    "TransactionDesc" => "Payment for car rental"
];

$stkPushHeaders = [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $accessToken
];

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $stkPushUrl);
curl_setopt($curl, CURLOPT_HTTPHEADER, $stkPushHeaders);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($stkPushData));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);

// Check response
if ($httpCode == 200) {
    echo "STK Push request sent successfully. Check your phone to complete the payment.";
} else {
    echo "Error: STK Push request failed. Response: " . $response;
}
?>
