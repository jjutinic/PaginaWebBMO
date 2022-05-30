<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insertar operadores</title>
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
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$tipologia=$_POST['tipologia'];

$sql="INSERT INTO operadores VALUES('$codigo','$nombres','$apellidos','$telefono','$direccion','$tipologia')";

$respuesta=mysqli_query($conexion,$sql)

or die("error al insertar datos");
mysqli_close($conexion);

echo"los datos se insertaron correctamente";

?>
</body>
</html>