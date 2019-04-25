<?php
function tipo_formato($fecha, $formato){
//separamos el en array de tres campos dd, mm, yyyy.    
    $arr_fecha = explode("-",$fecha);
    if (count($arr_fecha)!=3){
       $resultado=("Error de formato count");
    }        
//el checkdate valora con calendario formato americano (mm, dd, yyyy)        
    if ($formato=="europeo" && (checkdate($arr_fecha[1], $arr_fecha[0], $arr_fecha[2]))){
        $resultado=($arr_fecha[1]."-".$arr_fecha[0]."-".$arr_fecha[2]);
        print("cambiamos a formato americano");
    }elseif($formato=="eeuu" && (checkdate($arr_fecha[0], $arr_fecha[1], $arr_fecha[2]))){
        $resultado=($arr_fecha[1]."-".$arr_fecha[0]."-".$arr_fecha[2]);
        print("cambiamos a formato europeo");        
    }else{
        $resultado=("Error de formato");
    }
    return $resultado;     
}

//$entrada1="21-01-2015";
//$formato1="europeo";
$entrada1="01-21-2015";
$formato1="eeuu";

print("fecha1: ".$entrada1."<br/>");
print("formato[europeo/eeuu]: ".$formato1."<br/>");

$valida=tipo_formato($entrada1, $formato1);

print("<br/>"."Resultado: ".$valida)."<br/>";

/*
$fechaA=strtotime($entrada1);

$fechaB=strtotime($entrada2);
print("fecha2: ".$entrada2."<br />");

$res_mayor=comp_fec($fechaA, $fechaB);
$res_mayor=date("j/n/Y",$res_mayor);
print("Fecha mayor: ".$res_mayor);
*/
?>