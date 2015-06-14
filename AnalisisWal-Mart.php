<!DOCTYPE html>
<html lang="es">
<head>
<title>Analisis Wal - Mart de Mexico.</title>
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
<!-- Importa las librerias de jQuery y las de Highcharts -->
		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/highcharts.js"></script>
		<script type="text/javascript" src="js/exporting.js"></script>	
<!-- Librerias Grafica............ -->
<link href="css/style.css" type="text/css" rel="stylesheet"/>
<link href="css/south-street/jquery-ui-1.10.3.custom.css" type="text/css" rel="stylesheet"/>
<link href="css/datatables.css" type="text/css" rel="stylesheet"/>
	
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/datatables.js"></script>
<script src="js/functionswalmart.js"></script>	
  
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

<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        $.getJSON("datawalmart.php", function(json) {
	    
		    chart = new Highcharts.Chart({
	            chart: {
	                renderTo: 'graficaLineal', // Le doy el nombre a la gráfica
	                type: 'line',              // Pongo que tipo de gráfica es
	            },
	            title: {
	                text: 'Bolsa de Valores',  // Titulo (Opcional)
	            },
	            subtitle: {
	                text: 'Wal - Mart de Mexico',   // Subtitulo (Opcional)
	            },
	            // Pongo los datos en el eje de las 'X'
	            xAxis: {
	                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
	                // Pongo el título para el eje de las 'X'
				title: {
					text: 'Dia'
					}
	            },
	            yAxis: {
	            // Pongo el título para el eje de las 'Y'
	                title: {
	                    text: 'Cierre'
	                },
	            //Propiedades para la linea(s)
	                plotLines: [{
	                    value: 0,
	                    width: 1,
	                    color: '#808080'
	                }]
	            },
	            // Doy formato al la "cajita" que sale al pasar el ratón por encima de la gráfic
	            tooltip: {
						enabled: true,
						formatter: function() {
							return '<b>'+ 'Bolsa de Valores' +'</b><br/>'+
								this.x +': '+ this.y +' '+ this.series.name;
						}
					},
				// Doy opciones a la gráfica
					plotOptions: {
						line: {
							dataLabels: {
								enabled: true
							},
							enableMouseTracking: true
						}
					},
	            series: json
	        });
	    });
    
    });
    
});
</script>
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
						<li id="nav1" class="active"><a href="index.html">Principal<span>Bienvenido!</span></a></li>
						<li id="nav2"><a href="Nuevo.html">Nuevo<span>Noticias!</span></a></li>
						<li id="nav3"><a href="Analisis.html">Analisis.<span>Graficas!</span></a></li>
						<li id="nav4"><a href="Media.html">Media.<span>Video, Imagenes!</span></a></li>
						<li id="nav5"><a href="Contacto.html">Contacto.<span>Nuestra Dirección!</span></a></li>
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
<!-- contenido -->
			<article id="content">
<!-- Conexion Base de datos...................................................................................................................... -->
<?php
$conexion=mysql_pconnect("localhost","root","") or die("No hay conexion");
$conectBD=mysql_select_db("bolsavaloresmx",$conexion) or die("No existe base de datos");
?>
<!-- Final Conexion Base de datos.................................................................................................................-->
<a class="btn btn-danger pull-right" target="_blank" href="reporte_walmart.php">Descargar Listado </a> 
<!-- Creacion de tabla........................................................................................................................... -->
<center>
<h1>Wal - Mart de Mexico.</h1><br>
<p>Wal - Mart de Mexico, S.A.B. de C.V. (WALMEXV.MX).</p><br>
<table >
	<thead>
		<tr>
			<th>Fecha</th>
			<th>Precio Apertura</th>
			<th>Maximo</th>
			<th>Minimo</th>
			<th>Cierre</th>
	    	<th>Volumen</th>
			<th>Cierre Ajustado</th>
			</tr>
		</thead>
</table>
</center>
<!--Final Creacion de tabla....................................................................................................................... -->               
<!-- "Llamo" a la gráfica y la pinto en el cuerpo de la página.................................................................................... -->               
               <div id="graficaLineal" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
<!--Final de la grafcia llamada................................................................................................................... -->               
			</article>
		</div>
<!-- contenido-->	
	</div>
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
				<a href="Login-ajax/index.php" target="_blank">Administrador & Usuarios</a> entrada restringida.
			</footer>
<!-- footer end -->
		</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>