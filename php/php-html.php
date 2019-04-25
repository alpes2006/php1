<!DOCTYPE html>
<head>
<title>Mi primer programa en PHP</title>
</head>
<body>
<h1>Pruebas con html y php</h1>
<?PHP
     print("<p>parrafo php 1</p>");   
?>
<p>parrafo html 1</p>

<?PHP
     print("<p>parrafo php 2</p>");   
?>
<p>parrafo html 2</p>
<?PHP

//echo muesta una o mas cadenas 
$texto1 = "<p>Primer parrafo con variable dentro de php mostrada con echo.</p>";
$texto2 = "<p>Segundo parrafo con variable dentro de php mostrada con echo.</p>";
$texto3 = "<p>Tercer parrafo concatena cadenas print php.</p>";
$texto4 = "<p>Cuarto parrafo concatena cadenas print php.</p>";

//Cadenas echo.
echo $texto1, $texto2;
echo "Cadenas1"," Cadenas2"," Cadenas3";

//concatenar cadenas
print $texto3.$texto4." ccccc"." pppppp";

// para poder generar codigo html legible "\n".
print("<p>Parrafo 1 leible</p>\n");
print("<p>Parrafo 2 leible</p>");







?>



</body>
</html>