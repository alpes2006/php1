<!DOCTYPE html>
<html>
<head>
    <title>Ej2. Edad 1 fichero</title>
</head>
<body>
<!-- Isset revisa si se ha enviado el $_POST, si es asi-->
<?php
   if (isset($_POST["enviar"])){
      $edad= $_POST['edad1'];
      print("La edad es:".$edad);
   }else{
?>
<!-- El atributo action, si se llama a si mismo, como es el caso. Se puede omitir 
ya que es el valor que recoge por defecto. el metodo POST puede enviar mas datos
que el metodo GET. -->
   <form action="php/edad-1fich.php" method="post">   
      <p id="edad">Edad: <input type="text" name="edad1" id="edad1"/></p>
      <input type="submit" name="enviar" value="Enviar">
   </form> 
<?php 
   } 
?>   
</body>
</html>