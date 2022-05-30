<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>articulos</title>
</head>
<body background="imagen3.jpg">

<?php

$servidor="localhost";
$usuario="root";
$contraseña="";
$base="electrodomesticos";

$conexion=mysqli_connect($servidor,$usuario,$contraseña,$base)
or die("error en conexion");

$id=$_POST['id'];

$consulta=mysqli_query($conexion, "SELECT * FROM articulos WHERE id='$id'")
or die("no se genero la consulta");

echo"se conecto correctamente al servidor";

echo'<table border="20">';
echo"<tr>";
echo'<td id="id">id</td>';
echo'<td id="nombre">nombre</td>';
echo'<td id="precio">precio</td>';
echo'<td id="can_disponible">can_disponible</td>';

echo"</tr>";

while($consultar=mysqli_fetch_array($consulta)) {
echo"<tr>";
echo"<td>".$consultar['id'].'</td>';
echo"<td>".$consultar['nombre'].'</td>';
echo"<td>".$consultar['precio'].'</td>';
echo"<td>".$consultar['can_disponible'].'</td>';

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