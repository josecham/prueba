<?php
$nombre = $_POST ["nombre"];
$email = $_POST ["email"];

$mensaje = "este mensaje fue enviado por" . $nombre . ",\r\n";
$mensaje = "su email es" . $email . ",\r\n";

$para = "gabriel_influencia74@hotmail.com";
$asunto = "mensaje de mi sitio web";

mail($para, $asunto, ultf8_decore($mensaje), $header);

header (location:"index.html");

?>
