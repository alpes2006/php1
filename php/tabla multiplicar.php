<?php 
// Tabla de multiplicar.
/* programa que calcula una tabla de multiplicar.
- Usar “print” o “echo” para que PHP devuelva código HTML.
- Usar Tablas o Listas.
- Usar Bucles for o while para facilitar la tarea. */
// 3a (While) y 3b (for). 
$tabla = 2;
$i=0;
//$lista2 = array(1,2,3,4,5,6,7,8,9,10);
print("Hoy aprenderemos a multiplicar por 2");
print("<ul>");
while($i<=10){
   $resultado = $i * $tabla;
   print("<li>".$i."* 2 =".$resultado."</li>");
   $i++;
}
print("</ul>");
print("fin - 2");

/*
//3b (for).
$tabla = 3;
print("<p>Ahora vamos a aprender a multiplicar por 3</p>");
for ($i=0; $i<=10; $i++){
   $resultado = $i * $tabla;
   print("<p>".$i."* 3 =".$resultado."</p>");
}
*/
//todas las tablas
print("<p>Ahora vamos a aprender todas la tablas</p>");
print("<table border='1'>");
for ($i=0; $i<=10; $i++){
   print("<tr>");
   for ($tabla=0; $tabla<=10; $tabla++){
      print("<td>");	
      $resultado = $i * $tabla;
      print("<p>".$i."*".$tabla."=".$resultado."</p>");
      print("</td>");
   }
   print("</tr>");
}
print("</table>");
/*
//Prova
print("<p>Prova</p>");
print("<UL>\n");
for($i=1; $i<=5; $i++)
   print("<LI>Elemento $i</LI>\n");
print("</UL>\n");
*/
//todas las tablas
print("<p>Ahora vamos a aprender todas la tablas 'While'</p>");
print("<table border='1'>");
$i=0;
while ($i<=10){
   print("<tr>");
   $i++;
   $tabla=0;
   while ($tabla<=10){
      print("<td>");	
      $resultado = $i * $tabla;
      print("<p>".$i."*".$tabla."=".$resultado."</p>");
      print("</td>");
      $tabla++;
   }
   print("</tr>");
}
print("</table>");












?>