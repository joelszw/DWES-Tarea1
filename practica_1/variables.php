<?php 
//Variables practica 1
//Joel Szwarcbort - 03/12/2022
?>
<html>
<header>
<title>Tarea 2 - Practica 1 - Joel Szwarcbort</title>
</header>
<body>
Variables en PHP
<br>
<table>
<tr><td>Valores Asignados</td><td>Mostrando valores</td></tr>
<tr><td>$v=306</td><td><?php $v=306; printf("Variable decimal, valor -%d-", $v);?></td></tr>
<tr><td>$v=0154</td><td>Variable octal <?php $v=0154; printf("Variable decimal, valor -%d-", $v);?> y en <?php printf("octal, valor -%o-", $v);?></td></tr>
<tr><td>$v=0xba14</td><td>Variable hexadecimal,valor decimal -<?php $v=0xba14; printf("Variable decimal, valor -%d-", $v);?>- y en <?php printf("hexadecimal, valor -%X-", $v);?></td></tr>
<tr><td>$v=0b1110</td><td>Variable binaria, <?php $v=0b1110; printf("Variable decimal, valor -%d-", $v);?> y en <?php printf("binario, valor -%b-", $v);?></td></tr>
<tr><td>$v=8.5647789118</td><td><?php $v=8.5647789118; printf("Variable float, valor -%f-", $v);?> y en <?php printf("notación cientifica, valor -%e-", $v);?></td></tr>
<tr><td>$v= 2.445400e+1</td><td>	<?php $v=2.445400e+1; printf("Variable float, valor -%.2F-", $v);?> y en <?php printf("notación cientifica, valor -%E-", $v);?></td></tr>
<tr><td>$v=null</td><td><?php $v=null; printf("Variable null es, valor -%b-", $v);?> y en <?php printf("string, valor -%s-", $v);?></td></tr>
<tr><td>$v=true</td><td><?php $v=true; printf("Variable boolean, valor -%G-", $v);?> y en <?php printf("string, valor -%s-", $v);?></td></tr>
<tr><td>$v=false</td><td><?php $v=false; printf("Variable boolean, valor -%G-", $v); echo $v;?> y en <?php printf("string, valor -%s-", $v);?></td></tr>
<tr><td>$v="Esto es una cadena de caracteres"</td><td><?php $v="Esto es una cadena de caracteres"; printf("Variable string, valor -%s-", $v);?></td></tr>
<tr><td>$v='Esto es una cadena de caracteres'</td><td><?php $v='Esto es una cadena de caracteres'; printf("Variable string, valor -%s-", $v);?></td></tr>
<tr><td>$v=<<< END
Esto que ves,
es una cadena
multilínea
y termina aquí             

END;</td><td><?php $v=<<< END
Esto que ves,
es una cadena
multilínea
y termina aquí             

END; printf("Variable string, valor -%s-", $v);?></td></tr>
<tr><td>$v=<<< 'END'
Esto que ves,
es una cadena
multilínea
y termina aquí              

END;</td><td><?php $v=<<< 'END'
Esto que ves,
es una cadena
multilínea
y termina aquí              

END; printf("Variable string, valor -%s-", $v);?></td></tr>
</table>
<br>
Copyright - Joel Szwarcbort - DWES - Los Enlaces - ZGZ - 22-23 - PHP 8.0
