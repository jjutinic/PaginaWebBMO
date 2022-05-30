<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eliminar operadores</title>
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

    mysqli_query($conexion,"DELETE FROM operadores WHERE codigo='$codigo'")
    or die("no se eliminaron los datos");

    mysqli_close($conexion);

    echo"datos eliminados correctamente";

    ?>
</body>
</html>