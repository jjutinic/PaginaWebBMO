<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buscar vitacora</title>
</head>
<body background="imagen3.jpg">

<?php

$servidor="localhost";
$usuario="root";
$contraseña="";
$base="bmo";

$conexion=mysqli_connect($servidor,$usuario,$contraseña,$base)
or die("error en conexion");

$movil=$_POST['movil'];

$consulta=mysqli_query($conexion, "SELECT * FROM vitacora WHERE movil='$movil'")
or die("no se genero la consulta");

echo"se conecto correctamente al servidor";

echo'<table border="20">';
echo"<tr>";
echo'<td id="movil">movil</td>';
echo'<td id="reporta">reporta</td>';
echo'<td id="fecha">fecha</td>';
echo'<td id="golpe">golpe</td>';
echo'<td id="rayon">rayon</td>';
echo'<td id="manchon">manchon</td>';
echo'<td id="roto">roto</td>';
echo'<td id="codigo">codigo</td>';
echo'<td id="descripcion">descripcion</td>';
echo'<td id="movil1">movil1</td>';


echo"</tr>";

while($consultar=mysqli_fetch_array($consulta)) {
echo"<tr>";
echo"<td>".$consultar['movil'].'</td>';
echo"<td>".$consultar['reporta'].'</td>';
echo"<td>".$consultar['fecha'].'</td>';
echo"<td>".$consultar['golpe'].'</td>';
echo"<td>".$consultar['rayon'].'</td>';
echo"<td>".$consultar['manchon'].'</td>';
echo"<td>".$consultar['roto'].'</td>';
echo"<td>".$consultar['codigo'].'</td>';
echo"<td>".$consultar['descripcion'].'</td>';
echo"<td>".$consultar['movil1'].'</td>';
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