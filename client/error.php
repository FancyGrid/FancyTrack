<?php
$to      = 'trackerror@domain.com';
$from 	 = 'support@domain.com';
$subject = 'Error on domain.com';

$url = $_POST['url'];
$errorText = $_POST['errorText'];
$lineNumber = $_POST['lineNumber'];
$columnNumber = $_POST['columnNumber'];
$userAgent = $_POST['userAgent'];
$errorName = $_POST['errorName'];
$errorMessage = $_POST['errorMessage'];
$errorStack = $_POST['errorStack'];
$os = $_POST['os'];
$browser = $_POST['browser'];
$mobile = $_POST['mobile'];
$errorStack2 = preg_replace("!\r?\n!", "", $_POST['errorStack']);

$message = "url - ".$url." \r\n errorText - ".$errorText."\r\n lineNumber - ".$lineNumber."\r\n columnNumber - ".$columnNumber."\r\n userAgent - ".$userAgent;
$message .= "\r\n Error Name: " . $errorName . " \r\n Error Message - " . $errorMessage . " \r\n Error errorStack - " . $errorStack2;
$headers = 'From: ' . $from . "\r\n" .
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

echo '{';
echo '"success": true,';
echo "\"url\": \"$url\",";
echo "\"errorText\": \"$errorText\",";
echo "\"errorName\": \"$errorName\",";
echo "\"errorMessage\": \"$errorMessage\",";
echo "\"errorStack\": \"$errorStack2\",";
echo "\"lineNumber\": \"$lineNumber\",";
echo "\"columnNumber\": \"$columnNumber\",";
echo "\"userAgent\": \"$userAgent\",";
echo "\"os\": \"$os\",";
echo "\"browser\": \"$browser\",";
echo "\"mobile\": \"$mobile\"";
echo '}';

?> 