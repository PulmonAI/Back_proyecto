<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="imagenes" type="imagenes" href="../Front_proyecto/imagenes/10px">
</head>
<body>
    <style>
body{
    margin: 0;
}
button {
    color:rgb(16, 145, 220);
    background: none;
    border: 0;
    width: 70%;
    height: 8%;
    margin-left: 50px;
    margin-bottom: 0px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    cursor: pointer;
    font-size: 17px;
}
button:active{
    color:rgb(115, 208, 240);
    background-color: rgb(95, 194, 251);
}
.b1{
    margin-top: 10px;
    margin-left: 60px;
}
.submit{
    color: white;
    background-color: rgb(24, 124, 231);
    border-radius: 5px;
    font-size: 16px;
    margin-top: 12px;
    margin-left: 135px;
    width: 140px;
    height: 30px;
}
header {
    display: flex;
    justify-content: space-between;
    padding: 20px;
    margin-right: 0%;
    align-items: flex-start;
    position: absolute;
    gap: 80px;
    color: white;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
nav{
    font-size: 20px;
    margin-left: 20px;
    cursor: pointer;
    color: white;
}
.perfil{
    width: 50px;
    height: 50px;
    margin-right: 0%;
    cursor: pointer;
}
.logo{
    width: 55px;
    height: 55px;
    margin-top: 0%;
    margin-left: 0%;
    padding: 0px;
    border: 0px;
}
.HOME{
text-shadow: 2px 4px 10px rgb(255, 255, 255);
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
    margin-left: 50px;
    margin-right: 15px;
    margin-top: 1px;
    border-radius: 10px;
    border-color: white;
    height: 30px;
    width: 300px;
}
a{
    color: rgb(16, 145, 220);
    text-decoration: none;
}
container{
    background-color: rgb(198, 195, 195);
    display: flex;
    justify-content: center;
    flex-direction: column;
    position: absolute;
    border-radius: 15px;
    width: 430px;
    height: 400px;
    margin-top: 150px;
}
h1{
    margin-left: 30px;
    margin-bottom: 5px;
    margin-top: 0px;
    font-size: 40px;
}
h2{
    margin-left: 35px;
    margin-top: 0px;
    margin-bottom: 30px;
    font-size: 19px;
}
.fondo{
    width: 100%;
    height: 100vh;
    margin: 0;
    padding: 0;
    position: fixed;
    background-image: url(../imagenes/fondo_pulmoAi_inicio.jpg);
    background-size: cover;
    background-position: center;
    z-index: -1;
}
    </style>
<header>
<figure>
        <img src="../imagenes/Icono Pulmo AI.png" alt="logo" class="logo">
    </figure>
    <nav class="HOME"> HOME </nav> 
    <nav class="NEW_PATIENT"> NEW PATIENT </nav>
    <nav class="FORMER_PATIENT"> FORMER PATIENT </nav>
    <nav class="ABOUT_US"> ABOUT US </nav>
    <figure>
        <img src="../imagenes/Icono Perfil Blanco.png" alt="perfil" class="perfil">
    </figure>
</header>
    <section>
        <img src="fondo_pulmoAi_inicio.jpg" alt="fondo" class="fondo">  
        <form action="Login.php" method="post"> 
            <container>
                <h1>Welcome</h1>
                <h2>Please, log in.</h2>
                <input type ="email" name="EmailID" id = "EmailID" placeholder="Email" required>
                <input type = "text" name="Clave" id = "Clave" placeholder="  password" required>
                <button class="b1"><a href="Front2.php">I don't have an account</a></button> 
                <button class="submit"><a href="FrontHome.php">Submit</a></button>
            </container>
        </form>
    </section>
</body>
</html>