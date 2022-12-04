<?php 
//Variables practica 1
//Joel Szwarcbort - 03/12/2022
?>
<html>
<header>
<title>Tarea 2 - Practica 1 - Joel Szwarcbort</title>
</header>
<body>
Funciones en PHP
<br>
<?php
       function funca(&$vala, $valb){
           $vala=$vala * 2 ;
		   $valb=$valb * 2 ;
           $dev = 0;
		   if ($vala > $valb){
		    $dev = $vala;
		   }else{
		   $dev = $valb;
		   }
		    echo "<br>Dentro de la funcion";
	   echo "<br>Valor a = ".$vala;
	   echo "<br>Valor b = ".$valb;
         return($dev);
       }
       //Ahora considero programa principal
       $vala=50;
       $valb=70;
	   echo "<br>Previo a invocar funcion";
	   echo "<br>Valor a = ".$vala;
	   echo "<br>Valor b = ".$valb;
       $dev2 = funca($vala,$valb);
      echo "<br>Despúes de invocar funcion";
	   echo "<br>Valor a = ".$vala;
	   echo "<br>Valor b = ".$valb;
	   echo "<br>Valor devuelto = ".$dev2;
	
?>

<br>
Copyright - Joel Szwarcbort - DWES - Los Enlaces - ZGZ - 22-23 - PHP 8.0