<?php
// This will simulate sending a UID to getUID.php

$testUID = "TEST1234";  // Example UID

// URL of your getUID.php
$url = "http://192.168.0.109/NodeMCU_RC522_Mysql/getUID.php";

// Use cURL to send POST
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "UIDresult=$testUID");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

echo "Response from getUID.php: " . $response . "\n";

// Check contents of UIDContainer.php
$contents = file_get_contents('UIDContainer.php');
echo "Contents of UIDContainer.php:\n";
echo $contents;
?>
