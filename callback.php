<?php
header("Content-Type: application/json");

// Get response from M-Pesa
$response = file_get_contents("php://input");
$logFile = "mpesa_logs/payment_response.json"; 

// Save response to a log file (for debugging)
file_put_contents($logFile, $response);

$mpesaResponse = json_decode($response, true);

if ($mpesaResponse) {
    $resultCode = $mpesaResponse['Body']['stkCallback']['ResultCode'];
    
    if ($resultCode == "0") {
        echo "Payment successful!";
    } else {
        echo "Payment failed: " . $mpesaResponse['Body']['stkCallback']['ResultDesc'];
    }
} else {
    echo "No response received.";
}
?>
