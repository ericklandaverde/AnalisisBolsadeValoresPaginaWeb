<?php
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("bolsavaloresmx", $con);

$sth = mysql_query("SELECT CierreAjustado FROM grupomexico");
$rows = array();
$rows['name'] = 'Grupo Mexico';
while($r = mysql_fetch_array($sth)) {
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

mysql_close($con);
?>
