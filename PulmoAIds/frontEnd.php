<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="imagenes" type="imagenes" href="../Front_proyecto/imagenes/10px">
    <link rel="Registro.php" href="Registro.php">
</head>
<body>
    <style>
    button {
    color:black;
    background-color: rgb(164, 229, 255);
    width: 50%;
    height: 8%;
    margin-left: 25%;
    margin-bottom: 15px;
    border-radius: 5px;
    border-color: rgb(164, 229, 255);
    border-style: dotted;
    font-family: Georgia, 'Times New Roman', Times, serif;
    cursor: pointer;
    font-size: medium;
}
button:active{
    color: white;
    background-color: rgb(38, 181, 233);
}
header {
    display: flex;
    justify-content: space-between;
    background: rgb(95, 210, 236);
    padding: 6px;
}
circle{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: blueviolet;
    cursor: pointer;
}
p {
    display: flex;
    justify-content: center;
}
p::before{
    content: "Watch the future of modern medicine";
    color: dodgerblue;
    cursor: pointer;
}
p:hover::before{
    content: "Breathing for life";
    color: blue;
}
form{
    justify-content: center;
    display: flex;
}
label{
    margin-bottom: 18px;
}
input{
    margin-bottom: 18px;
    margin-left: 10px;
    margin-right: 15px;
    margin-top: 10px;
    border-radius: 5px;
    border-color: white;
    height: 30px;
    width: 300px;
}
container{
    background-color: rgb(157, 156, 156);
    display: flex;
    justify-content: center;
    flex-direction: column;
    border-radius: 15px;
    width: 350px;
    height: 400px;
}
h1{
    margin-left: 15px;
    margin-bottom: 5px;
    margin-top: 0px;
    font-size: 30px;
}
h2{
    margin-left: 15px;
    margin-top: 0px;
    font-size: 17px;
}
.fondo{
    width: 100%;
    height: 100%;
}
    </style>
<header>
    <picture class = "header-child"> Soy un logo </picture>
<nav class=" header-child"> Soy el menú de navegación</nav>
<circle></circle>
</header>
<?php
include("modelo/index.php")
include("modelo/Registro.php")
?>
    <section>
        <p>  </p>  
        <img src="./imagenes/fondo_pulmoAi_inicio.jpg" alt="fondo" class="fondo">  
        <form method="POST"> 
            <container>
                <h1>Welcome</h1>
                <h2>Please, register your account.</h2>
                <input type = "text" id = "Nombre" placeholder="Name" required>
                <input type ="text" id = "Apellido" placeholder = "Surename" required>
                <input type ="email" id = "EmailID" placeholder="Email" required>
                <input type = "text" id = "Obra social" placeholder="Medical assurance" required>
                <button type="submit">Start</button>   
            </container>
        </form>
    </section>
</body>
</html><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="imagenes" type="imagenes" href="../Front_proyecto/imagenes/10px">
    <link rel="Registro.php" href="Registro.php">
</head>
<body>
    <style>
    button {
    color:black;
    background-color: rgb(164, 229, 255);
    width: 50%;
    height: 8%;
    margin-left: 25%;
    margin-bottom: 15px;
    border-radius: 5px;
    border-color: rgb(164, 229, 255);
    border-style: dotted;
    font-family: Georgia, 'Times New Roman', Times, serif;
    cursor: pointer;
    font-size: medium;
}
button:active{
    color: white;
    background-color: rgb(38, 181, 233);
}
header {
    display: flex;
    justify-content: space-between;
    background: rgb(95, 210, 236);
    padding: 6px;
}
circle{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: blueviolet;
    cursor: pointer;
}
p {
    display: flex;
    justify-content: center;
}
p::before{
    content: "Watch the future of modern medicine";
    color: dodgerblue;
    cursor: pointer;
}
p:hover::before{
    content: "Breathing for life";
    color: blue;
}
form{
    justify-content: center;
    display: flex;
}
label{
    margin-bottom: 18px;
}
input{
    margin-bottom: 18px;
    margin-left: 10px;
    margin-right: 15px;
    margin-top: 10px;
    border-radius: 5px;
    border-color: white;
    height: 30px;
    width: 300px;
}
container{
    background-color: rgb(157, 156, 156);
    display: flex;
    justify-content: center;
    flex-direction: column;
    border-radius: 15px;
    width: 350px;
    height: 400px;
}
h1{
    margin-left: 15px;
    margin-bottom: 5px;
    margin-top: 0px;
    font-size: 30px;
}
h2{
    margin-left: 15px;
    margin-top: 0px;
    font-size: 17px;
}
.fondo{
    width: 100%;
    height: 100%;
}


.alerta{
    text-align: center;
    color: red;
}


.Success{
    text-align: center;
    color: green;
}




    </style>
<header>
    <picture class = "header-child"> Soy un logo </picture>
<nav class=" header-child"> Soy el menú de navegación</nav>
<circle></circle>
</header>
    <section>
        <p>  </p>  
        <img src="./imagenes/fondo_pulmoAi_inicio.jpg" alt="fondo" class="fondo">  
        <form action="./Registro.php" method="post">
            <container>
                <h1>Welcome</h1>
                <h2>Please, register your account.</h2>
                <input type = "text" name="Nombre" id = "Nombre" placeholder="Name" required>
                <input type ="text"  name="Apellido"id = "Apellido" placeholder = "Surename" required>
                <input type ="email" name="EmailID" id = "EmailID" placeholder="Email" required>
                <input type = "text" name="Obra_social" id = "Obra_social" placeholder="Medical assurance" required>
                <button type="submit">Start</button>  
            </container>
        </form>
    </section>
    <?php
include("Registro.php");
include("conexion.php");
?>
</body>
</html>




