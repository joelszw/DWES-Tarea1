<!DOCTYPE html>
 
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
 
 
//Defino dos variables con mi nombre y apellidos
$name = "Joel";
$lastname = "Szwarcbort"; 
//Visualizo el texto con echo y print, por ejemplo en mi caso (deben de aparecer las comillas del ejemplo
echo "1) Mi nombre es " .$name ." y mi apellido es ".$lastname;
echo "<br>";
$totalname = "2) Mi nombre es " .$name ." y mi apellido es ".$lastname;
print $totalname;
 echo "<br>";
echo "3) Permite unir varias variables y elementos";
echo "<br>";
echo "4) Permite un solo valor";
echo "<br>";
echo "5) Yo prefiero utilizar print y printf cuando quiero indicar que tipo de valor voy a imprimir";
 echo "<br>";
echo "6) En las ultimas versiones de PHP se permite este posibilidad, en la version 3 y creo que en la 4 no se permitira, 
es debido a que print y echo no son funciones";
$frase = <<<FIN
LINEA 1
LINEA 2
LINEA 3
LINEA 4
LINEA5
FIN; 
 echo "<br>";
echo $frase; 
echo "<br>";
$v=14; ?>$v=14<?php
 echo "<br>";
printf("Valor de la variable, valor -%d-", $v);
 echo "<br>";
echo "Tipo de la variable es ". gettype($v);
 echo "<br>";
 $v=true; ?>$v=true<?php
  echo "<br>";
 printf("Valor de la variable, valor -%d-", $v);
 echo "<br>";
echo "Tipo de la variable es ". gettype($v);
 echo "<br>";
 $v=3.45;?>$v=3.45<?php
  echo "<br>";
 printf("Valor de la variable, valor -%.2f-", $v);
 echo "<br>";
echo "Tipo de la variable es ". gettype($v);
 echo "<br>";
  $v="Hola buenas"; ?>$v="Hola buenas"<?php
   echo "<br>";
 printf("Valor de la variable, valor -%s-", $v);
 echo "<br>";
echo "Tipo de la variable es ". gettype($v);
 echo "<br>";
  $v=null; ?>$v=null'<?php
   echo "<br>";
 printf("Valor de la variable, valor -%s-", $v);
 echo "<br>";
echo "Tipo de la variable es ". gettype($v);
 echo "<br>";
 
 $i=0;
for($i=64; $i<=122; $i++){
	 echo "Valor Ascii $i es = ".chr($i);
	 echo "<br>";
 }
 
echo "<br>";
echo "21. Valor en Segundos: ". strtotime("now");
echo "<br>";
echo "Indica la fecha UNIX que es la cantidad de segundos que hay desde el 1/1/1970 hasta la fecha";
echo "<br>";
echo "22. Fecha Actual: " . date('d-m-Y',strtotime("now"));
echo "<br>";
printf ("23. Dias desde el 01/01/1970: %d", (strtotime("now")/86400));
echo "<br>";
printf ("25. Minutos desde el 01/01/1970: %d", (strtotime("now")/3600));
echo "<br>";
printf ("26. Segundos desde el 01/01/1970: %d", (strtotime("now")/60));
echo "<br>";
printf ("29. Años desde el Mi Cumpleaños: %d", (((strtotime("now")-strtotime("22 October 1982"))/31536000)));
echo "<br>";
printf ("30. Dias desde el Mi Cumpleaños: %d", (((strtotime("now")-strtotime("22 October 1982"))/86400)));
echo "<br>";


//Usando la función setlocale(...) y strftime(...)
//Puede ser que tengas que habilitar el idioma en el sistema con locale-gen
//26)  Obtén la fecha actual con formato por ejemplo domingo, 28 de octubre de 2018
//27)  Ahora con formato en inglés  Sunday, 28 October 2018
//28) y con formato en francés  dimanche, 28 octobre 2018
 
 
// 29-30)Asigna a una variable la fecha de tu cumpleaños
// Realiza una operación y obtén tu edad en años, meses y días (valor entero).
// tienes 23 años, 10 meses y 4 días
 
 
 
 
 
//31-32)Asigna a una variable una fecha de 30/10/1969 (mira las funciones strtotime() o bien mktime() para ello
// Obtén su edad en años, en meses y luego en días siempre redondeando
// tienes xx años
// tienes xx meses
// tienes xx días
 
 
//33-36). Usa la función getdate(...) y visualiza con la función print_r(.) el valor que retorna, comenta el resultado
//. Si escribo getdate(1) podrías explicar el contenido del array que nos retorna
//. Obtener la edad de una persona nacida el 1/1/1969
//37-64)Explica el siguiente código observando el resultado que se produce fuente obtenido en parte de http://php.net/manual/es/function.strtotime.php
echo "<hr>";
echo strtotime("now"), "<br/>";
echo date('d-m-Y', strtotime("now")), "<br/>";
echo strtotime("27 September 1970"), "<br/>";
echo date('d-m-Y',strtotime("10 September 2000")), "<br/>";
echo strtotime("+1 day"), "<br/>";
echo date('d-m-Y',strtotime("+1 day")), "<br/>";
echo strtotime("+1 week"), "<br/>";
echo date('d-m-Y',strtotime("+1 week")), "<br/>";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "<br/>";
echo date('d-m-Y',strtotime("+1 week 2 days 4 hours 2 seconds")), "<br/>";
echo strtotime("next Thursday"), "<br/>";
echo date('d-m-Y',strtotime("next Thursday")), "<br/>";
echo strtotime("last Monday"), "<br/>";
echo date('d-m-Y',strtotime("last Monday")), "<br/>";
echo "<hr>";
?>
 <br>
Copyright - Joel Szwarcbort - DWES - Los Enlaces - ZGZ - 22-23 - PHP 8.0
</body>
</html>