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
.input_feedback{
    border: 2px solid white;
    padding: 1px;
    width: 50%;
    height: 100%;
}
.feedback{
    display: flex;
    flex-wrap: nowrap;
    margin-left: 10%;
    magin-top: 10%;
    font-size: 20px;
}
#input_medic{
    margin-left: 45px;
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
        <form onSubmit="return sendRequest(event)"> 
            <container>
                <input type="text" name="NombreYapellido" id="NombreYapellido" placeholder="NAME AND SURENAME" required>
                <input type="text" name="Obrasocial" id="Obrasocial" placeholder="MEDICAL ASSURANCE" required>
                <input type="number" name="dna" id="dna" placeholder="DNA" required>
                <input type="email" name="Email" id="Email" placeholder="EMAIL ADRESS" required>
                <input type="datetime" name="FechaDeNacimiento" id="FechaDeNacimiento" placeholder="DATE OF BIRTH" required>
                <table border="1">
                    <tr>
                        <td>FEV1 Pre-BD Value</td>
                        <td><input type="text" name="FEV1(1)" id="dato1" placeholder="Escribe aquí" required></td>
                    </tr>
                    <tr>
                        <td>FEV1 Pre-BD Pred</td>
                        <td><input type="text" name="FEV1(2)" id="dato2" placeholder="Escribe aquí" required></td>
                    </tr>
                    <tr>
                        <td>FEV1 Post-BD Value</td>
                        <td><input type="text" name="FEV1(3)" id="dato3" placeholder="Escribe aquí" required></td>
                    </tr>
                    <tr>
                        <td> FEV1 Post-BD Pred </td>
                        <td><input type="text" name="FEV1(4)" id="dato4" placeholder="Escribe aquí" required></td>
                    </tr>
                    <tr>
                        <td> FVC Pre-BD Value</td>
                        <td><input type="text" name="FVC(1)" id="dato5" placeholder="Escribe aquí" required></td>
                    </tr>
                    <tr>
                        <td> FVC Pre-BD Pred</td>
                        <td><input type="text" name="FVC(2)" id="dato6" placeholder="Escribe aquí" required></td>
                    </tr>
                    <tr>
                        <td> FVC Post-BD Value</td>
                        <td><input type="text" name="FVC(3)" id="dato7" placeholder="Escribe aquí" required></td>
                    </tr>
                    <tr>
                        <td> FVC Post-BD Pred</td>
                        <td><input type="text" name="FVC(4)" id="dato8" placeholder="Escribe aquí" required></td>
                    </tr>
                    <tr>
                        <td> FEF Pre-BD Value</td>
                        <td><input type="text" name="FEF(1)" id="dato9" placeholder="Escribe aquí" required></td>
                    </tr>
                    <tr>
                        <td> FEF Pre-BD Pred</td>
                        <td><input type="text" name="FEF(2)" id="dato10" placeholder="Escribe aquí" required></td>
                    </tr>
                    <tr>
                        <td> FEF Post-BD Value</td>
                        <td><input type="text" name="FEF(3)" id="dato11" placeholder="Escribe aquí" required></td>
                    </tr>
                    <tr>
                        <td> FEF Post-BD Pred</td>
                        <td><input type="text" name="FEF(4)" id="dato12" placeholder="Escribe aquí" required></td>
                    </tr>
                </table>
                <input type="submit" class="submit" value="Enviar" id="submit">
                
                <div class="feedback" id= "diagnotico">
                    <label class="diag">IA Diagnosis:</label>
                    <input class = "input_feedback" type="text" required>
                </div> 
                </table>
                <div class="feedback">
                    <label class="medic">Medication:</label>
                    <input class = "input_feedback" id="input_medic" placeholder = "Type here..." type ="text" required>
                </div>    
                <br> </br>
                <br> </br>
                <br> </br>
                <br> </br>
            </container>
        </form>
</section>
<script>
    
    const sendRequest = (e) => {
        e.preventDefault();
        alert("Hola");
        const dato1 = document.getElementById("dato1").value;
        const dato2 = document.getElementById("dato2").value;
        const dato3 = document.getElementById("dato3").value;
        const dato4 = document.getElementById("dato4").value;
        const dato5 = document.getElementById("dato5").value;
        const dato6 = document.getElementById("dato6").value;
        const dato7 = document.getElementById("dato7").value;
        const dato8 = document.getElementById("dato8").value;
        const dato9 = document.getElementById("dato9").value;
        const dato10 = document.getElementById("dato10").value;
        const dato11 = document.getElementById("dato11").value;
        const dato12 = document.getElementById("dato12").value;
        
        let res = await fetch(`http://localhost:8000/PulmoAIds?dato1=${dato1}&dato2=${dato2}&dato3=${dato3}&dato4=${dato4}&dato5=${dato5}&dato6=${dato6}&dato7=${dato7}&dato8=${dato8}&dato9=${dato9}&dato10=${dato10}&dato11=${dato11}&dato12=${dato12}`);
        let data = await res.json();
        console.log(data);

        return false;
    }

</script>

</body>
</html>