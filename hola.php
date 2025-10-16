<?php
//Autor: Ruben
//El nombre ppor defecto es Mundo
$nombre=isset($argv[1])?$argv[1]:"Mundo";
@print"Hola {$nombre}.\n";
?>
