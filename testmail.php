<?php
$headers ='From: "Radiabat Protection System"<test@ericnahon.net>'."\n"; 
$headers .='Reply-To: info@ericnahon.net'."\n"; 
$headers .='Content-Type: text/plain; charset="iso-8859-1"'."\n"; 
$headers .='Content-Transfer-Encoding: 8bit';

echo “Preparing Mail.”;

$to = “ericnahon@gmail.com”;
$subject = “Test mail”;
$message = “Hello! This is a simple email message.”;

mail($to,$subject,$message,$headers);

echo “Mail Sent.”;
?>
