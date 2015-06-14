<?php
$conexion = mysqli_connect('mysql.hostinger.es','u228980204_root','dbWf9kt0es','u228980204_login') or die ('Error de Conexion de Servidor: ' .  mysqli_error());

$db=mysqli_select_db($conexion, 'u228980204_login') or die ('Error al seleccionar la Base de Datos: '.mysql_error());
mysqli_query ($conexion,"SET NAMES 'utf8'");

//Hosting: mysql.hostinger.es
//BaasedeDatos: u228980204_login
//Usuario: u228980204_root
//Contraseña: dbWf9kt0es
?>