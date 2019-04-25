<?php
/*
$color = array('rojo'=>101, 'verde'=>51, 'azul'=>255); 
$numeros = array(1,4,5,6);

foreach($color as $valor){
    print("Valor: $valor<br/>");
*/

//Suma 
/*
$alea = 0;
$resultado = 0;
$numeros = array("numero"=>$alea);
for ($i=0; $i<10; $i++){
    $numeros[] = rand(0,50);
    print ("<p>numeros-array: ".$numeros[$i]."</p>");
    $resultado = $resultado + $numeros[$i];
 }
print("resulado: ".$resultado);
*/

//Maximo
/*
$alea = 0;
$maximo = -1;
$numeros = array("numero"=>$alea);
for ($i=0; $i<10; $i++){
    $numeros[] = rand(0,50);
    print ("<p>numeros-array: ".$numeros[$i]."</p>");
    if ($maximo < $numeros[$i]){
          $maximo = $numeros[$i];  
    }
}
print("maximo: ".$maximo);             
*/  
/*
//Minimo
$minimo = 51;
$alea = 0;
$numeros = array("numero"=>$alea);
for ($i=0; $i<10; $i++){
    $numeros[] = rand(0,50);
    print ("<p>numeros-array: ".$numeros[$i]."</p>");
    if($minimo > $numeros[$i]){ 
         $minimo = $numeros[$i];  
    }   
}
print("minimo: ".$minimo);             
*/
/*
//Todo junto
$resultado = 0;
$maximo = -1;
$minimo = 51;
$alea = 0;
$numeros = array("numero"=>$alea);
for ($i=0; $i<10; $i++){
    $numeros[] = rand(0,50);
    print ("<p>numeros-array: ".$numeros[$i]."</p>");
    $resultado = $resultado + $numeros[$i];
    if($minimo > $numeros[$i]){ 
         $minimo = $numeros[$i];  
    }   
    if ($maximo < $numeros[$i]){
        $maximo = $numeros[$i];  
    }
}
print("resultado: ".$resultado."<br>");
print("maximo: ".$maximo."<br>");
print("minimo: ".$minimo."<br>");             
*/

//foreach
for ($i=0; $i<10; $i++){
   $numeros[] = rand(0,50);
}

//Suma con foreach.
print_r($numeros);
$suma=0;
foreach ($numeros as $numero){
    $suma = $suma+$numero;
}
print("suma: ".$suma);

//maximo foreach
$max = $numeros[0];
foreach($numeros as $numero){
    if ($numero > $max){
        $max=$numero;
    }
}
print("maximo: ".$max);

//minimo foreach
$min = $numeros[0];
foreach($numeros as $numero){
    if ($numero < $min){
        $min=$numero;
    }
}
print("minimo: ".$min);
//Funciones max() count(array[$i])

?>