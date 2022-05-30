<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eliminar entrada</title>
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

    mysqli_query($conexion,"DELETE FROM entrada_patio WHERE codigo='$codigo'")
    or die("no se eliminaron los datos");

    mysqli_close($conexion);

    echo"el registro se elimino correctamente";

    ?>
</body>
</html>