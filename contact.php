<?php
$mailTo = 'peter.fiek@gmail.com';
$name = htmlspecialchars($_POST['idi_name']);
$mailFrom = htmlspecialchars($_POST['idi_mail']);
$subject = 'Hey there, Pete!';
$message_text = htmlspecialchars($_POST['idi_text']);
$message =  'From: '.$name.'; Email: '.$mailFrom.' ; Message: '.$message_text;
$headers .= 'From:' . $mailFrom . '\r\n';
mail($mailTo, $subject, $message, $headers);
?>
