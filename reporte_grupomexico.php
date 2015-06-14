<?php

include "include/fpdf/fpdf.php";
include "conexion.php";


class  MiPDF extends FPDF {
		
		public function Header(){
		//Cabecera de la Pagina PDF
		//Logo
		$this -> Image( "images/page4_img1.jpg" , 10 , 10 , 20 , 20);
		$this->SetFont('Arial','B',15);
		//Movernos a la derecha
		$this->Cell(80);
		//Titulo
		$this->Cell(30,10,utf8_decode('Grupo Mexico, S.A.B. de C.V. (GMEXICOB.MX).'),0,0,'C');
		//Salto de Linea
		$this->Ln(20);//Fuente

		$this->SetFont('Arial','B',10);
		$this->Cell(0,10,utf8_decode('Calle Candelaria Sur Nro. 22, Casco Historico,'),0,'L');
		$this->Ln(4);
		$this->Cell(0,10,utf8_decode('Telefonos: 3453454344354356,'),0,'L');
		$this->Ln(4);
		$this->Cell(0,10,utf8_decode('Usuarios: ,'),0,'L');
		$fecha=date("d-m-Y");
		$this->Ln(4);
		$this->Cell(0,10,$fecha,0,'L');
		$this->Ln(4);
		$this->Cell(0,10,utf8_decode('Listado de Personas Mayores'),0,0,'C');
		$this->Ln();
		$this->Ln(4);

			
			
		}
	
}

$cabeceraT = array("Fecha", "Precio Apertura" ,"Maximo ", "Minimo" , "Cierre", "Volumen", "Cierre Ajustado");


$mipdf = new MiPDF('L','mm','A4');

$mipdf -> addPage();

for ($i = 0; $i < count( $cabeceraT ) ; $i++)
{
	$mipdf -> SetFont( 'Courier' , 'B' , 12 );
	$mipdf -> SetTextColor( 255 , 255 , 255);
	$mipdf -> Cell ( 40 , 10 , $cabeceraT[ $i ] , 1 , 0 , 'C' , true );
	
	
}

$mipdf -> Ln( 10);

$consulta = mysql_query( "SELECT * FROM grupomexico " );

while ( $datos = mysql_fetch_array( $consulta ) )
{
	$Fecha = $datos [ 'Fecha' ];
	$PrecioApertura = $datos [ 'PrecioApertura' ];
	$Maximo = $datos [ 'Maximo' ];
	$Minimo = $datos [ 'Minimo' ];
	$Cierre = $datos [ 'Cierre' ];
	$Volumen = $datos [ 'Volumen' ];
	$CierreAjustado = $datos [ 'CierreAjustado' ];

	$mipdf -> SetFillColor( 0 , 238 , 0 );	
	$mipdf -> Cell( 40, 10 , $Fecha , 1, 0, 'C' , true );
	$mipdf -> Cell( 40, 10 , $PrecioApertura , 1, 0, 'C' , true );
	$mipdf -> Cell( 40, 10 , $Maximo, 1, 0, 'C' , true );
	$mipdf -> Cell( 40, 10 , $Minimo, 1, 0, 'C' , true );
	$mipdf -> Cell( 40, 10 , $Cierre , 1, 0, 'C' , true );
	$mipdf -> Cell( 40, 10 , $Volumen , 1, 0, 'C' , true );
	$mipdf -> Cell( 40, 10 , $CierreAjustado , 1, 0, 'C' , true );
	$mipdf -> Ln( 10);
	
}
 

$mipdf -> Output();


?>


