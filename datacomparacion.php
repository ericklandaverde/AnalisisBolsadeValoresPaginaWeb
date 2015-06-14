<?php
$con = mysqli_connect("mysql.hostinger.es","u228980204_pg","aipZwHQoh9","u228980204_bv");
//Hosting: mysql.hostinger.es
//BaasedeDatos: u228980204_bv
//Usuario: u228980204_pg
//Contraseña: aipZwHQoh9

if (!$con) {
  die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($con,"u228980204_bv");

$sth = mysqli_query($con,"SELECT CierreAjustado FROM americanmovil");
$rows = array();
$rows['name'] = 'American Movil';
while($r = mysqli_fetch_array($sth)) {
    $rows['data'][] = $r['CierreAjustado'];
}

$sth = mysqli_query($con,"SELECT CierreAjustado FROM cemex");
$rows1 = array();
$rows1['name'] = 'Cemex';
while($rr = mysqli_fetch_assoc($sth)) {
    $rows1['data'][] = $rr['CierreAjustado'];
}

$sth = mysqli_query($con,"SELECT CierreAjustado FROM walmart");
$rows2 = array();
$rows2['name'] = 'Wal-Mart de Mexico';
while($rrr = mysqli_fetch_assoc($sth)) {
    $rows2['data'][] = $rrr['CierreAjustado'];
}

$sth = mysqli_query($con,"SELECT CierreAjustado FROM grupomexico");
$rows3 = array();
$rows3['name'] = 'Grupo Mexico';
while($rrrr = mysqli_fetch_assoc($sth)) {
    $rows3['data'][] = $rrrr['CierreAjustado'];
}

$sth = mysqli_query($con,"SELECT CierreAjustado FROM empresasica");
$rows4 = array();
$rows4['name'] = 'Empresas ICA';
while($rrrrr = mysqli_fetch_assoc($sth)) {
    $rows4['data'][] = $rrrrr['CierreAjustado'];
}

$result = array();
array_push($result,$rows);
array_push($result,$rows1);
array_push($result,$rows2);
array_push($result,$rows3);
array_push($result,$rows4);

print json_encode($result, JSON_NUMERIC_CHECK);

mysqli_close($con);
?>
