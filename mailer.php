<?php

$destinatario = "maxyschonfeld@gmail.com";
$asunto = "Contacto desde nuestra web";


$nombre =$_POST['nombre'];
$correo =$_POST['correo'];
$consulta =$_POST['consulta'];

$cuerpo = "Contacto desde el sitio web";
$mensajecompleto =$consulta.$nombre.$correo;
mail($destinatario, $cuerpo, $asunto, $mensajecompleto,);
header ('Location: index.html');


?>