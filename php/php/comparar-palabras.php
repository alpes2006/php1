<!DOCTYPE html>
<html>
<head>
    <title>Ej.1.5 php2</title>
</head>
<body>
<!-- ej. 1.5 comparar palabras.
Con el ejercicio anterior:
- muestra la cadena que se envía (como antes).
- Nos dice si todas las palabras de la cadena están
encadenadas:
Bicicleta tambor oruga - > SI
Hola que tal -> NO

Ejemplos de funciones a utilizar:
//str_split ( string $string [, int $split_length = 1 ] ) : array
//substr( string $string , int $start [, int $length ]) - Usada en
//explode ( string $delimiter , string $string [, int $limit = PHP_INT_MAX ] ) : array


Solucion:
 string (hola laura ramirez)
 PASO1: array('hola', 'laura', 'ramirez')
 PASO2: comparar las 2 letras de la primera palabra con la funcion (substr)

-->
<?php
   if (isset($_POST["enviar"])){

      function comparar_palabras($primletras,$ult2letras,$totp){
        $nunca='no';
        $resultado='no';
        for($i=0; $i<$totp; $i++){
           if (($ult2letras[$i])==($primletras[$i+1])){
              $resultado='si';
           }else{
              $resultado='no';
              break;
           }
        }
        return $resultado;
      } 
      $frase=$_POST['frase1']; 
      $cadena_array=explode(' ', $frase);
      $total_palabras=count($cadena_array);
      print("total: ".$total_palabras);
      for ($i=0; $i<$total_palabras;$i++){
        $palabra=$cadena_array[$i];
        $palabra_array=explode('',$palabra);        
        $total_letras=count($palabra_array);
        print("total letras: ".$total_letras);
        $primletras[$i]=($palabra[0].$palabra[1]);
        $ult2letras[$i]=($palabra[$total_letras-1].$palabra[$total_letras]);
      }
      $resultado=comparar_palabras($primletras,$ult2letras,$total_palabras);
      $print ("¿Es una frase encadenada? ".$resultado);

    }else{
?>
      <form method="post">   
        <p id="edad">Frase: <input type="text" name="frase1" id="frase1" value="Bicicleta tambor oruga"/></p>
        <input type="submit" name="enviar" value="Enviar">
      </form> 
<?php 
   } 
?>   
</body>
</html>
