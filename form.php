<?php
$email=$_POST["email"];
$submit=$_POST["submit"];

$para="hola@gallocreatif.com";
$asunto="Nuevo suscriptor en GALLO"

mail($para, $asunto, $header);
header("Location:index.html");

?>