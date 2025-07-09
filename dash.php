<!doctype html>
<html lang="es"> <!-- ** Idioma prinicpal o detectado  ** -->
<head><!-- ** inicio del encabezado de la pagina HTML  ** -->
<meta charset="utf-8"><!-- ** Codificación del idioma  ** -->
<meta name="description" content="Login basico"><!-- ** Descripción del sitio  ** -->
<meta name="keywords" content="login,inicio,basico"><!-- **  Palabras claves que describan nuestro sitio ** -->
<meta name="author" content="Juan Manuel Aguilar Díaz"><!-- **   ** -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- ** Indicamos la escala de trabajo  ** -->
<title>Login basico</title><!-- ** Titulo que aparecerá en nuestra barra de navegación  ** -->
      
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"><!-- ** Llamamos a BOOTSTRAP que contiene los elementos visuales o CSS  ** -->
	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script><!-- ** Complemento de BOOTSTRAP con funciones javascript para visualizar o ejectutar funciones  ** -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"><!-- ** Complemento con iconos para una mejor vista  ** -->
  
</head><!-- **  Finalizamos el encabezado HTML ** -->

<body><!-- **  Inicia el cuerpo o pagina ** -->

<div class="card" style="width: 18rem;">
  <div class="card-header">
    Bienvenido: 
  
  <?php //Aqui se comienza con el codigo PHP

session_start();

if(!isset($_SESSION['tipo'])){


switch($_SESSION['tipo']){
    case "a":
echo $_SESSION['usuario'];
  echo '</div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Rol: ADMINISTRADOR GENERAL';

    break;
 case "u":
  echo $_SESSION['usuario'];
  echo '</div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Rol: USUARIO NORMAL';
    break;
    default:
//Error, no es ninguno de nuestros usuarios, asi que se genera el error en automatico.

  echo '<h2>Usuario no reconocido</h2>';
   echo '<h4>No se puede continuar!</h4>';
   echo '<h3><a href="index.html">Regresar al index!</a></h3>'; //Enlace para volver al index y volver a intentar.
   exit();
    break;
  }

  
}else{
//No se localizo la variable de usuario correcto

  echo '<h2>Ingresa al index para hacer tu logueo</h2>';
   echo '<h4>No se puede continuar!</h4>';
   echo '<h3><a href="index.html">index aqui!!</a></h3>'; //Enlace para volver al index y volver a intentar.
  exit();
}

?>


  
   </li>
  </ul>
</div>

  
</body>
</html>
