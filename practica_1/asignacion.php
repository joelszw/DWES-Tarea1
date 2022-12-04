<?php 
//Variables practica 1
//Joel Szwarcbort - 03/12/2022
?>
<html>
<header>
<title>Tarea 2 - Practica 1 - Joel Szwarcbort</title>
</header>
<body>
Asignación en PHP
<table>
<tr><td>
Expresión asignada</td><td>	Valor de la expresión</td></tr><tr><td>
$a=14</td><td><?php $a=14; echo "-".$a." - (".gettype($a).") Viene de asignar una constante númerica entera";?></td></tr><tr><td>
$a=2.86</td><td><?php $a=2.86; echo "-".$a." - (".gettype($a).") Viene de asignar una constante númerica decimal";?></td></tr><tr><td>
$a=0b11010111</td><td><?php $a=0b11010111; echo "-".$a." - (".gettype($a).") Viene de asignar una constante binaria";?></td></tr><tr><td>
$a=0xba14</td><td><?php $a=0xba14; echo "-".$a." - (".gettype($a).") Viene de asignar una constante hexadecimal";?></td></tr><tr><td>
$a="hola, soy Paula"</td><td><?php $a="hola, soy Paula"; echo "-".$a." - (".gettype($a).") Viene de asignar una constante cadena de carácteres";?></td></tr><tr><td>
$a=2+6</td><td><?php $a=2+6; echo "-".$a." - (".gettype($a).") Viene de asignar una expresión aritmética";?></td></tr><tr><td>
$a="hola"."buenas"</td><td><?php $a="hola"."buenas"; echo "-".$a." - (".gettype($a).") Viene de asignar una expresión de concatenación de cadenas de carácteres";?></td></tr><tr><td>
$a=print(" hola buenas")</td><td><?php $a=print("hola buenas"); echo "-".$a." - (".gettype($a).") Viene de asignar una función";?></td></tr><tr><td>
$a=($v= 14)</td><td><?php $a=print("($v=14)"); echo "-".$a." - (".gettype($a).") Viene de asignar una expresión que es una asignación";?></td></tr></table>

<br>
Copyright - Joel Szwarcbort - DWES - Los Enlaces - ZGZ - 22-23 - PHP 8.0