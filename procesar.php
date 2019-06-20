<?php
if(isset($_POST["ingresar"])){
    validarusuario();
}
if(isset($_POST["registrar"])){
    registrarusuario();
}
function validarusuario(){
    $filas=file('clave.txt'); 
    foreach($filas as $value){
		list($user, $password, $nombre) = explode(";", $value);
		if($_POST["nombre"]==$nombre and $_POST["passwd"]==$password)
		{   echo("Bienvenido ". $_POST["nombre"]. " al sistema");
            return;
		}
		#echo("cuantas veces impime $value<br>");	
    }
    header('Location: login.php?error=1');
	#fclose($filas);
}
function registrarusuario(){
    header('Location: registro.php');
}
   
    
    ?>