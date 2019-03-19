<html>
<head> 
  <title>Formulario
</title> 
  </head> 
  <body>
    <body background="20180915_184124.jpg">
  <?php 
  echo "El nombre ingresado es: "; 
  echo $_REQUEST['nombre'];
  echo "<br>";
  echo "Su apellido ingresado es: "; 
  echo $_REQUEST['apellido'];
  echo "<br>";
  echo "El mail ingresado es: "; 
  echo $_REQUEST['mail'];
  echo "<br>";
  echo "Su password ingresada es: "; 
  echo $_REQUEST['clave'];
  echo "<br>";
  echo "Su comentario ingresado es: "; 
  echo $_REQUEST['comentarios'];
  echo "<br>";
  echo "Su nivel de estudio es: "; 
  echo $_REQUEST['estudios'];
  echo "<br>";
  echo "Su nacionalidad es: "; 
  echo $_REQUEST['pais'];
  echo "<br>";
  echo "Su documento ingresado es: "; 
  echo $_REQUEST['dni'];
  echo "<br>";
  echo "Su fecha de nacimiento es: "; 
  echo $_REQUEST['fechanacimiento'];
  echo "<br>";
  echo "Su direccion ingresada es: "; 
  echo $_REQUEST['direccion'];
  echo "<br>";
  echo "Su numero de celular ingresado es: "; 
  echo $_REQUEST['celular'];
  echo "<br>";

  ?>
   <br>
  </body> 
  </html>