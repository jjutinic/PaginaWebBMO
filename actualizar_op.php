<html>
<head>
	<title>actualizar operadores</title>
</head>
<body>

<?php
$servidor ="localhost";
$usuario = "root";
$contraseña = "";
$base="bmo";

$conexion = mysqli_connect($servidor,$usuario,$contraseña,$base)	
or die ("error  en la conexion");


$codigo=$_POST['codigo'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$tipologia=$_POST['tipologia'];
 

  mysqli_query($conexion, " UPDATE operadores SET nombres='$nombres', apellidos='$apellidos',telefono='$telefono',direccion='$direccion',tipologia='$tipologia'  WHERE codigo ='$codigo'")
    or die ("error en la  ejecucion ");

 
 mysqli_close($conexion);

echo "datos  se actualizaron  correctamente ";

?>

</body>
</html>