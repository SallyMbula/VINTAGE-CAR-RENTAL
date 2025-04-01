<?php
session_start(); // Start session

// M-Pesa API credentials
$consumerKey = "d0yV0yW7GsTWKvWX5caE4TLHXYQJtkATSChzqepkJazahC3O";
$consumerSecret = "eFLnZ85HpfAY6zMPdsYrqtAuIjKEnQXrIoKb9ZW8Q9cDmEDRRJdBAUAIRozjWhG2";
$shortCode = "174379";
$passKey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";

// Getting phone and amount from form submission
$phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
$amount = isset($_POST["amount"]) ? $_POST["amount"] : 0;

if ($phone == "" || $amount <= 0) {
    die("Invalid payment details.");
}

// Function to get access token
function getAccessToken($consumerKey, $consumerSecret) {
    $url = "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";
    $credentials = base64_encode($consumerKey . ":" . $consumerSecret);

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, ["Authorization: Basic $credentials"]);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);

    $result = json_decode($response);
    
    // Ensure the response is valid before accessing access_token
    if (isset($result->access_token)) {
        return $result->access_token;
    } else {
        die("Failed to get access token. Check your API credentials.");
    }
}

// Get access token
$access_token = getAccessToken($consumerKey, $consumerSecret);

// Ensure access token is valid
if (!$access_token) {
    die("Failed to retrieve access token.");
}

// M-Pesa Payment request
$timestamp = date("YmdHis");
$password = base64_encode($shortCode . $passKey . date('YmdHis'));


$url = "https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest";
$headers = ["Authorization: Bearer " . $access_token, "Content-Type: application/json"];
$data = [
    "BusinessShortCode" => $shortcode,
    "Password" => $password,
    "Timestamp" => $timestamp,
    "TransactionType" => "CustomerPayBillOnline",
    "Amount" => $amount,
    "PartyA" => $phone,
    "PartyB" => $shortcode,
    "PhoneNumber" => $phone,
    "CallBackURL" => "https://yourdomain.com/mpesa_callback.php",
    "AccountReference" => "VintageCarRental",
    "TransactionDesc" => "Car Rental Payment"
];

// Convert data to JSON format
$payload = json_encode($data);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);

$response = curl_exec($curl);
curl_close($curl);

// Decode response and check if request was successful
$responseData = json_decode($response);
if (isset($responseData->ResponseCode) && $responseData->ResponseCode == "0") {
    echo "M-Pesa payment request sent. Check your phone to complete the payment.";
} else {
    echo "Error: " . json_encode($responseData); // Show full error
}

?>




