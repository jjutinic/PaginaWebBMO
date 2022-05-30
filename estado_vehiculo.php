<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estado vehiculo</title>
    
<body background=imagen1.jpg>

<form action="estado_vehiculo1.php" method="POST" enctype="multipart/form-data">

    <p>estado del movil</p>
    
    
    <div class="input"></div>
<nav>
  <center><input type="text" placeholder="digite numero de movil" name="movil"></center><br>

  <center><select name="golpe">
                <option value="">seleccione ubicacion si es golpe</option>
                <option value="bnd100">bnd100</option>
                <option value="bnt101">bnt101</option>
                <option value="r101">r101</option>
          </select></center><br>

          <center><select name="rayon">
                <option value="">seleccione ubicacion si es rayon</option>
                <option value="bnd100">bnd100</option>
                <option value="bnt101">bnt101</option>
                <option value="r101">r101</option>
          </select></center><br>

          <center><select name="manchon">
                <option value="">seleccione ubicacion si es manchon</option>
                <option value="bnd100">bnd100</option>
                <option value="bnt101">bnt101</option>
                <option value="r101">r101</option>
          </select></center><br>

          <center><select name="roto">
                <option value="">seleccione ubicacion si es roto</option>
                <option value="bnd100">bnd100</option>
                <option value="bnt101">bnt101</option>
                <option value="r101">r101</option>
          </select></center><br>
  
  <center><input type="file" placeholder="seleccione la imagen" name="imagen"></center><br><br>

  <center> 
            <input id=enviar type="submit" value="enviar">
            <input id=enviar type="submit" value="eliminar">
            <input id=enviar type="submit" value="guardar">
            <input id=enviar type="submit" value="actualizar">
            <input id=enviar type="submit" value="recet">
        </center>
</form>

    </body>
</html>

<style>
#enviar{
        width: 6%;
        padding: 8px;
        margin-bottom: 5px;
        border: 2px solid white;
        font-family: "castellar";
        font-size: 10px;
        background: black;
        box-shadow: 10px 10px 5px 5px black;
        border-radius:25px;
        color:white;
}

#enviar:hover{
        width: 6%;
        padding: 5px;
        margin-bottom: 10px;
        border: 2px solid black;
        font-family: "castellar";
        font-size: 9px;
        background: rgb(253, 0, 0);
        color:black;
}O


p{
font-size: 60px;
font-family: "castellar";
text-align: center;
color: seashell;
}  

.boton{
    width: 150px;
    height: 30px;
    background:rgb(245, 4, 4);
    padding: 0px;
    border: 3px solid rgb(0, 0, 0);
    text-align: center;
    border-radius: 7px;
}

.boton:hover{
    width: 140px;
    height: 40px;
    background:rgb(88, 2, 2);
    padding: 0px;
    border: 3px solid rgb(250, 6, 6);
    text-align: center;
    border-radius: 7px;
    font-family: rgb(243, 239, 239);
}

body{
   background-color: rgb(19, 51, 83);
}

input{
        width: 35%;
        padding: 7px;
        margin-bottom: 6px;
        border: 2px solid rgb(253, 0, 0);
        font-family: "castellar";
        font-size: 15px;
        background: seashell;
        box-shadow: 10px 10px 5px 5px black;
        border-radius:10px;
    }

input:hover{
    width: 34%;
    padding: 7px;
    margin-bottom: 6px;
    border: 3px solid rgb(0, 0, 0);
    font-family: "castellar";
    font-size: 15px;
    background: rgb(253, 0, 0);
}

h2{
    text-align: center;
    font-size: 25px ;
    padding: 80px;
    font-family: "castellar";
    color:rgb(194, 5, 5);
}

select{
        width: 36%;
        padding: 7px;
        margin-bottom: 6px;
        border: 2px solid rgb(253, 0, 0);
        font-family: "castellar";
        font-size: 15px;
        background: seashell;
        box-shadow: 10px 10px 5px 5px black;
        border-radius:10px;
    }

select:hover{
    width: 35%;
    padding: 7px;
    margin-bottom: 6px;
    border: 3px solid rgb(0, 0, 0);
    font-family: "castellar";
    font-size: 15px;
    background: rgb(253, 0, 0);
}

.enviar{
        width: 8%;
        padding: 10px;
        margin-bottom: 10px;
        border: 2px solid rgb(253, 0, 0);
        font-family: "castellar";
        font-size: 15px;
        background: seashell;
        box-shadow: 10px 10px 5px 5px black;
        border-radius:25px;
}

.enviar:hover{
    width: 7%;
        padding: 5px;
        margin-bottom: 10px;
        border: 2px solid rgb(253, 0, 0);
        font-family: "castellar";
        font-size: 15px;
        background: rgb(253, 0, 0);
}

    </style>