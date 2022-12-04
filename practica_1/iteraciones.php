<?php 
//Variables practica 1
//Joel Szwarcbort - 03/12/2022
?>
<html>
<header>
<title>Tarea 2 - Practica 1 - Joel Szwarcbort</title>
</header>
<body>
Ternario en PHP
<br>
<?php
$num = 0;
$cant = 0;
$total=0;
while($cant<100){
if ($num%2==0) {
$total= $total+$num;
$cant =$cant + 1;
}
$num = $num+1;

}
echo "Los primeros 100 números pares suman $total";

?>
<br>
Copyright - Joel Szwarcbort - DWES - Los Enlaces - ZGZ - 22-23 - PHP 8.0