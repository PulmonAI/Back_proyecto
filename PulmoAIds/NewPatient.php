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
    margin-top: 5px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    cursor: pointer;
    font-size: 17px;
}
button:active{
    color:rgb(115, 208, 240);
    background-color: rgb(95, 194, 251);
}
.submit{
    color: white;
    background-color: rgb(24, 124, 231);
    border-radius: 5px;
    font-size: 16px;
    margin-top: 20px;
    margin-left: 180px;
    width: 160px;
    height: 180px;
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
.NEW_PATIENT{
text-shadow: 2px 4px 10px rgb(255, 255, 255);
}
form{
    justify-content: center;
    display: flex;
    color: white;
}
label{
    margin-bottom: 18px;
}
input{
    background-color: transparent;
    margin-bottom: 18px;
    margin-left: 30px;
    margin-right: 15px;
    margin-top: 1px;
    border: none;
    height: 30px;
    width: 300px;
    font-style: italic;
    font-size: 16px;
    color: white;
}
input ::placeholder{
    color: white;
}
td{
    color: lightblue;
}
a{
   color: white;
   text-decoration: none;
}
container{
    color: white;
    background-color:none;
    display: flex;
    justify-content: center;
    flex-direction: column;
    position: absolute;
    border-radius: 15px;
    width: 530px;
    height: 560px;
    margin-top: 390px;
}
table{
    margin: auto;
    margin-left: 25px;
    margin-right: 5px;
    color: white;
    border-style: groove;
    border-color: white;
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
    <nav class="HOME"> <a href="FrontHome.php"a> HOME </a> </nav> 
    <nav class="NEW_PATIENT"> NEW PATIENT </nav>
    <nav class="FORMER_PATIENT"> FORMER PATIENT </nav>
    <nav class="ABOUT_US"> ABOUT US </nav>
    <figure>
        <img src="../imagenes/Icono Perfil Blanco.png" alt="perfil" class="perfil">
    </figure>
</header>
    <section>
        <img src="fondo_pulmoAi_inicio.jpg" alt="fondo" class="fondo">  
        <form action="Paciente.php" method="post"> 
            <container>
                <input type="text" name="NombreYapellido" id="NombreYapellido" placeholder="NAME AND SURENAME" required>
                <input type="text" name="Obrasocial" id="Obrasocial" placeholder="MEDICAL ASSURANCE" required>
                <input type="number" name="dna" id="dna" placeholder="DNA" required>
                <input type="email" name="Email" id="Email" placeholder="EMAIL ADRESS" required>
                <input type="datetime" name="FechaDeNacimiento" id="FechaDeNacimiento" placeholder="DATE OF BIRTH" required>
                <table border="1">
                    <tr>
                        <td>FEV1 Pre-BD Value</td>
                        <td><input type="text" name="FEV1(1)" id="input_tabla"  placeholder="Escribe aquí" required></td>
                    </tr>
                    <tr>
                        <td>FEV1 Pre-BD Pred</td>
                        <td><input type="text" name="FEV1(2)" placeholder="Escribe aquí" required></td>
                    </tr>
                    <tr>
                        <td>FEV1 Post-BD Value</td>
                        <td><input type="text" name="FEV1(3)" placeholder="Escribe aquí" required></td>
                    </tr>
                    <tr>
                        <td> FEV1 Post-BD Pred </td>
                        <td><input type="text" name="FEV1(4)" placeholder="Escribe aquí" required></td>
                    </tr>
                    <tr>
                        <td> FVC Pre-BD Value</td>
                        <td><input type="text" name="FVC(1)" placeholder="Escribe aquí" required></td>
                    </tr>
                    <tr>
                        <td> FVC Pre-BD Pred</td>
                        <td><input type="text" name="FVC(2)" placeholder="Escribe aquí" required></td>
                    </tr>
                    <tr>
                        <td> FVC Post-BD Value</td>
                        <td><input type="text" name="FVC(3)" placeholder="Escribe aquí" required></td>
                    </tr>
                    <tr>
                        <td> FVC Post-BD Pred</td>
                        <td><input type="text" name="FVC(4)" placeholder="Escribe aquí" required></td>
                    </tr>
                    <tr>
                        <td> FEF Pre-BD Value</td>
                        <td><input type="text" name="FEF(1)" placeholder="Escribe aquí" required></td>
                    </tr>
                    <tr>
                        <td> FEF Pre-BD Pred</td>
                        <td><input type="text" name="FEF(2)" placeholder="Escribe aquí" required></td>
                    </tr>
                    <tr>
                        <td> FEF Post-BD Value</td>
                        <td><input type="text" name="FEF(3)" placeholder="Escribe aquí" required></td>
                    </tr>
                    <tr>
                        <td> FEF Post-BD Pred</td>
                        <td><input type="text" name="FEF(4)" placeholder="Escribe aquí" required></td>
                    </tr>
                </table>
                <input type="submit" class="submit" value="Submit">
                <br> </br>
                <br> </br>
                <br> </br>
                <br> </br>
            </container>
        </form>
</section>
<script>
    let res = await fetch("http://localhost:8000/PulmoAIds")
    let data = await res.json()
    console.log(data)
</script>
<!-- $pythonScript = "C:\Users\47431890\Documents\GitHub\Back_proyecto\PulmoAIds\response.py";
exec("python3 $pythonScript", $output, $returnCode); -->

</body>
</html>