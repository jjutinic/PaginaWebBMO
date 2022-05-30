<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ope.php</title>
</head>
<body>

<?php

$servidor="localhost";
$usuario="root";
$contraseña="";
$base="bmo";

$conexion=mysqli_connect($servidor,$usuario,$contraseña,$base)
or die("error en conexion");

$movil=$_POST['movil'];
$reporta=$_POST['reporta'];
$fecha=$_POST['fecha'];
$golpe=$_POST['golpe'];
$rayon=$_POST['rayon'];
$manchon=$_POST['manchon'];
$roto=$_POST['roto'];
$codigo=$_POST['codigo'];
$descripcion=$_POST['descripcion'];
$movil1=$_POST['movil1'];




$sql="INSERT INTO vitacora VALUES('$movil','$reporta','$fecha','$golpe','$rayon','$manchon','$roto','$codigo','$descripcion','$movil1')";

$respuesta=mysqli_query($conexion,$sql)

or die("error al insertar datos");
mysqli_close($conexion);

echo"los datos se insertaron correctamente";

?>

</body>
</html>