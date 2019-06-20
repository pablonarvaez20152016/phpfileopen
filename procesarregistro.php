<?php
    #echo($_POST["nombre"].$_POST["passwd2"]);
    if(($_POST["passwd"]==$_POST["passwd2"])and ($_POST["nombre"]!= null)and ($_POST["user"]!= null) and ($_POST["passwd"]!= null))
    {
        $contenido=$_POST["user"].";".$_POST["passwd"].";".$_POST["nombre"].";"."\n";
        #echo("<h1>si ingreso $contenido </h1>");
        $file=fopen("clave.txt",'a+');
        fputs($file,$contenido);
        #echo("<h1 align='center'>Registro completo</h1>");
        header("Location: login.php?registro=true");
    }
    else{
        header('Location: registro.php?error=2' );
    }
    

?>