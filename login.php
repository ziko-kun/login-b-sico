<?php //Aqui se marca o da inicio al codigo PHP que se detecta del lado del servidor y no es visible para el usuario

session_start(); //Iniciamos la sessión de PHP para pasar información entre paginas, cada pagina nueva que se ocupe con el usuario logueado debe iniciar esta función de PHP

if(!isset($_POST['email']) and !isset($_POST['password'])){
//Error, no se ha ingresado el correo o la contraseña o ambos, ya que se requiere de ambos datos para hacer la función.

  echo '<h2>Falta el correo y la contraseña</h2>';
   echo '<h4>No se puede continuar!</h4>';
   echo '<h3><a href="index.html">Regresar!</a></h3>'; //Enlace para volver al index y volver a intentar.
}else{
 //Se mando el correo y la contraseña para efectuar el logueo de usuarios

//Se pueden agregar mucho más funciones de seguridad, conexiones a bases de datos, verificaciones o adicionales, pero al ser básico saltaremos esa información.

//Para fines practicos se usaran 2 tipos de usuario con la misma contraseña

  switch($_POST['email']){
    case "admin":
if($_POST['password'] == "PRUEBA"){
//Usuario y contraseña correcta, se crean las variables de session para continuar.
$_SESSION['usuario'] == $_POST['email']; //Lo ponemos que sea el mismo que el nombre de usuario
$_SESSION['tipo'] == "a";  //Usamos uno corto para identificar, "a" de admin y "u" de usuario

  header('Location: dash.php'); //Ya creadas las variables de sessión pasamos al dash.php para identificar al usuario
  
}else{
  
  //Error, la contraseña no corresponde, asi que se genera el error en automatico.

  echo '<h2>Contraseña incorrecta</h2>';
   echo '<h4>No se puede continuar!</h4>';
   echo '<h3><a href="index.html">Regresar!</a></h3>'; //Enlace para volver al index y volver a intentar.
}
    break;
 case "usuario":
if($_POST['password'] == "PRUEBA"){
//Usuario y contraseña correcta, se crean las variables de session para continuar.
$_SESSION['usuario'] == $_POST['email']; //Lo ponemos que sea el mismo que el nombre de usuario
$_SESSION['tipo'] == "u";  //Usamos uno corto para identificar, "a" de admin y "u" de usuario

  header('Location: dash.php'); //Ya creadas las variables de sessión pasamos al dash.php para identificar al usuario
  
}else{
  
  //Error, la contraseña no corresponde, asi que se genera el error en automatico.

  echo '<h2>Contraseña incorrecta</h2>';
   echo '<h4>No se puede continuar!</h4>';
   echo '<h3><a href="index.html">Regresar!</a></h3>'; //Enlace para volver al index y volver a intentar.
}
    break;
    default:
//Error, no es ninguno de nuestros usuarios, asi que se genera el error en automatico.

  echo '<h2>Usuario no reconocido</h2>';
   echo '<h4>No se puede continuar!</h4>';
   echo '<h3><a href="index.html">Regresar!</a></h3>'; //Enlace para volver al index y volver a intentar.
    break;
  }


  }


