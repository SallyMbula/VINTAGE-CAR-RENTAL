<?php
session_start();
$_SESSION['car_price'] = $car_price; // Ensure $car_price is fetched from the database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $location = $_POST["location"];
    $car_type = $_POST["car-type"];
    $date = $_POST["date"];

    // Store booking info in session
    session_start();
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    $_SESSION["phone"] = $phone;
    $_SESSION["location"] = $location;
    $_SESSION["car_type"] = $car_type;
    $_SESSION["date"] = $date;

    // Redirect to payment page
    header("Location: payment.php");
    exit();
} else {
    echo "Invalid Request!";
}
?>

