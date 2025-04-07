<?php
// Log the raw response for debugging
$file = 'mpesa_response.json';
$response = file_get_contents('php://input');
file_put_contents($file, $response);

// Decode the response to check if payment was successful
$responseData = json_decode($response);
if (isset($responseData->ResponseCode) && $responseData->ResponseCode == "0") {
    // Payment was successful, trigger SMS notifications
    
    // Collect the booking info - replace with real variables from your system
    $_POST['name'] = "John Doe";  // Replace with actual customer name
    $_POST['phone'] = "+254712345678";  // Replace with actual phone number
    $_POST['amount'] = "4500";  // Replace with actual amount
    $_POST['date'] = "2025-04-20";  // Replace with actual date

    // Trigger SMS
    include 'sms.php';  // Send SMS to customer and owner
} else {
    echo "Payment failed or was not successful.";
}
?>
