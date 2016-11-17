<?php

/* 
Script que recpge los datos del formilario y los muestra por pantalla
 */

//Recogemos los datos del formulario

$name = $_POST["nombre"];
$age = $_POST["edad"];
$city = $_POST["ciudad"];
$sex = $_POST["sexo"];

echo "<p> Datos del usuario registrado en el formulario: </p>";
echo "<p> Nombre: $name Edad: $age Ciudad:$city Sexo: $sex </p>";