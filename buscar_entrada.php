<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buscar entrada</title>
</head>
<body background="imagen3.jpg">

<?php

$servidor="localhost";
$usuario="root";
$contraseña="";
$base="bmo";

$conexion=mysqli_connect($servidor,$usuario,$contraseña,$base)
or die("error en conexion");

$codigo=$_POST['codigo'];

$consulta=mysqli_query($conexion, "SELECT * FROM entrada_patio WHERE codigo='$codigo'")
or die("no se genero la consulta");

echo"se conecto correctamente al servidor";

echo'<table border="20">';
echo"<tr>";
echo'<td id="cogigo">cogigo</td>';
echo'<td id="nombres">nombres</td>';
echo'<td id="apellidos">apellidos</td>';
echo'<td id="serbus">serbus</td>';
echo'<td id="hora">hora</td>';
echo'<td id="fecha">fecha</td>';
echo'<td id="movil">movil</td>';
echo"</tr>";

while($consultar=mysqli_fetch_array($consulta)) {
echo"<tr>";
echo"<td>".$consultar['codigo'].'</td>';
echo"<td>".$consultar['nombres'].'</td>';
echo"<td>".$consultar['apellidos'].'</td>';
echo"<td>".$consultar['serbus'].'</td>';
echo"<td>".$consultar['hora'].'</td>';
echo"<td>".$consultar['fecha'].'</td>';
echo"<td>".$consultar['movil'].'</td>';
echo"</tr>";
}

?>
</body>
</html>

<style>
td{
    text-align: center;
    color: seashell;
    margin:20px;
    padding:20px;
    width: 150px;
    background: black;
}
</style>