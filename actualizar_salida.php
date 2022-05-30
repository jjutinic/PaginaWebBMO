<html>
<head>
	<title>actualizar entrada</title>
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
$serbus=$_POST['serbus'];
$hora=$_POST['hora'];
$fecha=$_POST['fecha'];
$movil=$_POST['movil'];
 

  mysqli_query($conexion, " UPDATE salida_patio SET codigo='$codigo', nombres='$nombres', apellidos='$apellidos', serbus='$serbus', hora='$hora', fecha='$fecha', movil='$movil' WHERE codigo ='$codigo'")
    or die ("error en la  ejecucion ");

 
 mysqli_close($conexion);

echo "datos  se actualizaron  correctamente ";

?>

</body>
</html>