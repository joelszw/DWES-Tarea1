<?php 
//Variables practica 1
//Joel Szwarcbort - 03/12/2022
?>
<html>
<header>
<title>Tarea 2 - Practica 1 - Joel Szwarcbort</title>
</header>
<body>
Selección en PHP
<br>
<?php
$edad = rand (0,200);
switch (true){
    case (($edad >= 0) and ($edad <=11)):
        $imp = "Eres un niño";
        break;
    case ($edad >= 12 && $edad <=17):
        $imp = "Eres un adolescente";
        break;
    case ($edad >= 18 && $edad <=35):
        $imp = "Eres un joven";
        break;
    case ($edad >= 36 && $edad <=65):
        $imp = "Eres un adulto";
        break;
    case ($edad >= 66 && $edad <=110):
        $imp = "Eres un Jubilado";
        break;
    default:
        $imp = "edad no contenplada en nuestra encuesta";
}
echo $edad ." años, ".$imp;
?>
<br>
Copyright - Joel Szwarcbort - DWES - Los Enlaces - ZGZ - 22-23 - PHP 8.0