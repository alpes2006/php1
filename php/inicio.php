<!DOCTYPE html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Inicio: Funciones</title>
</head>
<body>
<!-- PHP - Parte 1 -->
   <h1>Funciones</h1>
   <h3>Ej.7 Dia mayor:</h3>
   <?php require("comparar-fechas.php"); ?>
   <h3>Ej.8 Formato de fecha</h3>
   <?php require("formato-fecha.php"); ?>
   <h3>Ej.9 Pasar fecha europea a fecha de carta.</h3>
   <?php require("fecha-carta.php"); ?>
   <h3>Ej.10 Comparar dato con pwd.</h3>
   <?php require("comparar-pwd.php"); ?>
<!-- PHP - Parte 2 -->
   <!-- Ej1. Edad - dos fichero. -->
   <h3>Ej.1 Pasar edad (dos ficheros).</h3>
   <form action="php/edad.php" method="post">   
      <p id="edad">Edad: <input type="text" name="edad1" id="edad1"/></p>
      <input type="submit" value="Enviar">
   </form> 
   <!-- Ej1. Edad - un ficheros. -->
   <h3>Ej.1 Pasar edad (un fichero).</h3>
   <?php require("php/edad-1fich.php"); ?>
   <!-- Ej.1.5. Edad - un ficheros. -->
   <h3>Ej.1.5 Comparar palabras.</h3>
   <?php require("php/comparar-palabras.php"); ?>


</body>
</html>