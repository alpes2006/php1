<?php
$mensaje_es="Hola\r";
$mensaje_en="Hello";
$idioma="es";      //variable que decide el idioma de la pagina
$mensaje="mensaje_".$idioma;
print $$mensaje;  //lo equivalente a print $mensaje_es
print $mensaje;
?>