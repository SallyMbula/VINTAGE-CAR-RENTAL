<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Your Payment</title>
</head>
<body>
    <h2>Complete Your Payment</h2>
    <p>Dear <b><?php echo $_SESSION['username'] ?? 'Customer'; ?></b>, you have booked a <b><?php echo $_SESSION['car'] ?? 'Car'; ?></b>.</p>

    <!-- Add an input field for the customer to enter the price -->
    <form action="stk_push.php" method="POST">
        <label for="amount">Enter Amount (Ksh):</label>
        <input type="number" name="amount" id="amount" required min="1">
        <button type="submit">Pay with M-Pesa</button>
    </form>
</body>
</html>
