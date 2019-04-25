<?php
//funcion para validar datos de fecha.
function compara_pwd($contrasenya,$almacenado){
     if (md5(sha1($contrasenya))==md5(sha1($almacenado))){
        $resultado="true";
     }else{
        $resultado="false";
     }
    return $resultado;
}
/* Para recoger datos del fichero de HTML miraremos el formato que se usa 
_POST o  _GET. */
$entrada1 = $_GET['pwd1'];
$almacenada="foap2018";
print("contraseña: ".$entrada1."<br/>");
print("almacenado: ".$almacenada."<br/>");
$valida=compara_pwd($entrada1,$almacenada);
print("<br/>"."Resultado Valida: ".$valida)."<br/>";
?>
