<?php
//Se define la funcion.
function f1(){
     $respuesta = ("<p>Hola</p>");
     return $respuesta;
}
//Se llama a la funcion y se asigna una variable al resultado.
$respuestadelafuncion="";
echo ("<p>Antes de la llamada a la funcion: ".$respuestadelafuncion."</p>");
$respuestadelafuncion = f1();
echo ("<p>Despues de la llamada a la funcion: ".$respuestadelafuncion."</p>");

//Pasar los valores a parametros de las funcones.
function f2($parametro1, $parametro2){
    $respuesta = ("<p>Hola ".$parametro1." ".$parametro2.".</p>");
    return $respuesta;
}
//Se llama a la funcion y se asigna una variable al resultado.
$respuestadelafuncion="";
echo ("<p>Antes de la llamada a la funcion: ".$respuestadelafuncion."</p>");
$respuestadelafuncion = f2("perico", "manolo");
echo ("<p>Despues de la llamada a la funcion: ".$respuestadelafuncion."</p>");

/*
el parametro2 tiene un valor de manera que si no le pasamos ningun valor 
asignará el valor "opcional2".
*/
function f3($parametro1, $parametro2="Opcional2"){
    $respuesta = ("<p>Hola ".$parametro1." ".$parametro2.".</p>");
    return $respuesta;
}
//Se llama a la funcion y se asigna únicamente un valor.
$respuestadelafuncion="";
echo ("<p>Antes de la llamada a la funcion: ".$respuestadelafuncion."</p>");
$respuestadelafuncion = f3("perico");
echo ("<p>Despues de la llamada a la funcion: ".$respuestadelafuncion."</p>");

function f4($parametro1="Opcional1", $parametro2="Opcional2",$parametro3="Opcional3"){
    $respuesta = ("<p>Hola, ".$parametro1.", ".$parametro2.", ".$parametro3.".</p>");
    return $respuesta;
}
//Se llama a la funcion y asignamos valores "null" o "" devolverá un valor en blanco.
$respuestadelafuncion="";
echo ("<p>Antes de la llamada a la funcion: ".$respuestadelafuncion."</p>");
$respuestadelafuncion = f4("perico",null,"");
echo ("<p>Despues de la llamada a la funcion: ".$respuestadelafuncion."</p>");

/*funciones max(), min(), count(), array_sum(), array_key_exist().*/


/*


*/

?>