<?php
$con = mysqli_connect("mysql.hostinger.es","u228980204_pg","aipZwHQoh9","u228980204_bv");
//Hosting: mysql.hostinger.es
//BaasedeDatos: u228980204_bv
//Usuario: u228980204_pg
//Contraseña: aipZwHQoh9
if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysqli_select_db($con, "u228980204_bv");

$sth = mysqli_query($con,"SELECT CierreAjustado FROM americanmovil");
$rows = array();
$rows['name'] = 'American Movil';
while($r = mysqli_fetch_array($sth)) {
    $rows['data'][] = $r['CierreAjustado'];
}

//$sth = mysql_query("SELECT overhead FROM projections_sample");
//$rows1 = array();
//$rows1['name'] = 'Overhead';
//while($rr = mysql_fetch_assoc($sth)) {
//    $rows1['data'][] = $rr['overhead'];
//}

$result = array();
array_push($result,$rows);
//array_push($result,$rows1);


print json_encode($result, JSON_NUMERIC_CHECK);

mysqli_close($con);
?>
