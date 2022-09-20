<?php

$empresa = $_POST['empesa'];
$nombre = $_POST['nombreyapellido'];
$email = $_POST['correo'];
$consulta = $_POST['consulta'];

$formcontent="
    Empresa: $empresa \n
    Nombre y Apellido: $name \n
    E-mail: $email \n
    Consulta: $consulta \n
";

$recipient = "galape@hotmail.com";

$subject = "Consulta desde la web";

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: index.html");

?>