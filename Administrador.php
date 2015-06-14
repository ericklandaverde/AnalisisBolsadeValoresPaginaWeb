<!DOCTYPE html>
<html lang="es">
<head>
<title>Administrador</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Swis721_Cn_BT_400.font.js"></script>
<script type="text/javascript" src="js/Swis721_Cn_BT_700.font.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<!-- Importa ccs para dar formato a ala grafica -->
<link rel="stylesheet" href="css/cssanalisis.css" type="text/css">
<!-- Final ccs para dar formato a ala grafica -->
<!-- Importa ccs para dar formato a ala grafica -->
<link rel="stylesheet" href="css/cssadministrador.css" type="text/css">
<!-- Final ccs para dar formato a ala grafica -->
<!--Llamo el tema que deceo -->
<link rel="stylesheet" type="text/css" href="css/south-street/jquery-ui-1.10.3.custom.css">
<!--Llamamos la libreria jquery -->
<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
<!--Llamamos la libreria jquery-ui (interface de usuario) -->
<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>

  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.bg{ behavior: url(js/PIE.htc); }
	</style>
  <![endif]-->
	<!--[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
		</div>
	<![endif]-->

</head>

<body id="page4">
	<div class="body1">
	<div class="body2">
	<div class="body5">
		<div class="main">
<!-- header -->
			<header>
				<div class="wrapper">
				<h1><a href="index.html" id="logo">Progress Business Company</a></h1>
				<nav>
					<ul id="menu">
						<li id="nav1" class="active"><a href="#">Altas<span>Resgistros</span></a></li>
						<li id="nav2"><a href="#">Consultas<span>Registros</span></a></li>
						<li id="nav3"><a href="#">Cambios<span>Registros</span></a></li>
						<li id="nav4"><a href="#">Bajas<span>Registros</span></a></li>
						<li id="nav5"><a href="#">Contacto.<span>Mensajes</span></a></li>
					</ul>
				</nav>
				</div>
			</header><div class="ic">More Website Templates  at TemplateMonster.com!</div>
<!-- header end-->
		</div>
	</div>
	</div>
	</div>
	<div class="body3">
		<div class="main">
<!-- content .................................................................................................................................................-->
			<article id="content">
<!-- Conexion Base de datos...................................................................................................................................-->
<?php
$conexion=mysql_pconnect("localhost","root","") or die("No hay conexion");
$conectBD=mysql_select_db("bolsavaloresmx",$conexion) or die("No existe base de datos");
?>
<!-- Final Conexion Base de datos............................................................................................................................ -->
<!--Crer las tabs............................................................................................................................................. -->
<div id="tabs">
	<ul>
		<li><a href="#pes_americanmovil"><span>American Movil.</span></a></li>
		<li><a href="#pes_cemex"><span>Cemex</span></a></li>
		<li><a href="#pes_walmart"><span>Wal - Mart</span></a></li>
		<li><a href="#pes_grupomexico"><span>Grupo Mexico</span></a></li>
		<li><a href="#pes_empresasica"><span>Empresas ICA</span></a></li>
	</ul>
	<div id="pes_americanmovil">
		<iframe name="ifr_americanmovil" src="Tablaamericanmovil.php" width="100%" height="550"></iframe>
	</div>
	<div id="pes_cemex">
		<iframe name="ifr_cemex" src="Tablacemex.php" width="100%" height="550"></iframe>
	</div>
	<div id="pes_walmart">
		<iframe name="ifr_walmart" src="Tablawalmart.php" width="100%" height="550"></iframe>
	</div>
	<div id="pes_grupomexico">
		<iframe name="ifr_grupomexico" src="Tablagrupomexico.php" width="100%" height="550"></iframe>
	</div>
	<div id="pes_empresasica">
		<iframe name="ifr_empresasica" src="Tablaempresasica.php" width="100%" height="550"></iframe>
	</div>
</div>
<script type="text/javascript">
$("#tabs").tabs();
</script>
<!--Final del Tabs........................................................................................................................................... -->
<!--Inicio formulario........................................................................................................................................ -->
<form class="formulario" action="" method="post"> 
	<label for="fecha">Fecha: </label>
	<input type="date" name="fecha" placeholder="aa-mm-dd" required><br>
	<!---->
    <label for="precioapertura">Precio Apertura: </label>
    <input type="number" name="precioapertura" placeholder="Escribre aqui" required><br>                 
    <!---->
    <label for="maximo"> Maximo: </label>
    <input type="number" name="maximo" placeholder="Escribre aqui" required><br>
    <!---->
    <label for="minimo"> Minimo: </label>
    <input type="number" name="minimo" placeholder="Escribre aqui" required><br>
    <!---->
    <label for="cierre"> Cierre: </label>
    <input type="number" name="cierre" placeholder="Escribre aqui" required><br>
    <!---->
    <label for="volumen"> Volumen: </label>
    <input type="number" name="volumen" placeholder="Escribre aqui" required><br>
    <!---->
    <label for="cierreajustado"> Cierre Ajustado: </label>
    <input type="number" name="cierreajustado" placeholder="Escribre aqui" required><br>
    <!---->
    <label for="Base">Base de datos: </label>
	<select name="base" class='lstBase'>
		<option value=''>Elige la base de datos</option>
		<option value= americanmovil>American Movil.</option>
		<option value= cemex>Cemex</option>
		<option value= walmart>Wal-Mart de Mexico.</option>
		<option value=grupomexico>Grupo Mexico.</option>
		<option value= empresasica>Empresas ICA.</option>
	</select><br>
    <input type="submit" value="Enviar Datos" id="btnSubmit">
</form>
<!-- Final del formulario.....................................................................................................................................-->
<!-- Agregar datos............................................................................................................................................-->
<?php
if(isset($_POST['fecha']) && !empty($_POST['fecha']) &&
   isset($_POST['precioapertura']) && !empty($_POST['precioapertura']) &&
   isset($_POST['maximo']) && !empty($_POST['maximo']) &&
   isset($_POST['minimo']) && !empty($_POST['minimo']) &&
   isset($_POST['cierre']) && !empty($_POST['cierre']) &&
   isset($_POST['volumen']) && !empty($_POST['volumen']) &&
   isset($_POST['cierreajustado']) && !empty($_POST['cierreajustado']))
   {
   	mysql_query("INSERT INTO $_POST[base] (Fecha, PrecioApertura, Maximo, Minimo, Cierre, Volumen, CierreAjustado)
   	VALUES ('$_POST[fecha]','$_POST[precioapertura]','$_POST[maximo]','$_POST[minimo]','$_POST[cierre]','$_POST[volumen]','$_POST[cierreajustado]')",$conexion);
   	echo "Datos insetados correctamente";
   }else{
   	echo "Insertar datos (Preblema al insertar los datos) ";
   }
mysql_close($conexion);
?>
<!-- Final Agregar datos...............................................................................................................................-->
			</article>
		</div>
<!-- content ................................................................................................................................................ -->		</div>
	<div class="body4">
		<div class="main">
			<article id="content2">
				<div class="wrapper">
					<section class="col3">
						<h4>Enlaces:</h4>
						<ul class="list1">
							<li><a href="www.bmv.com.mx">Bolsa Mexicana de Valores.</a></li>
							<li><a href="http://mx.finanzas.yahoo.com/q?s=AMXL.MX">America Movil.</a></li>
							<li><a href="http://mx.finanzas.yahoo.com/q?s=CEMEXCPO.MX">Cemex.</a></li>
							<li><a href="http://mx.finanzas.yahoo.com/q?s=WALMEXV.MX">Wal - Mart de Mexico.</a></li>
							<li><a href="http://mx.finanzas.yahoo.com/q?s=GMEXICOB.MX">Grupo Mexico.</a></li>
							<li><a href="http://mx.finanzas.yahoo.com/q?s=ICA.MX">Empresas ICA.</a></li>
						</ul>
					</section>
					<section class="col3 pad_left2">
						<h4>Administrador.</h4>
						<ul class="address">
							<li><span>Pais:</span>Mexico.</li>
							<li><span>Ciudad:</span>Estado de Mexico.</li>
							<li><span>Telefono:</span>044-55-36-76-88-53</li>
							<li><span>Email:</span><a href="mailto:">harry_erick92@outlook.com</a></li>
						</ul>
					</section>
					<section class="col3 pad_left2">
						<h4>Sígueme </h4>
						<ul id="icons">
							<li><a href="https://www.facebook.com/erickalbertolandaverde"><img src="images/icon1.jpg" alt="">Facebook Erick Landaverde</a></li>
							<li><a href="#"><img src="images/icon2.jpg" alt="">Twitter Erick Landaverde.</a></li>
							<li><a href="#"><img src="images/icon3.jpg" alt="">LinkedIn Erick Landaverde.</a></li>
						</ul>
					</section>
					<section class="col2 right">
						<h4>Suscribete...</h4>
						<form id="newsletter" method="post">
							<div>
								<div class="wrapper">
									<input class="input" type="text" value="Coloca tu Email aqui"  onblur="if(this.value=='') this.value='Type Your Email Here'" onfocus="if(this.value =='Type Your Email Here' ) this.value=''" >
								</div>
								<a href="#" class="button" onclick="document.getElementById('newsletter').submit()">Enviar</a>
							</div>
						</form>
					</section>
				</div>
			</article>
<!-- content end -->
		</div>
	</div>
		<div class="main">
<!-- footer -->
			<footer>
				<a rel="nofollow" href="" target="_blank">Analisis Bolsa de Valores</a> es propiedad de Erick Landaverde.<br>
				<a href="index.html">Salir</a> a pagina usuario.
			</footer>
<!-- footer end -->
		</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>