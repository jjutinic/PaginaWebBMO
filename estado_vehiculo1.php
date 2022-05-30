<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estado_vehiculo.php</title>
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
$golpe=$_POST['golpe'];
$rayon=$_POST['rayon'];
$manchon=$_POST['manchon'];
$roto=$_POST['roto'];


$fotos=$_FILES['imagen']['tmp_name'];


move_uploaded_file($fotos)





$sql="INSERT INTO estado_vehiculo VALUES('$movil','$golpe','$rayon','$manchon','$roto','$fotos')";

$respuesta=mysqli_query($conexion,$sql)

or die("error al insertar datos");
mysqli_close($conexion);

echo"los datos se insertaron correctamente";

?>

</body>
</html>