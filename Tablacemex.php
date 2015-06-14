<html>
<head>
	<title>Tabla Cemex</title>
<!-- Importa ccs para dar formato a ala grafica -->
<link rel="stylesheet" href="css/cssanalisis.css" type="text/css">
<!-- Final ccs para dar formato a ala grafica -->
</head>
<body>
<?php
$conexion=mysql_pconnect("localhost","root","") or die("No hay conexion");
$conectBD=mysql_select_db("bolsavaloresmx",$conexion) or die("No existe base de datos");
?>
<!-- Creacion de tabla....................................................................................................................................... -->
<center>
<h4>Cemex.</h4>
<p>Cemex, S.A.B. de C.V. (CEMEXCPO.MX).</p><br>
<table class="tabla">
<tr>
	<th>Fecha</th>
	<th>Precio Apertura</th>
	<th>Maximo</th>
	<th>Minimo</th>
	<th>Cierre</th>
	<th>Volumen</th>
	<th>Cierre Ajustado</t>
</tr>
<?php
$sql="select * from cemex";
$resultados=mysql_query($sql,$conexion);
if(!$resultados){
	echo"No se pueden selecionar los datos";
	exit();
}
while($registro=(mysql_fetch_array($resultados)))
{
	echo "<tr>\n";
    echo"\t<td>".$registro['Fecha']."</td>\n";
	echo"\t<td>".$registro['PrecioApertura']."</td>\n";
	echo"\t<td>".$registro['Maximo']."</td>\n";
	echo"\t<td>".$registro['Minimo']."</td>\n";
	echo"\t<td>".$registro['Cierre']."</td>\n";
	echo"\t<td>".$registro['Volumen']."</td>\n";
	echo"\t<td>".$registro['CierreAjustado']."</td>\n";
	echo"</tr>\n";
}
mysql_free_result($resultados);
mysql_close($conexion);
?>
</table>
</center>
<!--Final Creacion de tabla....................................................................................................................... -->
</body>
</html>