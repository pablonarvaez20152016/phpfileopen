<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>registro.php</title>
</head>
<body>

    
  <header><h1>Pagina de Registro</h1></header>
  <?php
      #echo("<div>".$_GET["error"]."</div>");
		if(isset($_GET["error"]) and ($_GET["error"]==2)){
            echo("<h2>casilla vacia o contraseña no coincide vuelva a intentar</h2>");	
		}
	
    ?>
    <div class="container">
  <form action="procesarregistro.php" method="POST">

    <label for="name">User</label>
    <input type="text" id="user" name="user" placeholder="User..">
    <label for="name">Nombre</label>
    <input type="text" id="user" name="nombre" placeholder="Nombre..">
    <label for="passwdd">Contraseña</label>
    <input type="text" id="passwd" name="passwd" placeholder="Contraseña..">
    <label for="passwdd">confirmar Contraseña</label>
    <input type="text" id="passwd2" name="passwd2" placeholder="Contraseña..">
    <button type="submit" class="btn btn-success" id="registrar" name="registrar" >Registrarse</button>
  
    
  </form>
</div>



<div class="flex.container">
  
  <footer id="nav-footer" class="nav-footer flex-container">
                <div class="row">
                   
                    <div class="col-sm-6">Contactos <hr>
                        <ul>
                                <li>correos: pablonarvaez20152016@gmail.com</li>
                                <li>Facebook: panartal@hotmail.com</li>
                                <li>Estudiantes de la Universidad de Nariño</li>
                            </ul>
                    </div>
                    <div class="col-sm-6">Universidad de Nariño <hr>
                        <ul>
                                <li>Contacto Sede Pasto</li>
                                <li>Torobajo - Calle 18 Carrera 50</li>
                                <li>Conmutador: (+ 057) 7244309 –7311449 </li>
                                <li>Ext. 500</li>
                                <li>Línea Gratuita Nacional: 018000957071</li>
                                <li>Pasto - Nariño., Colombia</li>
                            </ul>
                    </div>
                </div>
                <div><img src="udenar.png" alt="escudo udenar"></div>
                
              
  </footer>
</div>




   

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</body>
</html>                 