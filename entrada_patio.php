<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>entrada a patio</title>
    
<body background=imagen1.jpg>

<form action="insertar_entrada.php" method="POST">

    <p>entrada a patio</p>
    
    
    <div class="input"></div>
<nav>
  <center><input type="text" placeholder="digite codigo" name="codigo"></center><br>
  <center><input type="text" placeholder="digite los nombres" name="nombres"></center><br>
  <center><input type="text" placeholder="digite los apellidos" name="apellidos"></center><br>
  <center><input type="text" placeholder="digite serbus" name="serbus"></center><br>
  <center><input type="time" placeholder="seleccione hora" name="hora"></center><br>
  <center><input type="date" placeholder="seleccione fecha" name="fecha"></center><br>
  <center><input type="text" placeholder="digite numero de movil" name="movil"></center><br>

  <center><input id=enviar type="submit" value="GUARDAR"></center>
</form>




<form action="actualizar_entrada.php" method="POST">

<center><table><td>

   <p>actualizacion de registros</p>

   <center><input type="text" placeholder="digite codigo" name="codigo"></center><br>
  <center><input type="text" placeholder="digite los nombres" name="nombres"></center><br>
  <center><input type="text" placeholder="digite los apellidos" name="apellidos"></center><br>
  <center><input type="text" placeholder="digite serbus" name="serbus"></center><br>
  <center><input type="time" placeholder="seleccione hora" name="hora"></center><br>
  <center><input type="date" placeholder="seleccione fecha" name="fecha"></center><br>
  <center><input type="text" placeholder="digite numero de movil" name="movil"></center><br>

  </td></table></center>
  <center><input id=enviar type="submit" value="ACTUALIZAR"></center>
</form>
<br><br><br><br>




<form action="buscar_entrada.php" method="POST">

<center><table><td>
    <p>buscar registro</p>
    
     <input type="text" placeholder="digite el codigo" name="codigo">
     <center><input id=enviar type="submit" value="BUSCAR"></center>
</td></table></center>
     
</form>




<form action="eliminar_entrada.php" method="POST">

<center><table><td>
    <p>eliminar registro</p>

     <input type="text" placeholder="digite el codigo" name="codigo">
     <center><input id=enviar type="submit" value="ELIMINAR"></center>
</td></table></center>

</form>

</body>
</html>

    </body>
</html>

<style>
table{
    
    text-align: center;
    color: seashell;
    margin:5px;
    padding:10px;
    
    
}

#enviar{
        width: 140px;
        padding: 5px;
        margin-bottom: 5px;
        border: 2px solid white;
        font-family: "castellar";
        font-size: 9px;
        background: black;
        box-shadow: 10px 10px 5px 5px black;
        border-radius:25px;
        color:white;
        text-align: center;
}

#enviar:hover{
        width: 120px;
        padding: 5px;
        margin-bottom: 10px;
        border: 2px solid black;
        font-family: "castellar";
        font-size: 9px;
        background: rgb(253, 0, 0);
        color:black;
        text-align: center;
}

p{
font-size: 35px;
font-family: "castellar";
text-align: center;
color: seashell;
}  

input{
        text-align:center;
        width: 350px;
        padding: 5px;
        margin-bottom: 5px;
        border: 2px solid rgb(253, 0, 0);
        font-family: "castellar";
        font-size: 15px;
        background: seashell;
        box-shadow: 10px 10px 15px 3px rgb(119, 5, 40);
        border-radius:10px;
    }

input:hover{
    width: 350px;
    padding: 5px;
    margin-bottom: 6px;
    border: 3px solid rgb(0, 0, 0);
    font-family: "castellar";
    font-size: 15px;
    background: rgb(253, 0, 0);
}

select{
        width: 138px;
        padding: 4px;
        margin-bottom: 5px;
        border: 2px solid rgb(253, 0, 0);
        font-family: "castellar";
        font-size: 15px;
        background: seashell;
        box-shadow: 10px 10px 15px 3px rgb(119, 5, 40);
        border-radius:10px;
    }

select:hover{
    width: 138px;
    padding: 4px;
    margin-bottom: 5px;
    border: 3px solid rgb(0, 0, 0);
    font-family: "castellar";
    font-size: 15px;
    background: rgb(253, 0, 0);
}
    </style>