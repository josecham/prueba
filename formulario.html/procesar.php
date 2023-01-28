<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header. = "X-Mailer: PHP/" . phpversion() . " \r\n";
$header. = "Mime-Version: 1.0 \r\n";
$header. = "Content-Type: text/plain";

$message = "este mensaje fue enviado por: " . $name . " \r\n";
$message = "su e-mail es: " . $mail . " \r\n";
$message = "telefono de contacto: " . $phone . " \r\n";
$message = "mensaje: " . $_POST ['message'] . " \r\n";
$message = "enviado el: " . date('d/m/Y', time());

$para = 'gabriel_influencia74@hotmail.com';
$asunto = 'asunto del mensaje';

mail($para, $asunto, ultf8_decode($message), $header);

header ("Location:formula.html");
?>