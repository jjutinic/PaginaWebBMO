<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salida patio</title>
</head>
<body>

<?php

$servidor="localhost";
$usuario="root";
$contraseña="";
$base="bmo";

$conexion=mysqli_connect($servidor,$usuario,$contraseña,$base)
or die("error en conexion");

$codigo=$_POST['codigo'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$serbus=$_POST['serbus'];
$hora=$_POST['hora'];
$fecha=$_POST['fecha'];
$movil=$_POST['movil'];





$sql="INSERT INTO salida_patio VALUES('$codigo','$nombres','$apellidos','$serbus','$hora','$fecha','$movil')";

$respuesta=mysqli_query($conexion,$sql)

or die("error al insertar datos");
mysqli_close($conexion);

echo"los datos se insertaron correctamente";

?>