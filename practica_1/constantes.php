<?php 
//Variables practica 1
//Joel Szwarcbort - 03/12/2022
?>
<html>
<header>
<title>Tarea 2 - Practica 1 - Joel Szwarcbort</title>
</header>
<body>
Constantes en PHP
<br>
Constante declarada con Define 
<br>  
<?php 
define("EDADd",40);
echo "Tengo " . EDADd . "años (Constante declarada con define)";
?>
<br>
Constante declarada con const 
<br> 
<?php 
const EDADc = 40;
echo "Tengo " . EDADc . "años (Constante declarada con const)";
?>
<br>
Operación con define 
<br> 
<?php 
$TEDADd = 100 - EDADd;
echo "Para los 100, me faltan " .$TEDADd . "años (Operación de constante con define)";
?>
<br>
Operación con const  
<br>
<?php 
$TEDADc = 100 - EDADc;
echo "Para los 100, me faltan " .$TEDADc . "años (Operación de constante con const)";
?>

<br>
Copyright - Joel Szwarcbort - DWES - Los Enlaces - ZGZ - 22-23 - PHP 8.0