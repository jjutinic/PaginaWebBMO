<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>articulos</title>
    
<body background=imagen1.jpg>

<form action="buscar_articulos.php" method="POST">

    <p>busca tus articulos</p>
    
    
     <input type="text" placeholder="digite el id" name="id">
     <center><input id=enviar type="submit" value="BUSCAR"></center>
</td></table></center>
     
</form>



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