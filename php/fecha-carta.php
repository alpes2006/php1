<?php
//funcion para validar datos de fecha.
function tipo_formato1($fecha){
//separamos el en array de tres campos dd, mm, yyyy.    
    $arr_fecha = explode("-",$fecha);
//Validamos que la fecha tenga tres campos(valores).    
    if (count($arr_fecha)==3){
//el checkdate valora con calendario formato americano (mm, dd, yyyy)        
       if(checkdate($arr_fecha[0], $arr_fecha[1], $arr_fecha[2])){
           $resultado=($arr_fecha[1]."-".$arr_fecha[0]."-".$arr_fecha[2]);
       }else{
           $resultado=($arr_fecha[0]."-".$arr_fecha[1]."-".$arr_fecha[2]);
       }
    }else{
       $resultado=("Error de formato count");
    }
    return $resultado;     
}

//Cambiar la fecha a formato carta.
function cambiar_formato_carta($fecha){
//Ponemos la fecha en valores locales.    
    setlocale(LC_TIME, 'spanish');
//Ponemos la fecha con el formato y datos que le pasamos.    
    $fecha1=strftime("%A, %d de %B de %Y",$fecha);
//Ponemos la primera letra en mayuscula.
    $fecha1=ucfirst($fecha1);    
//    $fecha1=ucwords($fecha1);
    return $fecha1;
}

$entrada1="12-16-2015";
print("fecha1: ".$entrada1."<br/>");

$valida=tipo_formato1($entrada1);
$valida=strtotime($valida);
print("<br/>"."Valida formato europeo: ".$valida)."<br/>";
$fcarta=cambiar_formato_carta($valida);
$fcarta1=utf8_decode($fcarta);
print("<br/>"."Resultado F.Carta: ".$fcarta1)."<br/>";

?>