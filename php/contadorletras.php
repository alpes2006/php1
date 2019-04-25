<?php
/* Contador de letras */
//Funciones
function transformacion($cadena){
//Elimina espacios.
    $cadena=str_replace(' ', '', $cadena);
//Quitar mayusculas.
    $cadena=strtolower($cadena);    
//Cadena de caracteres (un solo campo) a array.
    $cadena=str_split($cadena);
//Cuenta letras de un array
    $cadena1=array();
    $cadena1=array_count_values($cadena);

    return $cadena1;
}

function quemasaparece($lista1, $longitud){
    $valor1 = array_key_first($lista1);
      foreach ($lista1 as $clave=>$valor){
        if($valor1<$valor){
           $valor1 = $valor; 
        }
      }
    $resultado=array();
      foreach ($lista1 as $clave=>$valor){
        if($valor1==$valor){
           $resultado[$clave]=$valor;
        }
      }
    return $resultado;    
}      

function quemenosaparece($lista1, $longitud){
    $clave1 = array_key_first($lista1);
    $valor1 = $lista1[$clave1];
    foreach ($lista1 as $clave=>$valor){
        if($valor1>$valor){
           $valor1 = $valor; 
        }
      }
    $resultado=array();
    foreach ($lista1 as $clave=>$valor){
        if($valor1==$valor){
           $resultado[$clave]=$valor;
        }
      }
    return $resultado;    
}      

//Inicio
$campo = $_GET['campo']; /* Y ya usas el dato para lo que sea */ 
$cadena1=transformacion($campo);
$long=count($cadena1);
$resultado_mas=array();
$resultado_mas=quemasaparece($cadena1, $long);
print("resultado_mas: ");
print_r($resultado_mas);
$resultado_menos=quemenosaparece($cadena1, $long);
print("resultado_menos: ");
print_r($resultado_menos);

?>