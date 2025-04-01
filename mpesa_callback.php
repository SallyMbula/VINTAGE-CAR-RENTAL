<?php
$file = 'mpesa_response.json';
$response = file_get_contents('php://input');
file_put_contents($file, $response);
?>
