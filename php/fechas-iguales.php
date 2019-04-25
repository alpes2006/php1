<?php

function comp_fec($fecha1, $fecha2){
    if ($fecha1 > $fecha2){
        $resultado = $fecha1;
    }else{
        $resultado = $fecha2;
    }
    return $resultado;
}

$entrada2="5 april 2001";
$entrada1="01-01-2015";

$fechaA=strtotime($entrada1);
print("fecha1: ".$entrada1."<br />");

$fechaB=strtotime($entrada2);
print("fecha2: ".$entrada2."<br />");

$res_mayor=comp_fec($fechaA, $fechaB);
/* Se pasan dos valores a la funcion date([formato],[valor_fecha]); */
$res_mayor=date("j/n/Y",$res_mayor);
print("Fecha mayor: ".$res_mayor);

?>