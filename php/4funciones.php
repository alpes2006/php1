<?php
//Funciones
function creararray($longitud){
   $numeros=array();
   for ($i=0; $i<$longitud; $i++){
       $numeros[$i] = rand(0,50);
   }
   return $numeros;
}

function _suma($numeros, $longitud){
    $resultado = 0;
    for ($i=0; $i<$longitud; $i++){
        $numeros[] = rand(0,50);
        $resultado = $resultado + $numeros[$i];
     }
    return $resultado;
}

function _max($numeros, $longitud){
    $maximo = -1;
    for ($i=0; $i<$longitud; $i++){
        $numeros[] = rand(0,50);
        if ($maximo < $numeros[$i]){
              $maximo = $numeros[$i];  
        }
    }
    return $maximo;
}

function _min($numeros, $longitud){
    $minimo = 51;
    for ($i=0; $i<$longitud; $i++){
        $numeros[] = rand(0,50);
        if($minimo > $numeros[$i]){ 
             $minimo = $numeros[$i];  
        }
    }
    return $minimo;
}

//Inicio
$campo = $_GET['campo']; /* Y ya usas el dato para lo que sea */ 
$numeros1=array();
$numeros1=(creararray($campo));
$resultado=_suma($numeros1, $campo);
$max=_max($numeros1, $campo);
$min=_min($numeros1, $campo);

//Muestra resultados
$long=count($numeros1);
print("long: ".$long);
for ($i=0; $i<$long; $i++){
       print("<p>nums.".$i.": ".$numeros1[$i]."</p>");
}
print("<p>resultado: ".$resultado."</p>");
print("<p>max: ".$max."</p>");
print("<p>min: ".$min."</p>");

?>