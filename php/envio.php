<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$select = $_POST['select'];
$date = $_POST['date'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Su ocasión es: " . $select . " \r\n";
$message .= "Para el dia y hora: " . $date . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date("Y-m-d H:i:s");

$para = 'pedrodeveloper98@gmail.com';
$asunto = 'Mensaje de... Reserva prueba';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:enviado.html");
?>
