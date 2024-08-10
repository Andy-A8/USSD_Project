<?php
//Echo response back to the API
header('content-type: text/plain');

//Read POST variables from the API
$sessionId = $_POST['sessionId'];
$networkCode = $_POST['networkCode'];
$serviceCode = $_POST['serviceCode'];
$phoneNumber = 1trim($_POST['phoneNumber']);
$text = $_POST['text'];

// Check if the text is empty to start a new session
if ($text == "") {
   $response = "CON Menu options: \n1. Withdrawal \n2. Check balance n\3. Send money ";
} else {
    // Splits the text to handle user input
    $textArray = explode('*', $text);

    switch ($textArray[0]) {
	case "1":
	  $response = "CON Withdrawal";
	  break;
	case "2":
	  $response = "CON Check balance";
	  break;
	case "3":
          $response = "CON Send money";
	  break;
	default:
	  $response = END Invalid Input";
	  break;
}
}


echo $response;

; ?>
