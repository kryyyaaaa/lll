<?php

//// kryyaasoft

$to      = !empty($_POST['to'])  ? $_POST['to'] : 'empty';
$subject = !empty($_POST['subject'])  ? $_POST['subject'] : 'empty';
$message = !empty($_POST['message'])  ? $_POST['message'] : 'empty';
$fake = !empty($_POST['fake'])  ? $_POST['fake'] : 'empty';
$headers = "From: $fake" . "\r\n";

mail($to, $subject, $message, $headers);
?>
