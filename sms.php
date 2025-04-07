<?php
require 'vendor/autoload.php'; // Load Africa's Talking SDK

use AfricasTalking\SDK\AfricasTalking;

// Your Africa's Talking credentials
$username = "sandbox"; // Use 'sandbox' for testing, or your actual username for live
$apiKey   = "atsk_5ca506e238ba5de7d9e178080e6a2662613b9af96645d2506ca420b33fa46d65c0221bf4"; // Replace with your real API key

$AT = new AfricasTalking($username, $apiKey);
$sms = $AT->sms();

// Get booking info (you'll pass this from the form or payment logic)
$customerPhone = $_POST['phone']; 
$customerName  = $_POST['name'];
$amount        = $_POST['amount'];
$date          = $_POST['date'];

// SMS to customer
$customerMessage = "Thanks for booking with MetroRentally. You've sent Ksh {$amount}. See you on {$date}!";

// SMS to you (owner)
$ownerPhone = "+254740621373"; // Replace with YOUR phone number
$ownerMessage = "New booking: {$customerName} paid Ksh {$amount} for {$date}.";

// Send SMS
try {
    // To customer
    $sms->send([
        'to' => $customerPhone,
        'message' => $customerMessage
    ]);

    // To owner
    $sms->send([
        'to' => $ownerPhone,
        'message' => $ownerMessage
    ]);

    echo "SMS sent successfully!";
} catch (Exception $e) {
    echo "Failed to send SMS: " . $e->getMessage();
}
?>
